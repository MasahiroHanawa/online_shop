<?php
namespace App\Controllers;
use Twig_Loader_Filesystem;
use Twig_Environment;

class BaseController
{
    private $loader = null;
    private $twig = null;
    public function __construct()
    {
        $this->loader = new Twig_Loader_Filesystem(ROOT.'app/Views');
        $this->twig = new Twig_Environment($this->loader);
    }

    public function showView($file, $params)
    {
        echo $this->twig->render($file, $params);
    }
}