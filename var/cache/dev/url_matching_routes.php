<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/etudiant' => [[['_route' => 'app_etudiant_index', '_controller' => 'App\\Controller\\EtudiantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/etudiant/filtre' => [[['_route' => 'app_etudiant_filtre', '_controller' => 'App\\Controller\\EtudiantController::indexFiltre'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/etudiant/new' => [[['_route' => 'app_etudiant_new', '_controller' => 'App\\Controller\\EtudiantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/helloWord' => [[['_route' => 'app_public_hello_word', '_controller' => 'App\\Controller\\HelloWordController::index'], null, null, null, false, false, null]],
        '/BigNoob' => [[['_route' => 'app_public_BigNoob', '_controller' => 'App\\Controller\\HelloWordController::nom'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/etudiant/([^/]++)(?'
                    .'|(*:190)'
                    .'|/edit(*:203)'
                    .'|(*:211)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        190 => [[['_route' => 'app_etudiant_show', '_controller' => 'App\\Controller\\EtudiantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        203 => [[['_route' => 'app_etudiant_edit', '_controller' => 'App\\Controller\\EtudiantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        211 => [
            [['_route' => 'app_etudiant_delete', '_controller' => 'App\\Controller\\EtudiantController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
