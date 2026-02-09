<?php

namespace App;

use App\Controllers\HomeController;
use App\Controllers\TaskController;
use Exception;
use Framework\ServiceContainer;
use Framework\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param ServiceContainer $container
     * @return void
     * @throws Exception
     */
    public function register(ServiceContainer $container): void
    {
        $homeController = new HomeController();
        $taskController = new TaskController();
        try {
            $container->set(HomeController::class, $homeController);
            $container->set(TaskController::class, $taskController);
        } catch (Exception $exception) {
            echo $exception;
        }
    }
}
