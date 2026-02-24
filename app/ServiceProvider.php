<?php

namespace App;

use App\Controllers\HomeController;
use App\Controllers\TaskController;
use Exception;
use Framework\ResponseFactory;
use Framework\ServiceContainer;
use Framework\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @throws Exception
     */
    public function register(ServiceContainer $container): void
    {
        $homeController = new HomeController($container->get(ResponseFactory::class));
        $taskController = new TaskController($container->get(ResponseFactory::class));

        try {
            $container->set(HomeController::class, $homeController);
            $container->set(TaskController::class, $taskController);
        } catch (Exception $exception) {
            echo $exception;
        }
    }
}
