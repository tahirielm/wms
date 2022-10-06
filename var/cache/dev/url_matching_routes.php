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
        '/admin' => [[['_route' => 'app_admin_index', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/category' => [[['_route' => 'app_category', '_controller' => 'App\\Controller\\CategoryController::index'], null, null, null, false, false, null]],
        '/category/create' => [[['_route' => 'app_category_create', '_controller' => 'App\\Controller\\CategoryController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/client/create' => [[['_route' => 'app_client_create', '_controller' => 'App\\Controller\\ClientController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/commande' => [[['_route' => 'app_commande', '_controller' => 'App\\Controller\\CommandeController::index'], null, null, null, false, false, null]],
        '/commande/create' => [[['_route' => 'app_commande_create', '_controller' => 'App\\Controller\\CommandeController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dashboard' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/delivery' => [[['_route' => 'app_delivery', '_controller' => 'App\\Controller\\DeliveryController::index'], null, null, null, false, false, null]],
        '/delivery/create' => [[['_route' => 'app_delivery_create', '_controller' => 'App\\Controller\\DeliveryController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/deliveryorder' => [[['_route' => 'app_deliveryorder', '_controller' => 'App\\Controller\\DeliveryOrderController::index'], null, null, null, false, false, null]],
        '/deliveryorder/create' => [[['_route' => 'app_deliveryorder_create', '_controller' => 'App\\Controller\\DeliveryOrderController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inventory' => [[['_route' => 'app_inventory', '_controller' => 'App\\Controller\\InventoryController::index'], null, null, null, false, false, null]],
        '/inventory/create' => [[['_route' => 'app_inventory_create', '_controller' => 'App\\Controller\\InventoryController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/post' => [[['_route' => 'app_posts', '_controller' => 'App\\Controller\\PostsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/posts/create' => [[['_route' => 'app_posts_create', '_controller' => 'App\\Controller\\PostsController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'app_product_create', '_controller' => 'App\\Controller\\ProductController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::show'], null, null, null, false, false, null]],
        '/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::edit'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/receival' => [[['_route' => 'app_receival', '_controller' => 'App\\Controller\\ReceivalController::index'], null, null, null, false, false, null]],
        '/receival/create' => [[['_route' => 'app_receival_create', '_controller' => 'App\\Controller\\ReceivalController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stockage' => [[['_route' => 'app_stockage', '_controller' => 'App\\Controller\\StockageController::index'], null, null, null, false, false, null]],
        '/stockage/create' => [[['_route' => 'app_stockage_create', '_controller' => 'App\\Controller\\StockageController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/supplier' => [[['_route' => 'app_supplier', '_controller' => 'App\\Controller\\SupplierController::index'], null, null, null, false, false, null]],
        '/supplier/create' => [[['_route' => 'app_supplier_create', '_controller' => 'App\\Controller\\SupplierController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/vehicle' => [[['_route' => 'app_vehicle', '_controller' => 'App\\Controller\\VehicleController::index'], null, null, null, false, false, null]],
        '/vehicle/create' => [[['_route' => 'app_vehicle_create', '_controller' => 'App\\Controller\\VehicleController::create'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:223)'
                    .'|([A-z0-9_-]*)/(.+)(*:249)'
                .')'
                .'|/c(?'
                    .'|ategory/(?'
                        .'|([0-9]+)(*:282)'
                        .'|([0-9]+)/edit\\}(*:305)'
                        .'|([0-9]+)(*:321)'
                    .')'
                    .'|lient/(?'
                        .'|([0-9]+)(*:347)'
                        .'|([0-9]+)/edit\\}(*:370)'
                        .'|([0-9]+)(*:386)'
                    .')'
                    .'|ommande/(?'
                        .'|([0-9]+)(*:414)'
                        .'|([0-9]+)/edit\\}(*:437)'
                        .'|([0-9]+)(*:453)'
                    .')'
                .')'
                .'|/delivery(?'
                    .'|/(?'
                        .'|([0-9]+)(*:487)'
                        .'|([0-9]+)/edit\\}(*:510)'
                        .'|([0-9]+)(*:526)'
                    .')'
                    .'|order/(?'
                        .'|([0-9]+)(*:552)'
                        .'|([0-9]+)/edit\\}(*:575)'
                        .'|([0-9]+)(*:591)'
                    .')'
                .')'
                .'|/inventory/(?'
                    .'|([0-9]+)(*:623)'
                    .'|([0-9]+)/edit\\}(*:646)'
                    .'|([0-9]+)(*:662)'
                .')'
                .'|/p(?'
                    .'|osts/(?'
                        .'|([0-9]+)(*:692)'
                        .'|([0-9]+)/edit\\}(*:715)'
                        .'|([0-9]+)(*:731)'
                    .')'
                    .'|roduct/(?'
                        .'|([0-9]+)(*:758)'
                        .'|([0-9]+)/edit\\}(*:781)'
                        .'|([0-9]+)(*:797)'
                    .')'
                .')'
                .'|/receival/(?'
                    .'|([0-9]+)(*:828)'
                    .'|([0-9]+)/edit\\}(*:851)'
                    .'|([0-9]+)(*:867)'
                .')'
                .'|/s(?'
                    .'|tockage/(?'
                        .'|([0-9]+)(*:900)'
                        .'|([0-9]+)/edit\\}(*:923)'
                        .'|([0-9]+)(*:939)'
                    .')'
                    .'|upplier/(?'
                        .'|([0-9]+)(*:967)'
                        .'|([0-9]+)/edit\\}(*:990)'
                        .'|([0-9]+)(*:1006)'
                    .')'
                .')'
                .'|/vehicle/(?'
                    .'|([0-9]+)(*:1037)'
                    .'|([0-9]+)/edit\\}(*:1061)'
                    .'|([0-9]+)(*:1078)'
                .')'
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
        223 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        282 => [[['_route' => 'app_category_details', '_controller' => 'App\\Controller\\CategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'app_category_edit', '_controller' => 'App\\Controller\\CategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        321 => [[['_route' => 'app_category_delete', '_controller' => 'App\\Controller\\CategoryController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        347 => [[['_route' => 'app_client_details', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        370 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        386 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\ClientController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        414 => [[['_route' => 'app_commande_details', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        437 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        487 => [[['_route' => 'app_delivery_details', '_controller' => 'App\\Controller\\DeliveryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        510 => [[['_route' => 'app_delivery_edit', '_controller' => 'App\\Controller\\DeliveryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        526 => [[['_route' => 'app_delivery_delete', '_controller' => 'App\\Controller\\DeliveryController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        552 => [[['_route' => 'app_deliveryorder_details', '_controller' => 'App\\Controller\\DeliveryOrderController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        575 => [[['_route' => 'app_deliveryorder_edit', '_controller' => 'App\\Controller\\DeliveryOrderController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        591 => [[['_route' => 'app_deliveryorder_delete', '_controller' => 'App\\Controller\\DeliveryOrderController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        623 => [[['_route' => 'app_inventory_details', '_controller' => 'App\\Controller\\InventoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        646 => [[['_route' => 'app_inventory_edit', '_controller' => 'App\\Controller\\InventoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        662 => [[['_route' => 'app_inventory_delete', '_controller' => 'App\\Controller\\InventoryController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        692 => [[['_route' => 'app_posts_details', '_controller' => 'App\\Controller\\PostsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        715 => [[['_route' => 'app_posts_edit', '_controller' => 'App\\Controller\\PostsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        731 => [[['_route' => 'app_posts_delete', '_controller' => 'App\\Controller\\PostsController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        758 => [[['_route' => 'app_product_details', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        781 => [[['_route' => 'app_product_edit', '_controller' => 'App\\Controller\\ProductController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        797 => [[['_route' => 'app_product_delete', '_controller' => 'App\\Controller\\ProductController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        828 => [[['_route' => 'app_receival_details', '_controller' => 'App\\Controller\\ReceivalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        851 => [[['_route' => 'app_receival_edit', '_controller' => 'App\\Controller\\ReceivalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        867 => [[['_route' => 'app_receival_delete', '_controller' => 'App\\Controller\\ReceivalController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        900 => [[['_route' => 'app_stockage_details', '_controller' => 'App\\Controller\\StockageController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        923 => [[['_route' => 'app_stockage_edit', '_controller' => 'App\\Controller\\StockageController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        939 => [[['_route' => 'app_stockage_delete', '_controller' => 'App\\Controller\\StockageController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        967 => [[['_route' => 'app_supplier_details', '_controller' => 'App\\Controller\\SupplierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        990 => [[['_route' => 'app_supplier_edit', '_controller' => 'App\\Controller\\SupplierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1006 => [[['_route' => 'app_supplier_delete', '_controller' => 'App\\Controller\\SupplierController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null]],
        1037 => [[['_route' => 'app_vehicle_details', '_controller' => 'App\\Controller\\VehicleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1061 => [[['_route' => 'app_vehicle_edit', '_controller' => 'App\\Controller\\VehicleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1078 => [
            [['_route' => 'app_vehicle_delete', '_controller' => 'App\\Controller\\VehicleController::delete'], ['id'], ['DELETE' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
