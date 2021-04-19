<?php

/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/04/19
 * Time: 18:40
 */

namespace App\Controller;

class HomeController extends AbstractController
{
    /**
     * Display home page
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        return $this->showProducts();
    }

    public function showProducts():string
    {
        
        $products = ['guitare', 'bass', 'bonjo', 'cithare', 'lyre'];
        return $this->twig->render('home/products.html.twig', ['products' => $products]);
    }
}


