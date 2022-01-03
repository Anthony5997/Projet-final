<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/trip/search' => [[['_route' => 'trip_search', '_controller' => 'App\\Controller\\TripController::search'], null, ['GET' => 0], null, false, false, null]],
        '/forget-password' => [[['_route' => 'forget_password', '_controller' => 'App\\Controller\\AuthenticatorController::resetPassword'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\AuthenticatorController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\AuthenticatorController::logout'], null, null, null, false, false, null]],
        '/booking' => [[['_route' => 'booking_index', '_controller' => 'App\\Controller\\BookingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/message' => [[['_route' => 'message_index', '_controller' => 'App\\Controller\\MessageController::index'], null, ['GET' => 0], null, true, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/review' => [[['_route' => 'review_index', '_controller' => 'App\\Controller\\ReviewController::index'], null, ['GET' => 0], null, true, false, null]],
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
                .'|/trip/(?'
                    .'|treatment/([^/]++)(*:34)'
                    .'|([^/]++)/route_request(*:63)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:102)'
                    .'|wdt/([^/]++)(*:122)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:168)'
                            .'|router(*:182)'
                            .'|exception(?'
                                .'|(*:202)'
                                .'|\\.css(*:215)'
                            .')'
                        .')'
                        .'|(*:225)'
                    .')'
                .')'
                .'|/([^/]++)/reset\\-forget\\-password/([^/]++)(*:277)'
                .'|/booking/([^/]++)(?'
                    .'|/new(*:309)'
                    .'|(*:317)'
                .')'
                .'|/message/(?'
                    .'|([^/]++)/new(*:350)'
                    .'|discussion/([^/]++)(?'
                        .'|(*:380)'
                        .'|/details(*:396)'
                    .')'
                    .'|([^/]++)(?'
                        .'|/edit(*:421)'
                        .'|(*:429)'
                    .')'
                .')'
                .'|/review/([^/]++)(?'
                    .'|/(?'
                        .'|new(*:465)'
                        .'|edit(*:477)'
                    .')'
                    .'|(*:486)'
                .')'
                .'|/t(?'
                    .'|r(?'
                        .'|avel/preferences/([^/]++)(?'
                            .'|(*:532)'
                            .'|/edit(*:545)'
                            .'|(*:553)'
                        .')'
                        .'|ip/(?'
                            .'|([^/]++)(?'
                                .'|(*:579)'
                                .'|/(?'
                                    .'|finish(*:597)'
                                    .'|start(*:610)'
                                .')'
                            .')'
                            .'|details/([^/]++)(*:636)'
                            .'|([^/]++)/edit(*:657)'
                            .'|delete/([^/]++)(*:680)'
                            .'|test/([^/]++)(*:701)'
                            .'|search(?'
                                .'|Arrival/([^/]++)(*:734)'
                                .'|Departure/([^/]++)(*:760)'
                            .')'
                        .')'
                    .')'
                    .'|ype/of/vehicule/([^/]++)(?'
                        .'|(*:798)'
                        .'|/edit(*:811)'
                        .'|(*:819)'
                    .')'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:846)'
                    .'|profile/([^/]++)(*:870)'
                    .'|([^/]++)(?'
                        .'|/edit(*:894)'
                        .'|(*:902)'
                    .')'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:933)'
                    .'|/edit(*:946)'
                    .'|(*:954)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'trip_treatment', '_controller' => 'App\\Controller\\TripController::treatment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        63 => [[['_route' => 'routeRequest', '_controller' => 'App\\Controller\\TripController::routeRequest'], ['id'], ['GET' => 0], null, false, false, null]],
        102 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        122 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        168 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        182 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        202 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        215 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        225 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        277 => [[['_route' => 'reset_forget_password', '_controller' => 'App\\Controller\\AuthenticatorController::forgetPasswordReset'], ['id', 'token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        309 => [[['_route' => 'booking_new', '_controller' => 'App\\Controller\\BookingController::new'], ['id'], ['GET' => 0], null, false, false, null]],
        317 => [[['_route' => 'booking_delete', '_controller' => 'App\\Controller\\BookingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        350 => [[['_route' => 'message_new', '_controller' => 'App\\Controller\\MessageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        380 => [[['_route' => 'message_discussion', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        396 => [[['_route' => 'message_discussion_details', '_controller' => 'App\\Controller\\MessageController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        421 => [[['_route' => 'message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        429 => [[['_route' => 'message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        465 => [[['_route' => 'review_new', '_controller' => 'App\\Controller\\ReviewController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        477 => [[['_route' => 'review_edit', '_controller' => 'App\\Controller\\ReviewController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        486 => [
            [['_route' => 'review_show', '_controller' => 'App\\Controller\\ReviewController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        532 => [[['_route' => 'travel_preferences_show', '_controller' => 'App\\Controller\\TravelPreferencesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        545 => [[['_route' => 'travel_preferences_edit', '_controller' => 'App\\Controller\\TravelPreferencesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        553 => [[['_route' => 'travel_preferences_delete', '_controller' => 'App\\Controller\\TravelPreferencesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        579 => [[['_route' => 'trip_show', '_controller' => 'App\\Controller\\TripController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        597 => [[['_route' => 'trip_finish', '_controller' => 'App\\Controller\\TripController::finish'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        610 => [[['_route' => 'trip_start', '_controller' => 'App\\Controller\\TripController::start'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        636 => [[['_route' => 'trip_details', '_controller' => 'App\\Controller\\TripController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        657 => [[['_route' => 'trip_edit', '_controller' => 'App\\Controller\\TripController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        680 => [[['_route' => 'trip_delete', '_controller' => 'App\\Controller\\TripController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        701 => [[['_route' => 'test', '_controller' => 'App\\Controller\\TripController::test'], ['ville'], null, null, false, true, null]],
        734 => [[['_route' => 'searchArrival', '_controller' => 'App\\Controller\\TripController::searchArrival'], ['ville'], null, null, false, true, null]],
        760 => [[['_route' => 'searchDeparture', '_controller' => 'App\\Controller\\TripController::searchDeparture'], ['ville'], null, null, false, true, null]],
        798 => [[['_route' => 'type_of_vehicule_show', '_controller' => 'App\\Controller\\TypeOfVehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        811 => [[['_route' => 'type_of_vehicule_edit', '_controller' => 'App\\Controller\\TypeOfVehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        819 => [[['_route' => 'type_of_vehicule_delete', '_controller' => 'App\\Controller\\TypeOfVehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        846 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        870 => [[['_route' => 'user_view_profile', '_controller' => 'App\\Controller\\UserController::viewProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        894 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        902 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        933 => [[['_route' => 'vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        946 => [[['_route' => 'vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        954 => [
            [['_route' => 'vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
