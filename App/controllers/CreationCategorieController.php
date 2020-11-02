<?php

namespace App\controllers;
class CreationCategorieController
{

    /**
     * EpreuveController constructor.
     */
    public function creationCategorie(){
        //echo "Epreuve";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('creation-categorie.html.twig');
    }
}