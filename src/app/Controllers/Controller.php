<?php
namespace App\Controllers;
use Twig_Loader_Filesystem;
use Twig_Environment;


class Controller
{
    public function __construct(
        Twig_Loader_Filesystem $loader,
        Twig_Environment $twig
    )
    {
        $this->loader = $loader;
        $this->twig = $twig;
        var_dump($this->loader);
        var_dump($this->twig);
        var_dump('aaa');
        $this->loader(ROOT.'app/Views');
        $this->twig($this->loader);
    }

    public function showView($file)
    {
        
    }
}