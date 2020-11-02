<?php

namespace App\controllers;
class CreationProfilController
{

    /**
     * EpreuveController constructor.
     */
    public function creationProfil(){
        //echo "Epreuve";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('creation-profil.html.twig');
    }
}