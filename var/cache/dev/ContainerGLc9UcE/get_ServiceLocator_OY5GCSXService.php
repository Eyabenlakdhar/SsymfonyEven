<?php

namespace ContainerGLc9UcE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OY5GCSXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oY5GCSX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oY5GCSX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'htrepo' => ['privates', 'App\\Repository\\EvenementRepo', 'getEvenementRepoService', true],
        ], [
            'htrepo' => 'App\\Repository\\EvenementRepo',
        ]);
    }
}
