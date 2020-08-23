<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/register/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/register/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/request' => [[['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/resetting/check-email' => [[['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/formule' => [[['_route' => 'formule', '_controller' => 'App\\Controller\\DefaultController::formule'], null, null, null, false, false, null]],
        '/purchase' => [[['_route' => 'purchase', '_controller' => 'App\\Controller\\DefaultController::purchase'], null, null, null, false, false, null]],
        '/manageBundle' => [[['_route' => 'manageBundle', '_controller' => 'App\\Controller\\DefaultController::manageBundle'], null, null, null, false, false, null]],
        '/addBundle' => [[['_route' => 'addBundle', '_controller' => 'App\\Controller\\DefaultController::addBundle'], null, null, null, false, false, null]],
        '/manageProducts' => [[['_route' => 'manageProduct', '_controller' => 'App\\Controller\\DefaultController::manageProducts'], null, null, null, false, false, null]],
        '/addProduct' => [[['_route' => 'addProduct', '_controller' => 'App\\Controller\\DefaultController::newProduct'], null, null, null, false, false, null]],
        '/listFashionBoard' => [[['_route' => 'listFashionBoard', '_controller' => 'App\\Controller\\DefaultController::listFashionBoard'], null, null, null, false, false, null]],
        '/manageFashionBoard' => [[['_route' => 'manageFashionBoard', '_controller' => 'App\\Controller\\DefaultController::manageFashionBoard'], null, null, null, false, false, null]],
        '/manageOrders' => [[['_route' => 'manageOrders', '_controller' => 'App\\Controller\\DefaultController::manageOrders'], null, null, null, false, false, null]],
        '/manageQuiz' => [[['_route' => 'manageQuiz', '_controller' => 'App\\Controller\\DefaultController::manageQuiz'], null, null, null, false, false, null]],
        '/addQuiz' => [[['_route' => 'addQuiz', '_controller' => 'App\\Controller\\DefaultController::addQuiz'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DefaultController::viewDashboard'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/re(?'
                    .'|gister/confirm/([^/]++)(*:71)'
                    .'|setting/reset/([^/]++)(*:100)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        71 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        100 => [
            [['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
