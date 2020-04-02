<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'login', '_controller' => 'App\\Controller\\HomeController::login'], null, null, null, false, false, null]],
        '/registerTest' => [[['_route' => 'register', '_controller' => 'App\\Controller\\HomeController::register'], null, null, null, false, false, null]],
        '/amis' => [[['_route' => 'invitations_index', '_controller' => 'App\\Controller\\InvitationsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/amis/new' => [[['_route' => 'invitations_new', '_controller' => 'App\\Controller\\InvitationsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/share' => [[['_route' => 'share', '_controller' => 'App\\Controller\\ShareController::index'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'tasks_index', '_controller' => 'App\\Controller\\TasksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/dashboard/new' => [[['_route' => 'tasks_new', '_controller' => 'App\\Controller\\TasksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/amis/([^/]++)(?'
                    .'|(*:24)'
                    .'|/edit(*:36)'
                    .'|(*:43)'
                .')'
                .'|/dashboard/([^/]++)(?'
                    .'|/edit(*:78)'
                    .'|(*:85)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'invitations_show', '_controller' => 'App\\Controller\\InvitationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        36 => [[['_route' => 'invitations_edit', '_controller' => 'App\\Controller\\InvitationsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        43 => [[['_route' => 'invitations_delete', '_controller' => 'App\\Controller\\InvitationsController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        78 => [[['_route' => 'tasks_edit', '_controller' => 'App\\Controller\\TasksController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        85 => [
            [['_route' => 'tasks_delete', '_controller' => 'App\\Controller\\TasksController::delete'], ['id'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
