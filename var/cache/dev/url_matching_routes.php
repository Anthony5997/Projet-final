<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/trip/search' => [[['_route' => 'trip_search', '_controller' => 'App\\Controller\\TripController::search'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AuthenticatorController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\AuthenticatorController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/travel/preferences' => [[['_route' => 'travel_preferences_index', '_controller' => 'App\\Controller\\TravelPreferencesController::index'], null, ['GET' => 0], null, true, false, null]],
        '/travel/preferences/new' => [[['_route' => 'travel_preferences_new', '_controller' => 'App\\Controller\\TravelPreferencesController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/trip' => [[['_route' => 'trip_index', '_controller' => 'App\\Controller\\TripController::index'], null, ['GET' => 0], null, true, false, null]],
        '/trip/new' => [[['_route' => 'trip_new', '_controller' => 'App\\Controller\\TripController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/type/of/vehicule' => [[['_route' => 'type_of_vehicule_index', '_controller' => 'App\\Controller\\TypeOfVehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/type/of/vehicule/new' => [[['_route' => 'type_of_vehicule_new', '_controller' => 'App\\Controller\\TypeOfVehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule' => [[['_route' => 'vehicule_index', '_controller' => 'App\\Controller\\VehiculeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/vehicule/new' => [[['_route' => 'vehicule_new', '_controller' => 'App\\Controller\\VehiculeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/t(?'
                    .'|r(?'
                        .'|ip/(?'
                            .'|treatment/([^/]++)(*:40)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|route_request(*:75)'
                                    .'|edit(*:86)'
                                .')'
                                .'|(*:94)'
                            .')'
                            .'|delete/([^/]++)(*:117)'
                            .'|test/([^/]++)(*:138)'
                        .')'
                        .'|avel/preferences/([^/]++)(?'
                            .'|(*:175)'
                            .'|/edit(*:188)'
                            .'|(*:196)'
                        .')'
                    .')'
                    .'|ype/of/vehicule/([^/]++)(?'
                        .'|(*:233)'
                        .'|/edit(*:246)'
                        .'|(*:254)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:295)'
                    .'|wdt/([^/]++)(*:315)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:361)'
                            .'|router(*:375)'
                            .'|exception(?'
                                .'|(*:395)'
                                .'|\\.css(*:408)'
                            .')'
                        .')'
                        .'|(*:418)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:445)'
                    .'|profile/([^/]++)(*:469)'
                    .'|([^/]++)(?'
                        .'|/edit(*:493)'
                        .'|(*:501)'
                    .')'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:532)'
                    .'|/edit(*:545)'
                    .'|(*:553)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'trip_treatment', '_controller' => 'App\\Controller\\TripController::treatment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        75 => [[['_route' => 'routeRequest', '_controller' => 'App\\Controller\\TripController::routeRequest'], ['id'], ['GET' => 0], null, false, false, null]],
        86 => [[['_route' => 'trip_edit', '_controller' => 'App\\Controller\\TripController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        94 => [[['_route' => 'trip_show', '_controller' => 'App\\Controller\\TripController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        117 => [[['_route' => 'trip_delete', '_controller' => 'App\\Controller\\TripController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        138 => [[['_route' => 'test', '_controller' => 'App\\Controller\\TripController::test'], ['ville'], null, null, false, true, null]],
        175 => [[['_route' => 'travel_preferences_show', '_controller' => 'App\\Controller\\TravelPreferencesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        188 => [[['_route' => 'travel_preferences_edit', '_controller' => 'App\\Controller\\TravelPreferencesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        196 => [[['_route' => 'travel_preferences_delete', '_controller' => 'App\\Controller\\TravelPreferencesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        233 => [[['_route' => 'type_of_vehicule_show', '_controller' => 'App\\Controller\\TypeOfVehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'type_of_vehicule_edit', '_controller' => 'App\\Controller\\TypeOfVehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        254 => [[['_route' => 'type_of_vehicule_delete', '_controller' => 'App\\Controller\\TypeOfVehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        295 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        315 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        361 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        375 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        395 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        408 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        418 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        445 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        469 => [[['_route' => 'user_view_profile', '_controller' => 'App\\Controller\\UserController::viewProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        493 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        501 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        532 => [[['_route' => 'vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        545 => [[['_route' => 'vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        553 => [
            [['_route' => 'vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
