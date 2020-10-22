<?php

/*use App\Passage;
use \App\NbPassagePasEntier;
use \App\NbPassageEstNulle;
use \App\TimePasNegatif;

it("Pas de lettre dans le passage." , function()
{
    $nbpassage = new Passage();
    $nbpassage->setNbPassage("null");
})->throws(\Exception::class);

it("Le nombre de passage ne doit pas être négatif." , function ()
{
    $nbpassage = new Passage();
    $nbpassage->setNbPassage(-1);
})->throws(\Exception::class);

it("Le nombre de passage ne doit pas être supérieur à 2." , function ()
{
   $nbpassage = new Passage();
   $nbpassage->setNbPassage(10);
})->throws(\Exception::class);

/*it("Le nombre de passage ne doit comprendre de décimal." , function ()
{
    $nbpassage = new Passage();
    $nbpassage->setNbPassage(8.5);
})->throws(\Exception::class);*/
/*it("Le nombre de passage ne doit comprendre de décimal." , function ()
{
    $nbpassage = new Passage();
    $nbpassage->setNbPassage(8.5);
})->expectException(NbPassagePasEntier::class);

it("Le nombre de passage ne doit pas avoir la valeur nulle." , function()
{
    $nbpassage = new Passage();
    $nbpassage->setNbPassage(null);
})->throws(\Exception::class);*/


/*it("Le nombre de passage ne doit pas avoir la valeur nulle." , function()
{
    $nbpassage = new Passage(1, null);
    $this->assertInOf(1, passage::class);
})->expectException(NbPassageIsNull::class);*/


/*it("Le temps ne doit pas être négatif.", function()  {
   $time = new Passage(-5, 2);
   $this->assertInOf(passage::class, 2);
})->expectException(TimeNotNegatif::class);*/


//namespace Tests;


/*use App\NbPassageEstNulle;
use App\Passage;
use App\nbPassageSup2Inf1Egal0;
use App\nbPassagePasEntier;
use App\TimeNegatif;*/


/*it(
    'vérifie le constructeur',
    function () {
        $passage = new Passage(25, 2);
        $this->assertInstanceOf(passage::class, $passage);
        $this->assertSame(25, $passage->getTime());
        $this->assertSame(2, $passage->getNbPassage());
    }
);*/


/*it("vérifie que le passage n'a pas la valeur nulle.", function ()
    {
        $passage = new Passage(25, null);
        $this->assertInstanceOf(passage::class, $passage);
    }
)->expectException(NbPassageEstNulle::class);

it("Si le nombre de passage est different de 1, 2 et 0 crée une exception.", function ()
    {
        $passage = new Passage(25, 3);
    }
)->expectException(nbPassageSup2Inf1Egal0::class);*/


//** Exception
/*it(
    "Crée une exception si le nombre de passage n'est pas un entier.",
    function () {
        $passage = new Passage(25, 1.9);
    }
)->expectException(nbPassagePasEntier::class);*/

// ********** Time

/*it(
    "Crée une exception si le nombre de passage est négatif.",
    function () {
        $passage = new Passage(-23, 2);
    }
)->expectException(TimeNegatif::class);*/


use App\Passage;

it(
    "Pas de lettre dans le passage.",
    function () {
        $nbpassage = new Passage();
        $nbpassage->setNbPassage("null");
    }
)->throws(\Exception::class);

it(
    "Le nombre de passage ne doit pas être négatif.",
    function () {
        $nbpassage = new Passage();
        $nbpassage->setNbPassage(-1);
    }
)->throws(\Exception::class);

it(
    "Le nombre de passage ne doit pas être supérieur à 2.",
    function () {
        $nbpassage = new Passage();
        $nbpassage->setNbPassage(10);
    }
)->throws(\Exception::class);

it(
    "Le nombre de passage ne doit comprendre de décimal.",
    function () {
        $nbpassage = new Passage();
        $nbpassage->setNbPassage(8.5);
    }
)->throws(\Exception::class);

it(
    "Le nombre de passage ne doit pas avoir la valeur nulle.",
    function () {
        $nbpassage = new Passage();
        $nbpassage->setNbPassage(null);
    }
)->throws(\Exception::class);


