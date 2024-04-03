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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/compte/adresses' => [[['_route' => 'app_account_addresses', '_controller' => 'App\\Controller\\Account\\AddressController::index'], null, null, null, false, false, null]],
        '/compte' => [[['_route' => 'app_account', '_controller' => 'App\\Controller\\Account\\HomeController::index'], null, null, null, false, false, null]],
        '/compte/modifier-mot-de-passe' => [[['_route' => 'app_account_modify_pwd', '_controller' => 'App\\Controller\\Account\\PasswordController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/cart/remove' => [[['_route' => 'app_cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], null, null, null, false, false, null]],
        '/politique-de-confidentialite' => [[['_route' => 'app_cgu', '_controller' => 'App\\Controller\\CguController::index'], null, null, null, false, false, null]],
        '/mention-legale' => [[['_route' => 'app_cgv', '_controller' => 'App\\Controller\\CgvController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, ['GET' => 0], null, false, false, null]],
        '/commande/livraison' => [[['_route' => 'app_order', '_controller' => 'App\\Controller\\OrderController::index'], null, null, null, false, false, null]],
        '/commande/recapitulatif' => [[['_route' => 'app_order_summary', '_controller' => 'App\\Controller\\OrderController::add'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::index'], null, null, null, false, false, null]],
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
                            .'|adresse(?'
                                .'|s/delete/([^/]++)(*:213)'
                                .'|/ajouter(?:/([^/]++))?(*:243)'
                            .')'
                            .'|commande/([^/]++)(*:269)'
                            .'|facture/impression/([^/]++)(*:304)'
                        .')'
                        .'|mande/(?'
                            .'|paiement/([^/]++)(*:339)'
                            .'|merci/([^/]++)(*:361)'
                        .')'
                    .')'
                    .'|a(?'
                        .'|rt/(?'
                            .'|add/([^/]++)(*:393)'
                            .'|decrease/([^/]++)(*:418)'
                        .')'
                        .'|tegorie/([^/]++)(*:443)'
                    .')'
                .')'
                .'|/mon\\-panier(?:/([^/]++))?(*:479)'
                .'|/admin/facture/impression/([^/]++)(*:521)'
                .'|/produit/([^/]++)(*:546)'
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
        213 => [[['_route' => 'app_account_address_delete', '_controller' => 'App\\Controller\\Account\\AddressController::delete'], ['id'], null, null, false, true, null]],
        243 => [[['_route' => 'app_account_address_form', 'id' => null, '_controller' => 'App\\Controller\\Account\\AddressController::form'], ['id'], null, null, false, true, null]],
        269 => [[['_route' => 'app_account_order', '_controller' => 'App\\Controller\\Account\\OrderController::index'], ['id_order'], null, null, false, true, null]],
        304 => [[['_route' => 'app_invoice_customer', '_controller' => 'App\\Controller\\InvoiceController::printForCustomer'], ['id_order'], null, null, false, true, null]],
        339 => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], ['id_order'], null, null, false, true, null]],
        361 => [[['_route' => 'app_payment_success', '_controller' => 'App\\Controller\\PaymentController::success'], ['stripe_session_id'], null, null, false, true, null]],
        393 => [[['_route' => 'app_cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        418 => [[['_route' => 'app_cart_decrease', '_controller' => 'App\\Controller\\CartController::decrease'], ['id'], null, null, false, true, null]],
        443 => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::index'], ['slug'], null, null, false, true, null]],
        479 => [[['_route' => 'app_cart', 'motif' => null, '_controller' => 'App\\Controller\\CartController::index'], ['motif'], null, null, false, true, null]],
        521 => [[['_route' => 'app_invoice_admin', '_controller' => 'App\\Controller\\InvoiceController::printForAdmin'], ['id_order'], null, null, false, true, null]],
        546 => [
            [['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], ['slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
