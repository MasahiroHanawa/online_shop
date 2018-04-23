<?php

namespace App\Controllers;
use App\Controllers\Controller;
use Twig_Loader_Filesystem;
use Twig_Environment;


class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
//        $loader = new Twig_Loader_Filesystem(ROOT.'app/Views');
//        $twig = new Twig_Environment($loader);
//        echo $twig->render('index.twig', [] );
        $loader = new Twig_Loader_Filesystem(ROOT.'app/Views');
        $twig = new Twig_Environment($loader);
        $this->showView('index.twig', [] );
    }
}