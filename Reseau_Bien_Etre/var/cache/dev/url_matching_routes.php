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
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:261)'
                                .')'
                                .'|mmunes(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:305)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:331)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:366)'
                                .')'
                            .')'
                            .'|ategorie_de_servicess(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:426)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:452)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:487)'
                            .')'
                        .')'
                        .'|errors/([^/]++)(?'
                            .'|(*:515)'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:553)'
                        .')'
                        .'|i(?'
                            .'|mage(?'
                                .'|ss(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:604)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:630)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:668)'
                                    .')'
                                .')'
                                .'|Internaute/([^/]++)(*:697)'
                                .'|Prestataire/([^/]++)/([^/]++)(*:734)'
                            .')'
                            .'|nternautes(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:782)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:808)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:843)'
                            .')'
                        .')'
                        .'|localites(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:891)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:917)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:952)'
                        .')'
                        .'|s(?'
                            .'|ervice/([^/]++)/prestataire(*:992)'
                            .'|tages(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1034)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1061)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1097)'
                            .')'
                        .')'
                        .'|pr(?'
                            .'|estataires(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1152)'
                                .'|(?:\\.([^/]++))?(*:1176)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1211)'
                            .')'
                            .'|omotions(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1258)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1285)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1321)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1366)'
                            .'|(?:\\.([^/]++))?(*:1390)'
                            .'|(*:1399)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1442)'
                    .'|wdt/([^/]++)(*:1463)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:1506)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1544)'
                                .'|router(*:1559)'
                                .'|exception(?'
                                    .'|(*:1580)'
                                    .'|\\.css(*:1594)'
                                .')'
                            .')'
                            .'|(*:1605)'
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
        261 => [[['_route' => '_api_/code_postals/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CodePostal', '_api_operation_name' => '_api_/code_postals/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        305 => [[['_route' => '_api_/communes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        331 => [
            [['_route' => '_api_/communes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/communes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        366 => [[['_route' => '_api_/communes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Commune', '_api_operation_name' => '_api_/communes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        426 => [[['_route' => '_api_/categorie_de_servicess/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        452 => [
            [['_route' => '_api_/categorie_de_servicess{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/categorie_de_servicess{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        487 => [[['_route' => '_api_/categorie_de_servicess/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\CategorieDeServices', '_api_operation_name' => '_api_/categorie_de_servicess/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        515 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        553 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        604 => [[['_route' => '_api_/imagess/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        630 => [
            [['_route' => '_api_/imagess{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/imagess{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        668 => [
            [['_route' => '_api_/imagess/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/imagess/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/imagess/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Images', '_api_operation_name' => '_api_/imagess/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        697 => [[['_route' => 'app_api_imageInternaute', '_controller' => 'App\\Controller\\ImageApiController::imageInternaute'], ['id'], null, null, false, true, null]],
        734 => [[['_route' => 'app_api_imagePrestataire', '_controller' => 'App\\Controller\\ImageApiController::imagePrestataire'], ['id', 'ordre'], null, null, false, true, null]],
        782 => [[['_route' => '_api_/internautes/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        808 => [
            [['_route' => '_api_/internautes{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/internautes{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        843 => [[['_route' => '_api_/internautes/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Internaute', '_api_operation_name' => '_api_/internautes/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        891 => [[['_route' => '_api_/localites/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        917 => [
            [['_route' => '_api_/localites{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/localites{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        952 => [[['_route' => '_api_/localites/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Localite', '_api_operation_name' => '_api_/localites/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        992 => [[['_route' => '_api_/service/{serviceId}/prestataire_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/service/{serviceId}/prestataire_get_collection'], ['serviceId'], ['GET' => 0], null, false, false, null]],
        1034 => [[['_route' => '_api_/stages/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1061 => [
            [['_route' => '_api_/stages{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/stages{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1097 => [[['_route' => '_api_/stages/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Stage', '_api_operation_name' => '_api_/stages/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        1152 => [[['_route' => '_api_/prestataires/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1176 => [[['_route' => '_api_/prestataires{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1211 => [[['_route' => '_api_/prestataires/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Prestataire', '_api_operation_name' => '_api_/prestataires/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        1258 => [[['_route' => '_api_/promotions/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1285 => [
            [['_route' => '_api_/promotions{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/promotions{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1321 => [[['_route' => '_api_/promotions/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_operation_name' => '_api_/promotions/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null]],
        1366 => [[['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1390 => [[['_route' => '_api_/users{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1399 => [[['_route' => 'user', '_controller' => 'App\\Controller\\RegistrationController', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => 'user'], [], ['POST' => 0], null, false, false, null]],
        1442 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1463 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1506 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        1544 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1559 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1580 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1594 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1605 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
