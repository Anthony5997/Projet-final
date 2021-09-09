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
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AuthenticatorController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthenticatorController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/travel/preferences' => [[['_route' => 'travel_preferences_index', '_controller' => 'App\\Controller\\TravelPreferencesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/travel/preferences/new' => [[['_route' => 'travel_preferences_new', '_controller' => 'App\\Controller\\TravelPreferencesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule' => [[['_route' => 'vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/new' => [[['_route' => 'vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/travel/preferences/([^/]++)(?'
                    .'|(*:200)'
                    .'|/edit(*:213)'
                    .'|(*:221)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:247)'
                    .'|/edit(*:260)'
                    .'|(*:268)'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:298)'
                    .'|/edit(*:311)'
                    .'|(*:319)'
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
        200 => [[['_route' => 'travel_preferences_show', '_controller' => 'App\\Controller\\TravelPreferencesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'travel_preferences_edit', '_controller' => 'App\\Controller\\TravelPreferencesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'travel_preferences_delete', '_controller' => 'App\\Controller\\TravelPreferencesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        247 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        260 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        268 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        298 => [[['_route' => 'vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        311 => [[['_route' => 'vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        319 => [
            [['_route' => 'vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
