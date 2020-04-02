<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\HomeController::login'], [], [['text', '/']], [], []],
    'register' => [[], ['_controller' => 'App\\Controller\\HomeController::register'], [], [['text', '/registerTest']], [], []],
    'invitations_index' => [[], ['_controller' => 'App\\Controller\\InvitationsController::index'], [], [['text', '/amis/']], [], []],
    'invitations_new' => [[], ['_controller' => 'App\\Controller\\InvitationsController::new'], [], [['text', '/amis/new']], [], []],
    'invitations_show' => [['id'], ['_controller' => 'App\\Controller\\InvitationsController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/amis']], [], []],
    'invitations_edit' => [['id'], ['_controller' => 'App\\Controller\\InvitationsController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/amis']], [], []],
    'invitations_delete' => [['id'], ['_controller' => 'App\\Controller\\InvitationsController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/amis']], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::register'], [], [['text', '/register']], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
    'share' => [[], ['_controller' => 'App\\Controller\\ShareController::index'], [], [['text', '/share']], [], []],
    'tasks_index' => [[], ['_controller' => 'App\\Controller\\TasksController::index'], [], [['text', '/dashboard/']], [], []],
    'tasks_new' => [[], ['_controller' => 'App\\Controller\\TasksController::new'], [], [['text', '/dashboard/new']], [], []],
    'tasks_edit' => [['id'], ['_controller' => 'App\\Controller\\TasksController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/dashboard']], [], []],
    'tasks_delete' => [['id'], ['_controller' => 'App\\Controller\\TasksController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/dashboard']], [], []],
];
