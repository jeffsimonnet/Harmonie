<?php

namespace App\Controller;

use App\Document\Page;
use App\Service\LinkChecker;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Log\DebugLoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Throwable;

class ErrorController extends AbstractBaseController
{
    public function show(Throwable $exception, DebugLoggerInterface $logger, SluggerInterface $slugger)
    {
        if ($this->getParameter('kernel.environment') !== 'dev') {
            $request = $this->get('request_stack')->getMasterRequest();
            $path = trim($request->server->get('REQUEST_URI'), '/');
            if (!empty($path)) {

                $redirect = $this->getRedirect('/' . $path . '/');
                if (!empty($redirect)) {
                    return $this->redirect($redirect);
                }

                $parts = str_replace('//', '/', $path); // Remove incorrect double slashes in case url is malformed
                // clean slug parts, separated by slash
                $parts = explode('/', $parts);
                $parts = array_map(function ($s) use ($slugger) {
                    return $slugger->slug($s);
                }, $parts);
                $slugged = implode('/', $parts);
                if ($slugged != $path) {
                    // if url is not clean, we try to redirect to a clean one
                    return $this->redirect('/' . $slugged . '/');
                }
            }

            if ($exception instanceof NotFoundHttpException && $exception->getStatusCode() == 404) {
                // if 404, we redirect to home
                return $this->redirect('/');
            }
        }

        // otherwise, we crash
        throw $exception;
    }

    /**
     * @Route("/admin/audit/", name="admin_audit")
     */
    public function audit(LinkChecker $linkChecker)
    {
        $query = $this->dm
            ->createQueryBuilder(Page::class)
            // ->field('type')->in(['contenu', 'statique', 'template', 'home'])
            // ->field('status')->equals('publie')
        ;
        $pages = $query
            ->sort('slug')
            ->getQuery()->execute();

        $audit = [];
        foreach ($pages as $page) {
            $content = serialize($page->getContent());
            $links = $linkChecker->parseLinks($content);
            $imgs = $linkChecker->parseImgs($content);
            $auditPage = [
                "slug" => $page->getSlug(),
                "size" => strlen($content),
                "links" => $links,
                "imgs" => $imgs,
            ];

            if (strpos($content, 'data:') > -1) $auditPage["has_data_uri"] = true;
            if (strpos($content, '-->') > -1) $auditPage["has_comment"] = true;
            if (strpos($content, '<!--(figm') > -1) $auditPage["has_figma_garbage"] = true;

            $errors = $linkChecker->getLinkErrors($content);
            if (!empty($errors["has_incorrect_link"])) $auditPage["has_incorrect_link"] = true;
            if (!empty($errors["page_not_found"])) $auditPage["page_not_found"] = $errors["page_not_found"];
            $audit[] = $auditPage;
        }
        dd($audit);
    }

    // TODO put this in config file
    private function getRedirect($slug)
    {
        $redirects = [
            // "/old-path/" => "/new/path/",
        ];

        return @$redirects[$slug];
    }
}
