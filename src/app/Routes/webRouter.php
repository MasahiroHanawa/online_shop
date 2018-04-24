<?php

namespace App\Routes;
use App\Controllers\HomeController;
use App\Models\ProductModel;
use App\Exceptions\CommonException;
use FastRoute;

class webRouter
{
    protected $httpMethod;
    protected $url;

    /*
     * Read parameter and URL
     */
    public function __construct()
    {
        $uri = $_SERVER['REQUEST_URI'];
        if (false !== $pos = strpos($uri, '?'))
        {
            $uri = substr($uri, 0, $pos);
        }
        $this->httpMethod = $_SERVER['REQUEST_METHOD'];
        $this->uri = rawurldecode($uri);
    }

    /*
     * Write Route url and call controller
     */
    public function webRoute()
    {
        $dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r)
        {
            $r->addRoute('GET', '/', function()
            {
                $homeController = new HomeController(new ProductModel);
                $homeController->index();
            });
        });
        $routeInfo = $dispatcher->dispatch($this->httpMethod, $this->uri);
        $this->tryRoute($routeInfo);
    }

    /*
     * find collect route url
     */
    protected function tryRoute ($routeInfo)
    {
        switch ($routeInfo[0])
        {
            case FastRoute\Dispatcher::NOT_FOUND:
                CommonExcept::notFoundException();
                break;
            case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                $allowedMethods = $routeInfo[1];
                CommonExcept::notAllowedException();
                break;
            case FastRoute\Dispatcher::FOUND:
                $handler = $routeInfo[1];
                $vars = $routeInfo[2];
                $handler($vars);
                break;
        }
    }
}
