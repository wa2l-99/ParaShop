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
        '/compte/addresses' => [[['_route' => 'account_address', '_controller' => 'App\\Controller\\AccountAddressController::index'], null, null, null, false, false, null]],
        '/compte/ajouter-une-adresse' => [[['_route' => 'account_address_add', '_controller' => 'App\\Controller\\AccountAddressController::add'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'account', '_controller' => 'App\\Controller\\AccountController::index'], null, null, null, false, false, null]],
        '/compte/modifier-mdp' => [[['_route' => 'account_password', '_controller' => 'App\\Controller\\AccountPasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/mon-panier' => [[['_route' => 'cart', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'remove-my-cart', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/commande' => [[['_route' => 'order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'order-recap', '_controller' => 'App\\Controller\\OrderController::add'], null, ['POST' => 0], null, false, false, null]],
        '/nos-produits' => [[['_route' => 'products', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|om(?'
                        .'|pte/(?'
                            .'|modifier\\-une\\-adresse/([^/]++)(*:217)'
                            .'|delete\\-une\\-adresse/([^/]++)(*:254)'
                        .')'
                        .'|mande/(?'
                            .'|erreur/([^/]++)(*:287)'
                            .'|merci/([^/]++)(*:309)'
                            .'|create\\-session/([^/]++)(*:341)'
                        .')'
                    .')'
                    .'|art/(?'
                        .'|add/([^/]++)(*:370)'
                        .'|de(?'
                            .'|lete/([^/]++)(*:396)'
                            .'|crease/([^/]++)(*:419)'
                        .')'
                    .')'
                .')'
                .'|/produit/([^/]++)(*:447)'
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
        217 => [[['_route' => 'account_address_modifier', '_controller' => 'App\\Controller\\AccountAddressController::modifier'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'account_address_delete', '_controller' => 'App\\Controller\\AccountAddressController::delete'], ['id'], null, null, false, true, null]],
        287 => [[['_route' => 'order_cancel', '_controller' => 'App\\Controller\\OrderCancelController::index'], ['stripeSessionId'], null, null, false, true, null]],
        309 => [[['_route' => 'order_validate', '_controller' => 'App\\Controller\\OrderSuccessController::index'], ['stripeSessionId'], null, null, false, true, null]],
        341 => [[['_route' => 'stripe-create-session', '_controller' => 'App\\Controller\\StripeController::index'], ['reference'], null, null, false, true, null]],
        370 => [[['_route' => 'add_to_cart', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        396 => [[['_route' => 'delete_to_cart', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        419 => [[['_route' => 'decrease_to_cart', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        447 => [
            [['_route' => 'product', '_controller' => 'App\\Controller\\ProductController::show'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
