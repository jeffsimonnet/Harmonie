<?php

namespace App\Service;

use App\Document\Page;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\Routing\RouterInterface;

class LinkChecker
{
    private $slugs;
    private $routes;

    public function __construct(DocumentManager $documentManager, RouterInterface $router)
    {
        $query = $documentManager
            ->createQueryBuilder(Page::class)
            // ->field('type')->in(['contenu', 'statique', 'template', 'home'])
            // ->field('status')->equals('publie')
        ;
        $pages = $query
            ->sort('slug')
            ->getQuery()->execute();

        $this->slugs = array_map(function ($p) {
            return $p->getSlug();
        }, iterator_to_array($pages));

        $this->routes = array_map(function ($r) {
            return $r->getPath();
        }, $router->getRouteCollection()->all());
    }

    public function isInPage($link)
    {
        return substr($link, 0, 1) == '#';
    }

    public function isAbsolute($link)
    {
        return substr($link, 0, 4) == 'http';
    }

    public function isCorrect($link)
    {
        return $this->isAbsolute($link) || $this->isInPage($link) || substr($link, 0, 1) == '/' && substr($link, -1) == '/';
    }

    public function isFound($link)
    {
        return $this->isAbsolute($link) || $this->isInPage($link) || in_array($link, $this->slugs) || in_array($link, $this->routes);
    }

    public function parseLinks($content)
    {
        $link_pattern = "/href=\"([^\"]*)\"/";

        $links = [];
        preg_match_all($link_pattern, $content, $links);

        return $links[1];
    }

    public function parseImgs($content)
    {
        $src_pattern = "/src=\"([^\"]*)\"/";

        $imgs = [];
        preg_match_all($src_pattern, $content, $imgs);

        return $imgs[1];
    }

    public function getLinkErrors($content)
    {
        $links = $this->parseLinks($content);

        $auditPage = [];
        $auditPage["has_incorrect_link"] = array_filter($links, function ($l) {
            return !$this->isCorrect($l);
        });

        $auditPage["page_not_found"] = array_filter($links, function ($l) {
            return !$this->isFound($l);
        });

        return $auditPage;
    }
}
