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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/calendrier' => [[['_route' => 'circuit_index', '_controller' => 'App\\Controller\\CircuitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/circuit' => [[['_route' => 'circuit_new', '_controller' => 'App\\Controller\\CircuitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/classement' => [[['_route' => 'classement', '_controller' => 'App\\Controller\\ClassementController::index'], null, null, null, false, false, null]],
        '/country' => [[['_route' => 'country_index', '_controller' => 'App\\Controller\\CountryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/country' => [[['_route' => 'country_new', '_controller' => 'App\\Controller\\CountryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/pilote' => [[['_route' => 'pilote_new', '_controller' => 'App\\Controller\\PiloteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/team' => [[['_route' => 'team_new', '_controller' => 'App\\Controller\\TeamController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'before', '_locale' => 'fr', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_locale' => 'fr', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null],
        ],
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
                .'|/circuit/([^/]++)(?'
                    .'|(*:189)'
                .')'
                .'|/admin/c(?'
                    .'|ircuit/([^/]++)(*:224)'
                    .'|ountry/(?'
                        .'|show/([^/]++)(*:255)'
                        .'|([^/]++)(*:271)'
                    .')'
                .')'
                .'|/([^/]++)(*:290)'
                .'|/pilote(?'
                    .'|(*:308)'
                    .'|/([^/]++)(?'
                        .'|(*:328)'
                        .'|(*:336)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|pilote/([^/]++)(*:371)'
                    .'|team/([^/]++)(*:392)'
                .')'
                .'|/team(?'
                    .'|(*:409)'
                    .'|/([^/]++)(?'
                        .'|(*:429)'
                        .'|(*:437)'
                    .')'
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
        189 => [
            [['_route' => 'circuit_show', '_controller' => 'App\\Controller\\CircuitController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'circuit_delete', '_controller' => 'App\\Controller\\CircuitController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        224 => [[['_route' => 'circuit_edit', '_controller' => 'App\\Controller\\CircuitController::edit'], ['name'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        255 => [[['_route' => 'country_show', '_controller' => 'App\\Controller\\CountryController::show'], ['name'], ['GET' => 0], null, false, true, null]],
        271 => [[['_route' => 'country_edit', '_controller' => 'App\\Controller\\CountryController::edit'], ['name'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        290 => [[['_route' => 'country_delete', '_controller' => 'App\\Controller\\CountryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        308 => [[['_route' => 'pilote_index', '_controller' => 'App\\Controller\\PiloteController::index'], [], ['GET' => 0], null, false, false, null]],
        328 => [[['_route' => 'pilote_show', '_controller' => 'App\\Controller\\PiloteController::show'], ['surname'], ['GET' => 0], null, false, true, null]],
        336 => [[['_route' => 'pilote_delete', '_controller' => 'App\\Controller\\PiloteController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        371 => [[['_route' => 'pilote_edit', '_controller' => 'App\\Controller\\PiloteController::edit'], ['surname'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        392 => [[['_route' => 'team_edit', '_controller' => 'App\\Controller\\TeamController::edit'], ['name'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        409 => [[['_route' => 'team_index', '_controller' => 'App\\Controller\\TeamController::index'], [], ['GET' => 0], null, false, false, null]],
        429 => [[['_route' => 'team_show', '_controller' => 'App\\Controller\\TeamController::show'], ['name'], ['GET' => 0], null, false, true, null]],
        437 => [
            [['_route' => 'team_delete', '_controller' => 'App\\Controller\\TeamController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
