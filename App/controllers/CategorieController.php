<?php

namespace App\controllers;
class CategorieController
{

    /**
     * EpreuveController constructor.
     */
    public function categorie(){
        echo "Epreuve";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('categorie.html.twig');
    }
}