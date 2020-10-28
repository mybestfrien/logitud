<?php

namespace App\controllers;
class EpreuveController
{

    /**
     * EpreuveController constructor.
     */
    public function epreuve(){
        echo "Epreuve";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('epreuve.html.twig');
    }
}