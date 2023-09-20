<?php

namespace ContainerOSgQbIn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Listener_StopWorkerSignalsListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.listener.stop_worker_signals_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\StopWorkerOnSignalsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/StopWorkerOnSignalsListener.php';

        return $container->privates['messenger.listener.stop_worker_signals_listener'] = new \Symfony\Component\Messenger\EventListener\StopWorkerOnSignalsListener(NULL, ($container->privates['monolog.logger.messenger'] ?? $container->load('getMonolog_Logger_MessengerService')));
    }
}
