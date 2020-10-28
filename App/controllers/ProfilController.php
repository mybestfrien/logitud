<?php

namespace App\controllers;
class ProfilController
{

    /**
     * ProfilController constructor.
     */
    public function profil(){
        echo "Profil";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('profil.html.twig');
    }
}