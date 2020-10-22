<?php

use App\Epreuve;


it("Donner un nom à votre épreuve", function ()
{
    $nom = new Epreuve();
    $nom->setNom("Compétition de ski 2020");
    $this->assertSame("Compétition de ski 2020" , $nom->getNom());
});
