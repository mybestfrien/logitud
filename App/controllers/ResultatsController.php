<?php

namespace App\controllers;
class ResultatsController
{

    /**
     * ResultatsController constructor.
     */
    public function resultats(){
        //echo "Résultats";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('resultats.html.twig');
    }
}