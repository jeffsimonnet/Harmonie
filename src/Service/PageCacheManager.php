<?php

namespace App\Service;

use App\Document\Page;
use App\Document\Zone;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Twig\Environment;

class PageCacheManager {

    private $cache;
    private $twig;
    private $documentManager;
    private $shortcodeRenderer;
    private $contentParser;
    private $container;
    private $videoCacheManager;

    public function __construct(ContainerInterface $container, DocumentManager $documentManager, ShortcodeRenderer $shortcodeRenderer, ContentParser $contentParser, Environment $twig, CacheInterface $cache, VideoCacheManager $videoCacheManager) {
        $this->documentManager = $documentManager;
        $this->shortcodeRenderer = $shortcodeRenderer;
        $this->container = $container;
        $this->contentParser = $contentParser;
        $this->twig = $twig;
        $this->cache = $cache;
        $this->videoCacheManager = $videoCacheManager;
    }

    public function getPage($slug, $update = null) {
        // TODO reactivate cache with a solution for the blog pagination
        // return $this->cache->get(
        //     $this->getKey($slug),
        //     function () use ($slug) {
        $page = $this->documentManager
            ->getRepository(Page::class)
            ->findOneBy(['slug' => $slug]);
        if (empty($page) || $page->getStatus() != 'publie')
            return null;
        return $this->renderPage($page);
        //     },
        //     $update
        // );
    }

    public function getMapRealisations($page) {
        // TODO reactivate cache with a solution for the blog pagination
        // return $this->cache->get(
        //     '_module_map',
        //     function () use ($slug) {
        return $this->generateMapRealisation($page);
        //     },
        //     $update
        // );
    }

    public function resetPage($slug) {
        $this->cache->delete($this->getKey($slug));
    }

    private function getKey($slug) {
        return 'page_' . str_replace('/', '.', $slug); // Slash is not supported as a cache key
    }

    public function renderPage($page) {
        switch ($page->getType()) {
            case 'home':
                return $this->renderHome($page);
            case 'contenu':
                return $this->renderContenu($page);
            case 'statique':
                return $this->renderStatique($page);
            case 'template':
                return $this->renderTemplate($page);
            case 'faq':
                return $this->renderFaq($page);
            case 'blog':
                return $this->renderBlogPage($page);
            case 'realisation':
                return $this->renderRealisation($page);
            case 'redirect':
                return $this->renderRedirect($page);
        }
        throw new NotFoundHttpException("Type de page inconnu ! " . $page->getType());
    }

    public function renderHome($page) {
        $content = $page->getContent();

        $query = $this->documentManager
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('temoignage')
                ->field('status')->equals('publie');
        $temoignages = $query
                ->sort('content.date', -1)
                ->limit(3)
                ->getQuery()->execute();

        return new Response($this->twig->render("pages/home/home.html.twig", [
                'page' => $content,
                'videos' => $this->videoCacheManager->getVideos(),
                'temoignages' => $temoignages,
        ]));
    }

    public function renderRedirect($page) {
        $content = $page->getContent();
        return new RedirectResponse($content['redirect'], 301);
    }

    public function renderRealisation($page) {
        $content = $page->getContent();
        return new Response($this->twig->render('pages/realisations/detail.html.twig', [
                'page' => $page,
                'titre' => $page->getTitle(),
                'categorie' => $content['categorie'],
                'meta' => $content['meta'],
                'content' => $content,
                'zone' => $page->getZone(),
                'body' => $this->shortcodeRenderer->render(
                    $content['body']
                ),
        ]));
    }

    public function renderBlogPage($page) {
        $query = $this->documentManager
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('blog')
                ->field('status')->equals('publie');
        $articles = $query
                ->limit(3)
                ->getQuery()->execute();

        $content = $page->getContent();
        return new Response($this->twig->render('pages/blog/article.html.twig', [
                'page' => $page,
                'slug' => $page->getSlug(),
                'titre' => $page->getTitle(),
                'meta' => $content['meta'],
                'image' => !empty($content['image']) ? $content['image'] : 'build/images/illus-blog.jpg', // TODO change default image according type
                'categorie' => $content['categorie'],
                'date' => !empty($content['date']) ? ucwords(datefmt_format(\IntlDateFormatter::create('fr_FR', \IntlDateFormatter::LONG, \IntlDateFormatter::NONE), strtotime($content['date']))) : "",
                'temps' => ceil(sizeof(explode(' ', $content['body'])) / 300), // on compte 300 mots par minute
                'body' => $this->shortcodeRenderer->render(
                    $content['body']
                ),
                'articles' => $articles,
        ]));
    }

    public function renderStatique($page) {
        $content = $page->getContent();
        return $this->forward('App\Controller\PagesController::' . $content['methode'], [
                'page' => $page,
        ]);
    }

    public function renderTemplate($page) {
        $content = $page->getContent();
        if (!empty($content['portlets'])) {
            foreach ($content['portlets'] as $k => $v) {
                $type = explode('_', $k)[0];
                switch ($type) {
                    case 'produits':
                    case 'features':
                        $content['portlets'][$k]['texte'] = $this->contentParser->render($content['portlets'][$k]['texte']);
                        break;
                    case 'comparatif':
                        $content['portlets'][$k]['texte_avantages'] = $this->contentParser->render($content['portlets'][$k]['texte_avantages']);
                        $content['portlets'][$k]['texte_contraintes'] = $this->contentParser->render($content['portlets'][$k]['texte_contraintes']);
                        break;
                }
            }
        }
        return new Response($this->twig->render($content['template'], [
                'page' => $page,
                'titre' => $page->getTitle(),
                'meta' => $content['meta'],
                'portlets' => @$content['portlets'],
        ]));
    }

