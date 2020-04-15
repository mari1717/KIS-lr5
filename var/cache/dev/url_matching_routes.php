<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/place' => [[['_route' => 'PostPlace', '_controller' => 'App\\Controller\\PlaceController::create'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'PostRegistration', '_controller' => 'App\\Controller\\RegistrationController::create'], null, null, null, false, false, null]],
        '/actorInMovie' => [[['_route' => 'PostActorInMovie', '_controller' => 'App\\Controller\\ActorController::createActorInMovie'], null, null, null, false, false, null]],
        '/auth' => [[['_route' => 'PostAuth', '_controller' => 'App\\Controller\\AuthController::create'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/genre/([^/]++)(*:57)'
                .'|/movie/([^/]++)(*:79)'
                .'|/actor/([^/]++)(*:101)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => 'GetGenre', '_controller' => 'App\\Controller\\GenreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        79 => [[['_route' => 'GetMovie', '_controller' => 'App\\Controller\\MovieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        101 => [
            [['_route' => 'GetActor', '_controller' => 'App\\Controller\\ActorController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
