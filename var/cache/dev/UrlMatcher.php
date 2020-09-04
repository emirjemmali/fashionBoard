<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'default', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/connect/facebook' => [[['_route' => 'connect_facebook_start', '_controller' => 'App\\Controller\\FacebookController::connectAction'], null, null, null, false, false, null]],
        '/connect/facebook/check' => [[['_route' => 'connect_facebook_check', '_controller' => 'App\\Controller\\FacebookController::connectCheckAction'], null, null, null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, false, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, false, false, null]],
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
        '/updateuser' => [[['_route' => 'updateuser', '_controller' => 'App\\Controller\\DefaultController::updateuser'], null, null, null, false, false, null]],
        '/userprofile' => [[['_route' => 'userProfile', '_controller' => 'App\\Controller\\DefaultController::userProfile'], null, null, null, false, false, null]],
        '/manageOrders' => [[['_route' => 'manageOrders', '_controller' => 'App\\Controller\\DefaultController::manageOrders'], null, null, null, false, false, null]],
        '/manageQuiz' => [[['_route' => 'manageQuiz', '_controller' => 'App\\Controller\\DefaultController::manageQuiz'], null, null, null, false, false, null]],
        '/addQuiz' => [[['_route' => 'addQuiz', '_controller' => 'App\\Controller\\DefaultController::addQuiz'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Controller\\DefaultController::viewDashboard'], null, null, null, false, false, null]],
        '/wardrob' => [[['_route' => 'wardrobe', '_controller' => 'App\\Controller\\DefaultController::wardropfashionboard'], null, null, null, false, false, null]],
        '/activatefasionboard' => [[['_route' => 'activatedfasionboard', '_controller' => 'App\\Controller\\DefaultController::activationfasionboard'], null, null, null, false, false, null]],
        '/quiz' => [[['_route' => 'quizanswer', '_controller' => 'App\\Controller\\DefaultController::quizAnswer'], null, null, null, false, false, null]],
        '/submitquiz' => [[['_route' => 'quizsubmit', '_controller' => 'App\\Controller\\DefaultController::submitquiz'], null, null, null, false, false, null]],
        '/manageBundle' => [[['_route' => 'manageBundle', '_controller' => 'App\\Controller\\FashionBundleController::manageBundle'], null, null, null, false, false, null]],
        '/addBundle' => [[['_route' => 'addBundle', '_controller' => 'App\\Controller\\FashionBundleController::addBundle'], null, null, null, false, false, null]],
        '/manageProducts' => [[['_route' => 'manageProduct', '_controller' => 'App\\Controller\\ProductController::manageProducts'], null, null, null, false, false, null]],
        '/addProduct' => [[['_route' => 'addProduct', '_controller' => 'App\\Controller\\ProductController::newProduct'], null, null, null, false, false, null]],
        '/listFashionBoard' => [[['_route' => 'listFashionBoard', '_controller' => 'App\\Controller\\FashionBoardController::listFashionBoard'], null, null, null, false, false, null]],
        '/manageFashionBoard' => [[['_route' => 'manageFashionBoard', '_controller' => 'App\\Controller\\FashionBoardController::manageFashionBoard'], null, null, null, false, false, null]],
        '/updateFashionBoard' => [[['_route' => 'updateFashionBoard', '_controller' => 'App\\Controller\\FashionBoardController::updateFashionBoard'], null, null, null, false, false, null]],
        '/getQuiz' => [[['_route' => 'getQuiz', '_controller' => 'App\\Controller\\FashionBoardController::getQuizByUser'], null, null, null, false, false, null]],
        '/listPaymentOrder' => [[['_route' => 'listOrders', '_controller' => 'App\\Controller\\OrderController::listPaymentOrder'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/([^/]++)/(?'
                    .'|([^/]++)/payment/create(*:78)'
                    .'|payment/complete(*:101)'
                .')'
                .'|/re(?'
                    .'|gister/confirm/([^/]++)(*:139)'
                    .'|setting/reset/([^/]++)(*:169)'
                .')'
                .'|/update(?'
                    .'|Bundle/([^/]++)(*:203)'
                    .'|Product/([^/]++)(*:227)'
                .')'
                .'|/delete(?'
                    .'|Bundle/([^/]++)(*:261)'
                    .'|Product/([^/]++)(*:285)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        78 => [[['_route' => 'app_orders_paymentcreate', '_controller' => 'App\\Controller\\DefaultController::paymentCreateAction'], ['bundleid', 'orderId'], null, null, false, false, null]],
        101 => [[['_route' => 'app_orders_paymentcomplete', '_controller' => 'App\\Controller\\DefaultController::paymentCompleteAction'], ['orderId'], null, null, false, false, null]],
        139 => [[['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null]],
        169 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        203 => [[['_route' => 'updateBundle', '_controller' => 'App\\Controller\\FashionBundleController::updateBundle'], ['id'], null, null, false, true, null]],
        227 => [[['_route' => 'updateProduct', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['id'], null, null, false, true, null]],
        261 => [[['_route' => 'deleteBundle', '_controller' => 'App\\Controller\\FashionBundleController::deleteFashionBUndle'], ['id'], null, null, false, true, null]],
        285 => [
            [['_route' => 'deleteProduct', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
