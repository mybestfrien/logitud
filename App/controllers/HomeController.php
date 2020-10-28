<?php

namespace App\controllers;
use Symfony\Component\HttpFoundation\Request;

class HomeController {
    public function home($request){
        echo "Home";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('index.html.twig');
    }
}