    public function renderFaq($page) {
        $query = $this->documentManager
                ->createQueryBuilder(Page::class)
                ->field('type')->equals('faq')
                ->field('status')->equals('publie');
        $faqs = $query
                ->limit(3)
                ->getQuery()->execute();

        $content = $page->getContent();
        return new Response($this->twig->render('pages/faq/page.html.twig', [
                'page' => $page,
                'titre' => $page->getTitle(),
                'meta' => $content['meta'],
                'faq' => $this->shortcodeRenderer->render(
                    $content['faq'],
                    true
                ),
                'faqs' => $faqs,
        ]));
    }

    public function renderContenu($page) {
        $content = $page->getContent();

        $hero = $content['hero']['contenu'];
        if (strpos($hero, "mapContact") !== false) {
            $domDoc = new \DOMDocument();
            $domDoc->loadHTML($hero, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $iframe = $domDoc->getElementById('mapContact');
            if ($iframe) {
                $content['hero']['map'] = '<iframe src="' . $iframe->getAttribute("src") . '"></iframe>';
                $iframe->parentNode->removeChild($iframe);
                $hero = $domDoc->saveHTML();
                $content['hero']['contenu'] = $hero;
            }
        }

        return new Response($this->twig->render('pages/contenu/page.html.twig', [
                'page' => $page,
                'titre' => $page->getTitle(),
                'meta' => $content['meta'],
                'hero' => $content['hero'],
                'body' => $this->shortcodeRenderer->render(
                    $content['body']
                ),
        ]));
    }

    public function forward($controller, array $path = [], array $query = []) {
        $request = $this->container->get('request_stack')->getCurrentRequest();
        $path['_controller'] = $controller;
        $subRequest = $request->duplicate(array_merge($request->query->all(), $query), null, array_merge($request->attributes->all(), $path));

        return $this->container->get('http_kernel')->handle($subRequest, HttpKernelInterface::SUB_REQUEST);
    }

    private function generateMapRealisation($page) {
        $zonesFinder = $this->documentManager->getRepository(Zone::class);
        $builder = $this->documentManager->createAggregationBuilder(Page::class);
        if ($page == 'home') {
            $builder
                ->match()
                ->field('type')->equals('realisation')
                ->field('status')->equals('publie');
        }
        else {
            $builder
                ->match()
                ->field('type')->equals('realisation')
                ->field('status')->equals('publie')
                ->field('content.categorie')->equals($page);
        }
        $builder
            ->addFields() // Needed because zone is a DBRef
            ->field('fk_zone')
            ->expression(['$objectToArray' => '$$ROOT.zone'])
            ->lookup(Zone::class)
            ->localField('fk_zone.1.v')
            ->foreignField('_id')
            ->alias('zone_join')
            ->unwind('$zone_join')
            ->addFields() // Needed because zone is a DBRef
            ->field('fk_zone_parent')
            ->expression(['$objectToArray' => '$$ROOT.zone_join.parent'])
            ->lookup(Zone::class)
            ->localField('fk_zone_parent.1.v')
            ->foreignField('_id')
            ->alias('dept')
            ->unwind('$dept');
        if ($page == 'home') {
            $builder->sort([
                'content.featured_home' => -1,
                'content.featured' => -1,
            ]);
        }
        else {
            $builder->sort('content.featured', -1);
        }
        $builder
            ->group()
            ->field('id')->expression('$dept.code')
            ->field('selected')->first('$_id')
            ->field('count')->sum(1);
        /* Source for testing
          [
          {
          '$match': {
          'type': 'realisation',
          'status': 'publie'
          }
          }, {
          '$addFields': {
          'fk_zone': {
          '$objectToArray': '$$ROOT.zone'
          }
          }
          }, {
          '$lookup': {
          'from': 'Zone',
          'localField': 'fk_zone.1.v',
          'foreignField': '_id',
          'as': 'zone_join'
          }
          }, {
          '$unwind': '$zone_join'
          }, {
          '$addFields': {
          'fk_zone_parent': {
          '$objectToArray': '$$ROOT.zone_join.parent'
          }
          }
          }, {
          '$lookup': {
          'from': 'Zone',
          'localField': 'fk_zone_parent.1.v',
          'foreignField': '_id',
          'as': 'dept'
          }
          }, {
          '$unwind': '$dept'
          }, {
          '$addFields': {
          'score': {
          '$cond': [
          {
          '$ifNull': [
          '$featured', false
          ]
          }, 1, 0
          ]
          }
          }
          }, {
          '$sort': {
          'score': -1
          }
          }, {
          '$group': {
          '_id': '$dept.code',
          'selected': {
          '$first': '$$ROOT'
          },
          'count': {
          '$sum': 1
          }
          }
          }
          ]
         */
        $realisations = iterator_to_array($builder->getAggregation());
        $realisationFinder = $this->documentManager->getRepository(Page::class);
        foreach ($realisations as &$realisation) {
            $realisation['selected'] = $realisationFinder->find($realisation['selected']); // TODO is it possible to get the full object from aggregation ?
        }

        return new Response($this->twig->render("pages/_modules/map.html.twig", [
                'departements' => $zonesFinder->findBy(['level' => ['$eq' => '1']], ['code' => 1]),
                'villes' => $zonesFinder->findBy(['level' => ['$eq' => '2']], ['nom' => 1]),
                'realisations' => $realisations,
        ]));
    }

}
