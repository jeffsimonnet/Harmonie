<?php

namespace App\Controller;

use App\Document\Page;
use App\Document\Zone;
use App\Form\ContactType;
use App\Form\Custom\BlogCategoryType;
use App\Form\Custom\RealisationCategoryType;
use App\Service\PageCacheManager;
use App\Service\RdvfConnector;
use App\Service\ReCaptchaChecker;
use App\Service\VideoCacheManager;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Annotation\Route;
use App\Controller\CampaignDetectorController;

class PagesController extends AbstractBaseController implements CampaignDetectorController {

    /**
     * @Route("/", name="home")
     */
    public function home(PageCacheManager $pageCacheManager, Request $request) {
        return $this->renderPage($pageCacheManager, $request, '/');
    }

    /**
     * @Route("/{slug}/", name="content_page", requirements={"slug"=".+"}, priority=-1000)
     */
    public function page(PageCacheManager $pageCacheManager, Request $request, string $slug) {
        return $this->renderPage($pageCacheManager, $request, '/' . $slug . '/');
    }

    private function renderPage(PageCacheManager $pageCacheManager, Request $request, string $path) {
        if (!is_null($request->query->get('edit'))) {
            $page = $this->dmGetRepo(Page::class)->findOneBy(['slug' => $path]);
            if (!empty($page)) {
                return $this->redirectToRoute('admin_' . $page->getType() . '_edit', ['page' => $page->getId()]);
            }
        }

        $resetCache = $request->query->get('reset');
        $content = $pageCacheManager->getPage($path, $resetCache);

        if (empty($content))
            throw new NotFoundHttpException("Page introuvable !");
        return $content;
    }

    /**
     * @Route("/_modules/map/{page}/", name="_module_map")
     */
    public function moduleMap(PageCacheManager $pageCacheManager, string $page) {
        return $pageCacheManager->getMapRealisations($page);
    }

