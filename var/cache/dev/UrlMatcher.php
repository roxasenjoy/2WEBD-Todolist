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
        '/adds' => [[['_route' => 'add', '_controller' => 'App\\Controller\\AddController::index'], null, null, null, false, false, null]],
        '/friends' => [[['_route' => 'friends', '_controller' => 'App\\Controller\\FriendsController::friends'], null, null, null, false, false, null]],
        '/friends/add' => [[['_route' => 'add_friends', '_controller' => 'App\\Controller\\FriendsController::add_friends'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\HomeController::login'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\HomeController::register'], null, null, null, false, false, null]],
        '/share' => [[['_route' => 'share', '_controller' => 'App\\Controller\\ShareController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'tasks_index', '_controller' => 'App\\Controller\\TasksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dashboard/new' => [[['_route' => 'tasks_new', '_controller' => 'App\\Controller\\TasksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/dashboard/([^/]++)(?'
                    .'|/edit(*:196)'
                    .'|(*:204)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'tasks_edit', '_controller' => 'App\\Controller\\TasksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        204 => [
            [['_route' => 'tasks_delete', '_controller' => 'App\\Controller\\TasksController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
