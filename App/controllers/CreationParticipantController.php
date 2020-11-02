<?php

namespace App\controllers;
use Symfony\Component\HttpFoundation\Request;

class CreationParticipantController
{

    /**
     * CreationParticipantController.
     */
//    public function creationParticipant(){
//        //echo "Participant";
//    }
    public function TwigTest() {
        $twigtest = new ConfigTwig();
        echo $twigtest->twig->render('creation-participant.html.twig');
    }
    public function CreationParticipant(Request $request) {
        dd($request);
    }
}
