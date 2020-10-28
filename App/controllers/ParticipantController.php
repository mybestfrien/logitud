<?php

namespace App\controllers;
class ParticipantController
{

    /**
     * ParticipantController constructor.
     */
    public function participant(){
        echo "Participant";
    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('participant.html.twig');
    }
}