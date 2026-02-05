<?php

namespace Framework;

class Kernel
{
    private Router $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function registerRoutes(RouteProviderInterface $provider): void
    {
        $provider->register($this->router);
    }

    public function handle(Request $request): Response
    {
        return $this->router->dispatch($request);
    }
}
