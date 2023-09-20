<?php

namespace ContainerOSgQbIn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Go01M3XService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.go01M3X' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.go01M3X'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'etudiant' => ['privates', '.errored..service_locator.go01M3X.App\\Entity\\Etudiant', NULL, 'Cannot autowire service ".service_locator.go01M3X": it needs an instance of "App\\Entity\\Etudiant" but this type has been excluded in "config/services.yaml".'],
        ], [
            'etudiant' => 'App\\Entity\\Etudiant',
        ]);
    }
}
