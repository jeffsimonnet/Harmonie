<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/blog' => [[['_route' => 'admin_blog_index', '_controller' => 'App\\Controller\\Document\\BlogController::index'], null, null, null, true, false, null]],
        '/admin/blog/new' => [[['_route' => 'admin_blog_new', '_controller' => 'App\\Controller\\Document\\BlogController::new'], null, null, null, false, false, null]],
        '/admin/faq' => [[['_route' => 'admin_faq_index', '_controller' => 'App\\Controller\\Document\\FaqController::index'], null, null, null, true, false, null]],
        '/admin/faq/new' => [[['_route' => 'admin_faq_new', '_controller' => 'App\\Controller\\Document\\FaqController::new'], null, null, null, false, false, null]],
        '/admin/page' => [[['_route' => 'admin_page_index', '_controller' => 'App\\Controller\\Document\\PageController::index'], null, null, null, true, false, null]],
        '/admin/page/new' => [[['_route' => 'admin_page_new', '_controller' => 'App\\Controller\\Document\\PageController::newChoixParent'], null, null, null, false, false, null]],
        '/admin/realisation' => [[['_route' => 'admin_realisation_index', '_controller' => 'App\\Controller\\Document\\RealisationController::indexRealisations'], null, null, null, true, false, null]],
        '/admin/realisation/new' => [[['_route' => 'admin_realisation_new', '_controller' => 'App\\Controller\\Document\\RealisationController::new'], null, null, null, false, false, null]],
        '/admin/redirect' => [[['_route' => 'admin_redirect_index', '_controller' => 'App\\Controller\\Document\\RedirectController::index'], null, null, null, true, false, null]],
        '/admin/redirect/new' => [[['_route' => 'admin_redirect_new', '_controller' => 'App\\Controller\\Document\\RedirectController::newRedirect'], null, null, null, false, false, null]],
        '/admin/temoignage' => [[['_route' => 'admin_temoignage_index', '_controller' => 'App\\Controller\\Document\\TemoignageController::index'], null, null, null, true, false, null]],
        '/admin/temoignage/new' => [[['_route' => 'admin_temoignage_new', '_controller' => 'App\\Controller\\Document\\TemoignageController::new'], null, null, null, false, false, null]],
        '/admin/zone' => [[['_route' => 'admin_zone_index', '_controller' => 'App\\Controller\\Document\\ZoneController::index'], null, null, null, true, false, null]],
        '/admin/zone/new' => [[['_route' => 'admin_zone_new', '_controller' => 'App\\Controller\\Document\\ZoneController::newZone'], null, null, null, false, false, null]],
        '/_ajax/zone-select' => [[['_route' => '_zone_ajax_list', 'id' => 'id', '_controller' => 'App\\Controller\\Document\\ZoneController::selectZone'], null, ['GET' => 0], null, false, false, null]],
        '/_ajax/zone-select/code' => [[['_route' => '_zone_ajax_list_code', 'id' => 'code', '_controller' => 'App\\Controller\\Document\\ZoneController::selectZone'], null, ['GET' => 0], null, false, false, null]],
        '/admin/audit' => [[['_route' => 'admin_audit', '_controller' => 'App\\Controller\\ErrorController::audit'], null, null, null, true, false, null]],
        '/_ajax/formulaire' => [[['_route' => 'funnel_ajax_submit', '_controller' => 'App\\Controller\\FunnelController::submit'], null, ['POST' => 0], null, true, false, null]],
        '/_ajax/formulaire/subventions' => [[['_route' => 'funnel_subventions_ajax_submit', '_controller' => 'App\\Controller\\FunnelController::submitSubventions'], null, ['POST' => 0], null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PagesController::home'], null, null, null, false, false, null]],
        '/_modules/contact' => [[['_route' => '_module_contact', '_controller' => 'App\\Controller\\PagesController::moduleContact'], null, null, null, true, false, null]],
        '/blog' => [[['_route' => 'blog_index', '_controller' => 'App\\Controller\\PagesController::blogCategory'], null, null, null, true, false, null]],
        '/subventions/formulaire' => [[['_route' => '_subventions_formulaire', '_controller' => 'App\\Controller\\PagesController::formulaireSubventions'], null, null, null, true, false, null]],
        '/admin/accueil' => [[['_route' => 'admin_index', '_controller' => 'App\\Controller\\UserAdminController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_login', '_controller' => 'App\\Controller\\UserAdminController::login'], null, null, null, false, false, null]],
        '/admin/logout' => [[['_route' => 'admin_logout', '_controller' => 'App\\Controller\\UserAdminController::logout'], null, null, null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|blog/([^/]++)(?'
                        .'|/edit(*:38)'
                        .'|(*:45)'
                    .')'
                    .'|faq/([^/]++)(?'
                        .'|/edit(*:73)'
                        .'|(*:80)'
                    .')'
                    .'|page/(?'
                        .'|action/([^/]++)(*:111)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|new(*:137)'
                                .'|edit(?'
                                    .'|(*:152)'
                                .')'
                                .'|preview(*:168)'
                            .')'
                            .'|(*:177)'
                        .')'
                    .')'
                    .'|re(?'
                        .'|alisation/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:221)'
                                .'|preview(*:236)'
                            .')'
                            .'|(*:245)'
                        .')'
                        .'|direct/([^/]++)(?'
                            .'|/edit(*:277)'
                            .'|(*:285)'
                        .')'
                    .')'
                    .'|temoignage/([^/]++)(?'
                        .'|/edit(*:322)'
                        .'|(*:330)'
                    .')'
                    .'|zone/([^/]++)(?'
                        .'|/edit(*:360)'
                        .'|(*:368)'
                    .')'
                .')'
                .'|/_modules/(?'
                    .'|map/([^/]++)(*:403)'
                    .'|articles/([^/]++)(*:428)'
                .')'
                .'|/blog/(?'
                    .'|([^/]++)(*:454)'
                    .'|categorie/([^/]++)(?'
                        .'|(*:483)'
                        .'|/([^/]++)(*:500)'
                    .')'
                .')'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:551)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:594)'
                .')'
                .'|/(.+)(*:608)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => 'admin_blog_edit', '_controller' => 'App\\Controller\\Document\\BlogController::edit'], ['page'], null, null, false, false, null]],
        45 => [[['_route' => 'admin_blog_delete', '_controller' => 'App\\Controller\\Document\\BlogController::delete'], ['page'], ['DELETE' => 0], null, false, true, null]],
        73 => [[['_route' => 'admin_faq_edit', '_controller' => 'App\\Controller\\Document\\FaqController::edit'], ['page'], null, null, false, false, null]],
        80 => [[['_route' => 'admin_faq_delete', '_controller' => 'App\\Controller\\Document\\FaqController::delete'], ['page'], ['DELETE' => 0], null, false, true, null]],
        111 => [[['_route' => '_admin_page_ajax_action', '_controller' => 'App\\Controller\\Document\\PageController::actions'], ['action'], ['POST' => 0], null, false, true, null]],
        137 => [[['_route' => 'admin_page_new_type', '_controller' => 'App\\Controller\\Document\\PageController::newPageType'], ['type'], null, null, false, false, null]],
        152 => [
            [['_route' => 'admin_page_edit', '_controller' => 'App\\Controller\\Document\\PageController::edit'], ['page'], null, null, false, false, null],
            [['_route' => 'admin_home_edit', '_controller' => 'App\\Controller\\Document\\PageController::edit'], ['page'], null, null, false, false, null],
            [['_route' => 'admin_contenu_edit', '_controller' => 'App\\Controller\\Document\\PageController::edit'], ['page'], null, null, false, false, null],
            [['_route' => 'admin_template_edit', '_controller' => 'App\\Controller\\Document\\PageController::edit'], ['page'], null, null, false, false, null],
        ],
        168 => [[['_route' => 'admin_page_preview', '_controller' => 'App\\Controller\\Document\\PageController::preview'], ['page'], null, null, false, false, null]],
        177 => [[['_route' => 'admin_page_delete', '_controller' => 'App\\Controller\\Document\\PageController::delete'], ['page'], ['DELETE' => 0], null, false, true, null]],
        221 => [[['_route' => 'admin_realisation_edit', '_controller' => 'App\\Controller\\Document\\RealisationController::edit'], ['page'], null, null, false, false, null]],
        236 => [[['_route' => 'admin_realisation_preview', '_controller' => 'App\\Controller\\Document\\RealisationController::preview'], ['page'], null, null, false, false, null]],
        245 => [[['_route' => 'admin_realisation_delete', '_controller' => 'App\\Controller\\Document\\RealisationController::delete'], ['page'], ['DELETE' => 0], null, false, true, null]],
        277 => [[['_route' => 'admin_redirect_edit', '_controller' => 'App\\Controller\\Document\\RedirectController::edit'], ['page'], null, null, false, false, null]],
        285 => [[['_route' => 'admin_redirect_delete', '_controller' => 'App\\Controller\\Document\\RedirectController::delete'], ['page'], ['DELETE' => 0], null, false, true, null]],
        322 => [[['_route' => 'admin_temoignage_edit', '_controller' => 'App\\Controller\\Document\\TemoignageController::edit'], ['page'], null, null, false, false, null]],
        330 => [[['_route' => 'admin_temoignage_delete', '_controller' => 'App\\Controller\\Document\\TemoignageController::delete'], ['page'], ['DELETE' => 0], null, false, true, null]],
        360 => [[['_route' => 'admin_zone_edit', '_controller' => 'App\\Controller\\Document\\ZoneController::edit'], ['zone'], null, null, false, false, null]],
        368 => [[['_route' => 'admin_zone_delete', '_controller' => 'App\\Controller\\Document\\ZoneController::delete'], ['zone'], ['DELETE' => 0], null, false, true, null]],
        403 => [[['_route' => '_module_map', '_controller' => 'App\\Controller\\PagesController::moduleMap'], ['page'], null, null, true, true, null]],
        428 => [[['_route' => '_module_articles', '_controller' => 'App\\Controller\\PagesController::moduleArticles'], ['category'], null, null, true, true, null]],
        454 => [[['_route' => 'blog_index_page', 'page' => null, '_controller' => 'App\\Controller\\PagesController::blogCategory'], ['page'], null, null, true, true, null]],
        483 => [[['_route' => 'blog_category', 'category' => null, '_controller' => 'App\\Controller\\PagesController::blogCategory'], ['category'], null, null, true, true, null]],
        500 => [[['_route' => 'blog_category_page', 'category' => null, 'page' => null, '_controller' => 'App\\Controller\\PagesController::blogCategory'], ['category', 'page'], null, null, true, true, null]],
        551 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        594 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        608 => [
            [['_route' => 'content_page', '_controller' => 'App\\Controller\\PagesController::page'], ['slug'], null, null, true, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
