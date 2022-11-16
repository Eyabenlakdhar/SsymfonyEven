<?php

namespace ContainerCtnGddH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMercuryseriesFlashy_FlashyNotifierService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'mercuryseries_flashy.flashy_notifier' shared service.
     *
     * @return \MercurySeries\FlashyBundle\FlashyNotifier
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FlashyNotifier.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SessionStore.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'mercuryseries'.\DIRECTORY_SEPARATOR.'flashy-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'SymfonySessionStore.php';

        return $container->services['mercuryseries_flashy.flashy_notifier'] = new \MercurySeries\FlashyBundle\FlashyNotifier(new \MercurySeries\FlashyBundle\SymfonySessionStore(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 'mercuryseries_flashy_notification');
    }
}
