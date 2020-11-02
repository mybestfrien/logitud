<?php

namespace App\controllers;
class CreationEpreuveController
{

    /**
     * EpreuveController constructor.
     */
    public function creationEpreuve(){
        //echo "Epreuve";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('creation-epreuve.html.twig');
    }
}