    /**
     * @Route("/_modules/contact/", name="_module_contact")
     */
    public function moduleContact(Request $request, MailerInterface $mailer, ReCaptchaChecker $reCaptchaChecker, RdvfConnector $rdvfConnector) {
        $form = $this->createForm(ContactType::class, null);
        $form->handleRequest($this->get('request_stack')->getMasterRequest());

        if ($form->isSubmitted() && $form->isValid()) {
            $checked = $reCaptchaChecker->check($form->get('recaptcha')->getData());
            if (!$checked) {
                $message = "Le CAPTCHA n'a pas pu être vérifié, veuillez réessayer, merci !";
            }
            else {
                try {
                    $infos = $form->getData();
                    $this->sendEmailContact($mailer, $infos);
                    $message = "Merci de votre contact ! Nous allons revenir vers vous au plus vite !";

                    $infos["origin"] = $request->headers->get('referer');

                    $campaign = $request->getSession()->get('_campaign');
                    if (isset($campaign['campaign'])) {
                        $infos["campagne"] = $campaign['campaign'];
                    }
                    else {
                        $infos['campagne'] = 1;
                    }

                    $rdvfConnector->sendDataFormContact($infos);
                } catch (\Exception $e) {
                    throw $e;
                    $message = "Désolé mais votre message n'a pas pu être transmis ! Merci de nous informer du problème par mail ou téléphone !";
                }
            }
            return $this->render("pages/contenu/_contact.html.twig", [
                    'message' => $message,
            ]);
        }

        return $this->render("pages/contenu/_contact.html.twig", [
                'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/_modules/articles/{category}/", name="_module_articles")
     */
    public function moduleArticles(Request $request, string $category) {
        $query = $this->dm
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('blog')
                ->field('status')->equals('publie')
                ->field('content.categorie')->equals($category);
        $articles = $query
                ->sort('content.date', -1)
                ->limit(6)
                ->getQuery()->execute();

        return $this->render("pages/_modules/articles.html.twig", [
                'title' => $request->query->get('title'),
                'category' => $category,
                'articles' => iterator_to_array($articles),
        ]);
    }

    /**
     * @Route("/blog/", name="blog_index")
     * @Route("/blog/{page}/", name="blog_index_page")
     * @Route("/blog/categorie/{category}/", name="blog_category")
     * @Route("/blog/categorie/{category}/{page}/", name="blog_category_page")
     */
    public function blogCategory(PageCacheManager $pageCacheManager, Request $request, string $category = null, string $page = null) {
        if (!empty($category))
            $request->query->set('categorie', $category);
        if (!empty($page))
            $request->query->set('page', $page);
        return $this->renderPage($pageCacheManager, $request, '/blog/');
    }

    // These methods are used for 'statique' pages. Add them to the 'methode' ChoiceType in PageType to let the user choose them
    # region methodes
    public function blogIndex(Request $request, Page $page) {
        $category = $request->query->get('categorie');
        $pageNum = $request->query->get('page') ?: 1;

        $pageSize = 9;
        $query = $this->dm
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('blog')
                ->field('status')->equals('publie');
        if (!empty($category))
            $query->field('content.categorie')->equals($category);
        $queryCount = clone $query; // TODO check if this is safe
        $articles = $query
                ->sort('content.date', -1)
                ->skip(($pageNum - 1) * $pageSize)
                ->limit($pageSize)
                ->getQuery()->execute();

        $infos = ["pages" => ceil($queryCount->count()->getQuery()->execute() / $pageSize)];

        return $this->render("pages/blog/index.html.twig", [
                'page' => $page,
                'categorie' => $category,
                'infos' => $infos,
                'current' => $pageNum ?? 1,
                'articles' => iterator_to_array($articles),
                'categories' => BlogCategoryType::$categories,
        ]);
    }

    public function faqIndex(Page $page) {
        $query = $this->dm
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('faq')
                ->field('status')->equals('publie');
        $faqs = $query
                ->sort('content.date', -1)
                ->getQuery()->execute();

        return $this->render('pages/faq/index.html.twig', [
                'page' => $page,
                'faqs' => $faqs,
        ]);
    }

    public function realisationsIndex(Page $page) {
        $query = $this->dm
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('realisation')
                ->field('status')->equals('publie');
        $realisations = $query
                ->sort('content.featured_home', -1)
                ->sort('content.featured', -1)
                ->sort('content.date', -1)
                ->getQuery()->execute();

        $zonesFinder = $this->dmGetRepo(Zone::class);

        return $this->render('pages/realisations/index.html.twig', [
                'page' => $page,
                'realisations' => $realisations,
                'types' => RealisationCategoryType::$categories,
                'departements' => $zonesFinder->findBy(['level' => ['$eq' => '1']], ['code' => 1]),
                'villes' => $zonesFinder->findBy(['level' => ['$eq' => '2']], ['nom' => 1]),
        ]);
    }

    public function temoignagesIndex(Page $page) {
        $query = $this->dm
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('temoignage')
                ->field('status')->equals('publie');
        $temoignages = $query
                ->sort('content.date', -1)
                ->getQuery()->execute();

        return $this->render('pages/temoignage/index.html.twig', [
                'page' => $page,
                'temoignages' => $temoignages,
        ]);
    }

    public function videosIndex(Page $page, VideoCacheManager $videoCacheManager) {
        return $this->render("pages/videos/index.html.twig", [
                'page' => $page,
                'videos' => $videoCacheManager->getVideos(),
        ]);
    }

    public function formulaire(Page $page) {
        $query = $this->dm
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('temoignage')
                ->field('status')->equals('publie');
        $temoignages = $query
                ->sort('content.date', -1)
                ->limit(3)
                ->getQuery()->execute();

        return $this->render("pages/formulaire/formulaire.html.twig", [
                'page' => $page,
                'temoignages' => $temoignages,
        ]);
    }

    /**
     * @Route("/subventions/formulaire/", name="_subventions_formulaire")
     */
    public function formulaireSubventions(Page $page) {
        $query = $this->dm
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('temoignage')
                ->field('status')->equals('publie');
        $temoignages = $query
                ->sort('content.date', -1)
                ->limit(3)
                ->getQuery()->execute();

        return $this->render("pages/formulaire/formulaireSubventions.html.twig", [
                'page' => $page,
                'temoignages' => $temoignages,
        ]);
    }

    #endregion

    private function sendEmailContact($mailer, $formData) {
        unset($formData['recaptcha']);
        unset($formData['accept_conditions']);
        // Send email
        $email = (new TemplatedEmail())
            ->from(new Address('noreply@harmonie.fr', 'Site Harmonie'))
            ->to(new Address('assistantecom@harmonie.fr'), new Address('fh@harmonie.fr'))
            ->subject('HARMONIE – Contact site internet')
            ->htmlTemplate('pages/contenu/_contact_email.html.twig')
            ->context([
            'infos' => $formData,
        ]);

        $mailer->send($email);
    }

}
