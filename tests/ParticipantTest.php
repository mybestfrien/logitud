<?php

use App\Participant;

use App\PasDeNbPrenom;

use App\passage;

use function PHPUnit\Framework\assertSame;

it("Ajouter un participant", function ()
{
    $nom = new Participant();
    $nom->setNom("Parmentier");
    $this->assertSame("Parmentier" , $nom->getNom());
});

it("Faire une exception quand le prénom a un chiffre" , function()
{
    $prenom = new Participant();
    $prenom->setPrenom("Mc45");
})->throws(\Exception::class);



it("Si le prénom contient un nombre faire une exception sinon donner la bonne valeur" , function()
{
    $participant = new Participant();
    $participant->setPrenom("Mc45");

})->throws(\Exception::class);

it("Si le nom contient un nombre faire une exception sinon donner la bonne valeur" , function()
{
    $participant = new Participant();
    $participant->setNom("Mc45");

})->throws(\Exception::class);

/*$prenom = "Jannick";
$nom = "PARMENTIER";
it(
    'vérifie le constructeur', function () use ($nom, $prenom) {
        $passage = new Participant("PARMENTIER", "Jannick");
        $this->assertInstanceOf($nom, participant::class);
        $this->assertSame("PARMENTIER", $nom->getNom());
        $this->assertSame("Jannick", $prenom->getPrenom());
    }
);
$nom = "PARMENTIER";
/*it("Si le prénom contient un nombre.", function() use ($nom) {
    $participant = new Participant("PARMENTIER","Mc45");
    $this->assertInstanceOf($nom, passage::class);
})*///->expectException(PasDeNbPrenom::class);*/