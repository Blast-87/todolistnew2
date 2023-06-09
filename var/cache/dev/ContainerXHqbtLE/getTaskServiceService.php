<?php

namespace ContainerXHqbtLE;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaskServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\TaskService' shared autowired service.
     *
     * @return \App\Service\TaskService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'TaskService.php';

        return $container->privates['App\\Service\\TaskService'] = new \App\Service\TaskService(($container->privates['App\\Repository\\TaskRepository'] ?? $container->load('getTaskRepositoryService')));
    }
}
