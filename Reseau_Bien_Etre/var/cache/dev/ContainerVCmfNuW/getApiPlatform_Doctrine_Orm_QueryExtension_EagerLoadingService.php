<?php

namespace ContainerVCmfNuW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_QueryExtension_EagerLoadingService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.doctrine.orm.query_extension.eager_loading' shared service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Extension\EagerLoadingExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Extension/EagerLoadingExtension.php';

        $a = ($container->privates['api_platform.metadata.property.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Property_NameCollectionFactory_CachedService($container));

        if (isset($container->privates['api_platform.doctrine.orm.query_extension.eager_loading'])) {
            return $container->privates['api_platform.doctrine.orm.query_extension.eager_loading'];
        }

        return $container->privates['api_platform.doctrine.orm.query_extension.eager_loading'] = new \ApiPlatform\Doctrine\Orm\Extension\EagerLoadingExtension($a, ($container->privates['api_platform.metadata.property.metadata_factory.cached'] ?? self::getApiPlatform_Metadata_Property_MetadataFactory_CachedService($container)), 30, true, false, ($container->privates['api_platform.serializer.mapping.class_metadata_factory'] ?? self::getApiPlatform_Serializer_Mapping_ClassMetadataFactoryService($container)));
    }
}
