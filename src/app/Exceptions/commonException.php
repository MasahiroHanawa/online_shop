<?php

namespace App\Exceptions;
use Twig_Loader_Filesystem;
use Twig_Environment;

class CommonException extends \Exception
{
    private $loader = null;
    private $twig = null;
    public function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem(ROOT.'app/Views');
        $this->twig = new Twig_Environment($this->loader);
    }

    public function notFoundException()
    {
        echo $this->twig->render('errors/404.html.twig', [
            'message' => '404 not found'
        ]);
    }

    public function notAllowedException()
    {
        echo $this->twig->render('errors/405.html.twig', [
            'message' => '405 not allowed page'
        ]);
    }
}