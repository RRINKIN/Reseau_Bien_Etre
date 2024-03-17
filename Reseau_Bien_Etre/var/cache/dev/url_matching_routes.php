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
        '/mail' => [[['_route' => 'app_mail', '_controller' => 'App\\Controller\\MailController::index'], null, null, null, false, false, null]],
        '/auth/confirmation' => [
            [['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::emailVerification'], null, null, null, false, false, null],
            [['_route' => 'api_app_verify_email'], null, null, null, false, false, null],
        ],
        '/registration/resend' => [[['_route' => 'app_resend_email', '_controller' => 'App\\Controller\\RegistrationController::resendEmail'], null, null, null, false, false, null]],
        '/api/login_check' => [[['_route' => 'api_login_check'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|c(?'
                            .'|o(?'
                                .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:153)'
                                .'|de_postals(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:200)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:226)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:264)'
                                    .')'
                                .')'
                                .'|mm(?'
                                    .'|entaires(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:316)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:342)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:380)'
                                        .')'
                                    .')'
                                    .'|unes(?'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:423)'
                                        .'|(?:\\.([^/]++))?(?'
                                            .'|(*:449)'
                                        .')'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                            .'|(*:487)'
                                        .')'
                                    .')'
                                .')'
                            .')'
                            .'|ategorie_de_servicess(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:549)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:575)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:613)'
                                .')'
                            .')'
                        .')'
                        .'|errors/([^/]++)(?'
                            .'|(*:642)'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:680)'
                        .')'
                        .'|abuses(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:724)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:750)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:788)'
                            .')'
                        .')'
                        .'|blocs(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:832)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:858)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:896)'
                            .')'
                        .')'
                        .'|i(?'
                            .'|magess(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:945)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:971)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1009)'
                                .')'
                            .')'
                            .'|nternautes(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1059)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1086)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1125)'
                                .')'
                            .')'
                        .')'
                        .'|localites(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1175)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1202)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1241)'
                            .')'
                        .')'
                        .'|newsletters(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1292)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1319)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1358)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ositions(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1410)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1437)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1476)'
                                .')'
                            .')'
                            .'|r(?'
                                .'|estataires(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1533)'
                                    .')'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1561)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1597)'
                                .')'
                                .'|omotions(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1644)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1671)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1710)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|s(?'
                            .'|ervice/([^/]++)/prestataire(*:1754)'
                            .'|tages(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1797)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1824)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1863)'
                                .')'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1909)'
                            .'|(?:\\.([^/]++))?(*:1933)'
                            .'|(*:1942)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1985)'
                    .'|wdt/([^/]++)(*:2006)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:2049)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:2087)'
                                .'|router(*:2102)'
                                .'|exception(?'
                                    .'|(*:2123)'
                                    .'|\\.css(*:2137)'
                                .')'
                            .')'
                            .'|(*:2148)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        153 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        200 => [[['_route' => '_api_/code_postals/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CodePostal', '_api_operation_name' => '_api_/code_postals/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        226 => [
            [['_route' => '_api_/code_postals{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CodePostal', '_api_operation_name' => '_api_/code_postals{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/code_postals{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CodePostal', '_api_operation_name' => '_api_/code_postals{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        264 => [
            [['_route' => '_api_/code_postals/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CodePostal', '_api_operation_name' => '_api_/code_postals/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/code_postals/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CodePostal', '_api_operation_name' => '_api_/code_postals/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/code_postals/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CodePostal', '_api_operation_name' => '_api_/code_postals/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        316 => [[['_route' => '_api_/commentaires/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        342 => [
            [['_route' => '_api_/commentaires{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        380 => [
            [['_route' => '_api_/commentaires/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/commentaires/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commentaire', '_api_operation_name' => '_api_/commentaires/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        423 => [[['_route' => '_api_/communes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        449 => [
            [['_route' => '_api_/communes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/communes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        487 => [
            [['_route' => '_api_/communes/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/communes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/communes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        549 => [[['_route' => '_api_/categorie_de_servicess/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        575 => [
            [['_route' => '_api_/categorie_de_servicess{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categorie_de_servicess{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        613 => [
            [['_route' => '_api_/categorie_de_servicess/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/categorie_de_servicess/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/categorie_de_servicess/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        642 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        680 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        724 => [[['_route' => '_api_/abuses/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Abus', '_api_operation_name' => '_api_/abuses/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        750 => [
            [['_route' => '_api_/abuses{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Abus', '_api_operation_name' => '_api_/abuses{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/abuses{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Abus', '_api_operation_name' => '_api_/abuses{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        788 => [
            [['_route' => '_api_/abuses/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Abus', '_api_operation_name' => '_api_/abuses/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/abuses/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Abus', '_api_operation_name' => '_api_/abuses/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/abuses/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Abus', '_api_operation_name' => '_api_/abuses/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        832 => [[['_route' => '_api_/blocs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Bloc', '_api_operation_name' => '_api_/blocs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        858 => [
            [['_route' => '_api_/blocs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Bloc', '_api_operation_name' => '_api_/blocs{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/blocs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Bloc', '_api_operation_name' => '_api_/blocs{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        896 => [
            [['_route' => '_api_/blocs/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Bloc', '_api_operation_name' => '_api_/blocs/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/blocs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Bloc', '_api_operation_name' => '_api_/blocs/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/blocs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Bloc', '_api_operation_name' => '_api_/blocs/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        945 => [[['_route' => '_api_/imagess/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        971 => [
            [['_route' => '_api_/imagess{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/imagess{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1009 => [
            [['_route' => '_api_/imagess/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/imagess/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/imagess/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1059 => [[['_route' => '_api_/internautes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1086 => [
            [['_route' => '_api_/internautes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/internautes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1125 => [
            [['_route' => '_api_/internautes/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/internautes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/internautes/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1175 => [[['_route' => '_api_/localites/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1202 => [
            [['_route' => '_api_/localites{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/localites{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1241 => [
            [['_route' => '_api_/localites/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/localites/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/localites/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1292 => [[['_route' => '_api_/newsletters/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Newsletter', '_api_operation_name' => '_api_/newsletters/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1319 => [
            [['_route' => '_api_/newsletters{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Newsletter', '_api_operation_name' => '_api_/newsletters{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/newsletters{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Newsletter', '_api_operation_name' => '_api_/newsletters{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1358 => [
            [['_route' => '_api_/newsletters/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Newsletter', '_api_operation_name' => '_api_/newsletters/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/newsletters/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Newsletter', '_api_operation_name' => '_api_/newsletters/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/newsletters/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Newsletter', '_api_operation_name' => '_api_/newsletters/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1410 => [[['_route' => '_api_/positions/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Position', '_api_operation_name' => '_api_/positions/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1437 => [
            [['_route' => '_api_/positions{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Position', '_api_operation_name' => '_api_/positions{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/positions{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Position', '_api_operation_name' => '_api_/positions{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1476 => [
            [['_route' => '_api_/positions/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Position', '_api_operation_name' => '_api_/positions/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/positions/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Position', '_api_operation_name' => '_api_/positions/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/positions/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Position', '_api_operation_name' => '_api_/positions/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1533 => [
            [['_route' => '_api_/prestataires/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/prestataires/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/prestataires/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1561 => [
            [['_route' => '_api_/prestataires{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/prestataires{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1597 => [[['_route' => '_api_/prestataires/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        1644 => [[['_route' => '_api_/promotions/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1671 => [
            [['_route' => '_api_/promotions{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/promotions{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1710 => [
            [['_route' => '_api_/promotions/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/promotions/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/promotions/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1754 => [[['_route' => '_api_/service/{serviceId}/prestataire_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/service/{serviceId}/prestataire_get_collection'], ['serviceId'], ['GET' => 0], null, false, false, null]],
        1797 => [[['_route' => '_api_/stages/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1824 => [
            [['_route' => '_api_/stages{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/stages{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1863 => [
            [['_route' => '_api_/stages/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/stages/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/stages/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        1909 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1933 => [[['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1942 => [[['_route' => 'user', '_controller' => 'App\\Controller\\RegistrationController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user'], [], ['POST' => 0], null, false, false, null]],
        1985 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        2006 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2049 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        2087 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2102 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2123 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        2137 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        2148 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
