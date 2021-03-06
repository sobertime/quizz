<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_twig_error_test' => [['code', '_format'], ['_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/']], [], []],
    'question' => [[], ['_controller' => 'App\\Controller\\QuestionController::index'], [], [['text', '/quiz/question']], [], []],
    'question_by_catego' => [['id', 'id_q'], ['_controller' => 'App\\Controller\\QuestionController::show'], [], [['variable', '/', '[^/]++', 'id_q', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/quiz/question']], [], []],
    'quiz' => [[], ['_controller' => 'App\\Controller\\QuizController::index'], [], [['text', '/quiz']], [], []],
    'reponse' => [[], ['_controller' => 'App\\Controller\\ReponseController::index'], [], [['text', '/reponse']], [], []],
    'user' => [[], ['_controller' => 'App\\Controller\\UserController::inscription'], [], [['text', '/user']], [], []],
    'login' => [[], ['_controller' => 'App\\Controller\\UserController::login'], [], [['text', '/login']], [], []],
    'logout' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/logout']], [], []],
    'profil' => [[], ['_controller' => 'App\\Controller\\UserController::profil'], [], [['text', '/profil']], [], []],
    'edit' => [[], ['_controller' => 'App\\Controller\\UserController::edit'], [], [['text', '/profil/edit']], [], []],
];
