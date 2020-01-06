<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/quiz/question' => [[['_route' => 'question', '_controller' => 'App\\Controller\\QuestionController::index'], null, null, null, false, false, null]],
        '/quiz' => [[['_route' => 'quiz', '_controller' => 'App\\Controller\\QuizController::index'], null, null, null, false, false, null]],
        '/reponse' => [[['_route' => 'reponse', '_controller' => 'App\\Controller\\ReponseController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::inscription'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\UserController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profil', '_controller' => 'App\\Controller\\UserController::profil'], null, null, null, false, false, null]],
        '/profil/edit' => [[['_route' => 'edit', '_controller' => 'App\\Controller\\UserController::edit'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/quiz/question/([^/]++)/([^/]++)(*:74)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [
            [['_route' => 'question_by_catego', '_controller' => 'App\\Controller\\QuestionController::show'], ['id', 'id_q'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
