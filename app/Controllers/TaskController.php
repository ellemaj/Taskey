<?php

namespace App\Controllers;

use Exception;
use Framework\Response;
use Framework\ResponseFactory;

class TaskController
{
    private ResponseFactory $responseFactory;

    public function __construct(ResponseFactory $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    /**
     * @throws Exception
     */
    public function index(): Response
    {
        return $this->responseFactory->view('tasks/index.html.twig', [
//            'navigation' => [
//                array('caption' => 'Home', 'href' => '/'),
//                array('caption' => 'About Taskey', 'href' => 'about'),
//                array('caption' => 'Tasks', 'href' => 'tasks'),
//                array('caption' => 'Create tasks', 'href' => 'create tasks'),
//            ]
        ]);
    }

    /**
     * @throws Exception
     */
    public function create(): Response
    {
        return $this->responseFactory->view('tasks/create.html.twig', [
//            'navigation' => [
//                array('caption' => 'Home', 'href' => '/'),
//                array('caption' => 'About Taskey', 'href' => 'about'),
//                array('caption' => 'Tasks', 'href' => 'tasks'),
//                array('caption' => 'Create tasks', 'href' => 'create tasks'),
//            ]
        ]);
    }
}
