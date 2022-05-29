<?php

namespace ContainerLrexjU1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CartController' shared autowired service.
     *
     * @return \App\Controller\CartController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CartController.php';

        $container->services['App\\Controller\\CartController'] = $instance = new \App\Controller\CartController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\CartController', $container));

        return $instance;
    }
}
