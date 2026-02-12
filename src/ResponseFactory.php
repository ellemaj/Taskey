<?php

namespace Framework;

use Exception;
use PHPStan\BetterReflection\SourceLocator\Exception\EvaledClosureCannotBeLocated;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class ResponseFactory
{
    private Environment $twig;

    public function __construct()
    {
        $loader = new FilesystemLoader('../app/views');
        $this->twig = new Environment($loader, [
            'debug' => true,
        ]);
    }

    /**
     * @param string $template
     * @param array<string, mixed> $parameters
     * @return Response
     * @throws Exception
     */
    public function view(string $template, array $parameters): Response
    {
        try {
            return new Response($this->twig->render($template, $parameters), 200);
        } catch (Exception $e) {
            throw new Exception('Failed to render page' . $e);
        }
    }

    public function body(string $txt): Response
    {
        return new Response($txt, 200);
    }

    /**
     * @return Response
     * @throws Exception
     */
    public function notFound(): Response
    {
        try {
            return new Response($this->twig->render('404.html.twig'), 404);
        } catch (Exception $e) {
            throw new Exception('Failed to render page' . $e);
        }
    }
}
