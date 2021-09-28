<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/trip/search' => [[['_route' => 'trip_search', '_controller' => 'App\\Controller\\TripController::search'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/t(?'
                    .'|r(?'
                        .'|ip/(?'
                            .'|treatment/([^/]++)(*:40)'
                            .'|([^/]++)(?'
                                .'|/(?'
                                    .'|route_request(*:75)'
                                    .'|finish(*:88)'
                                    .'|start(*:100)'
                                .')'
                                .'|(*:109)'
                            .')'
                            .'|details/([^/]++)(*:134)'
                            .'|([^/]++)/edit(*:155)'
                            .'|delete/([^/]++)(*:178)'
                            .'|test/([^/]++)(*:199)'
                        .')'
                        .'|avel/preferences/([^/]++)(?'
                            .'|(*:236)'
                            .'|/edit(*:249)'
                            .'|(*:257)'
                        .')'
                    .')'
                    .'|ype/of/vehicule/([^/]++)(?'
                        .'|(*:294)'
                        .'|/edit(*:307)'
                        .'|(*:315)'
                    .')'
                .')'
                .'|/booking/([^/]++)(?'
                    .'|/new(*:349)'
                    .'|(*:357)'
                .')'
                .'|/message/(?'
                    .'|([^/]++)/new(*:390)'
                    .'|discussion/([^/]++)(?'
                        .'|(*:420)'
                        .'|/details(*:436)'
                    .')'
                    .'|([^/]++)(?'
                        .'|/edit(*:461)'
                        .'|(*:469)'
                    .')'
                .')'
                .'|/review/([^/]++)(?'
                    .'|/(?'
                        .'|new(*:505)'
                        .'|edit(*:517)'
                    .')'
                    .'|(*:526)'
                .')'
                .'|/user/(?'
                    .'|([^/]++)(*:552)'
                    .'|profile/([^/]++)(*:576)'
                    .'|([^/]++)(?'
                        .'|/edit(*:600)'
                        .'|(*:608)'
                    .')'
                .')'
                .'|/vehicule/([^/]++)(?'
                    .'|(*:639)'
                    .'|/edit(*:652)'
                    .'|(*:660)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'trip_treatment', '_controller' => 'App\\Controller\\TripController::treatment'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        75 => [[['_route' => 'routeRequest', '_controller' => 'App\\Controller\\TripController::routeRequest'], ['id'], ['GET' => 0], null, false, false, null]],
        88 => [[['_route' => 'trip_finish', '_controller' => 'App\\Controller\\TripController::finish'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        100 => [[['_route' => 'trip_start', '_controller' => 'App\\Controller\\TripController::start'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        109 => [[['_route' => 'trip_show', '_controller' => 'App\\Controller\\TripController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        134 => [[['_route' => 'trip_details', '_controller' => 'App\\Controller\\TripController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        155 => [[['_route' => 'trip_edit', '_controller' => 'App\\Controller\\TripController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        178 => [[['_route' => 'trip_delete', '_controller' => 'App\\Controller\\TripController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        199 => [[['_route' => 'test', '_controller' => 'App\\Controller\\TripController::test'], ['ville'], null, null, false, true, null]],
        236 => [[['_route' => 'travel_preferences_show', '_controller' => 'App\\Controller\\TravelPreferencesController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'travel_preferences_edit', '_controller' => 'App\\Controller\\TravelPreferencesController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'travel_preferences_delete', '_controller' => 'App\\Controller\\TravelPreferencesController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        294 => [[['_route' => 'type_of_vehicule_show', '_controller' => 'App\\Controller\\TypeOfVehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        307 => [[['_route' => 'type_of_vehicule_edit', '_controller' => 'App\\Controller\\TypeOfVehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        315 => [[['_route' => 'type_of_vehicule_delete', '_controller' => 'App\\Controller\\TypeOfVehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        349 => [[['_route' => 'booking_new', '_controller' => 'App\\Controller\\BookingController::new'], ['id'], ['GET' => 0], null, false, false, null]],
        357 => [[['_route' => 'booking_delete', '_controller' => 'App\\Controller\\BookingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        390 => [[['_route' => 'message_new', '_controller' => 'App\\Controller\\MessageController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        420 => [[['_route' => 'message_discussion', '_controller' => 'App\\Controller\\MessageController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        436 => [[['_route' => 'message_discussion_details', '_controller' => 'App\\Controller\\MessageController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [[['_route' => 'message_edit', '_controller' => 'App\\Controller\\MessageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        469 => [[['_route' => 'message_delete', '_controller' => 'App\\Controller\\MessageController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        505 => [[['_route' => 'review_new', '_controller' => 'App\\Controller\\ReviewController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        517 => [[['_route' => 'review_edit', '_controller' => 'App\\Controller\\ReviewController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        526 => [
            [['_route' => 'review_show', '_controller' => 'App\\Controller\\ReviewController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'review_delete', '_controller' => 'App\\Controller\\ReviewController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        552 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        576 => [[['_route' => 'user_view_profile', '_controller' => 'App\\Controller\\UserController::viewProfile'], ['id'], ['GET' => 0], null, false, true, null]],
        600 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        608 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        639 => [[['_route' => 'vehicule_show', '_controller' => 'App\\Controller\\VehiculeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        652 => [[['_route' => 'vehicule_edit', '_controller' => 'App\\Controller\\VehiculeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        660 => [
            [['_route' => 'vehicule_delete', '_controller' => 'App\\Controller\\VehiculeController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
