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
                                .'|/route_request(*:72)'
                                .'|(*:79)'
                            .')'
                            .'|details/([^/]++)(*:103)'
                            .'|([^/]++)/edit(*:124)'
                            .'|delete/([^/]++)(*:147)'
                            .'|test/([^/]++)(*:168)'
                        .')'
                        .'|avel/preferences/([^/]++)(?'
                            .'|(*:205)'
                            .'|/edit(*:218)'
                            .'|(*:226)'
                        .')'
                    .')'
                    .'|ype/of/vehicule/([^/]++)(?'
                        .'|(*:263)'
                        .'|/edit(*:276)'
                        .'|(*:284)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:325)'
                    .'|wdt/([^/]++)(*:345)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:391)'
                            .'|router(*:405)'
                            .'|exception(?'
                                .'|(*:425)'
                                .'|\\.css(*:438)'
                            .')'
                        .')'
                        .'|(*:448)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:475)'
                    .'|profile/([^/]++)(*:499)'
                    .'|([^/]++)(?'
                        .'|/edit(*:523)'
                        .'|(*:531)'
                    .')'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:562)'
                    .'|/edit(*:575)'
                    .'|(*:583)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'trip_treatment', '_controller' => 'App\\Controller\\TripController::treatment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        72 => [[['_route' => 'routeRequest', '_controller' => 'App\\Controller\\TripController::routeRequest'], ['id'], ['GET' => 0], null, false, false, null]],
        79 => [[['_route' => 'trip_show', '_controller' => 'App\\Controller\\TripController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        103 => [[['_route' => 'trip_details', '_controller' => 'App\\Controller\\TripController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        124 => [[['_route' => 'trip_edit', '_controller' => 'App\\Controller\\TripController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        147 => [[['_route' => 'trip_delete', '_controller' => 'App\\Controller\\TripController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        168 => [[['_route' => 'test', '_controller' => 'App\\Controller\\TripController::test'], ['ville'], null, null, false, true, null]],
        205 => [[['_route' => 'travel_preferences_show', '_controller' => 'App\\Controller\\TravelPreferencesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        218 => [[['_route' => 'travel_preferences_edit', '_controller' => 'App\\Controller\\TravelPreferencesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        226 => [[['_route' => 'travel_preferences_delete', '_controller' => 'App\\Controller\\TravelPreferencesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        263 => [[['_route' => 'type_of_vehicule_show', '_controller' => 'App\\Controller\\TypeOfVehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        276 => [[['_route' => 'type_of_vehicule_edit', '_controller' => 'App\\Controller\\TypeOfVehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        284 => [[['_route' => 'type_of_vehicule_delete', '_controller' => 'App\\Controller\\TypeOfVehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        325 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        345 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        391 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        405 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        425 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        438 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        448 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        475 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        499 => [[['_route' => 'user_view_profile', '_controller' => 'App\\Controller\\UserController::viewProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        523 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        531 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        562 => [[['_route' => 'vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        575 => [[['_route' => 'vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        583 => [
            [['_route' => 'vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
