<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function __construct($product)
    {
        $this->product = $product;
        parent::__construct();
    }
    
    public function index()
    {
        $products = $this->product->allProducts();

        $this->showView('home/index.html.twig', [
            'products' => $products
        ]);
    }
}