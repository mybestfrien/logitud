<?php


/*namespace App;


use \App\NbPassagePasEntier;
use \App\NbPassageEstNulle;
use \App\TimePasNegatif;
use Exception;

class Passage
{
    private $time;
    private $nbpassage;

  /* public function __construct($time, $nbPassage)
    {

        $this->setTime($time);

        $this->setNbPassage($nbPassage);
    }*/

    /**
     * ******************************************GETPASSAGE********************************************************
     * @return mixed
     */
    /*public function getNbPassage()
    {
        return $this->nbpassage;
    }

    /**
     * ****************************************SETPASSAGE***************************************************
     * @param mixed $nbpassage
     * @throws Exception
     */
    /*public function setNbPassage($nbpassage): void
    {
        if (preg_match("/[a-z]/i/", $nbpassage))
        {
            throw new Exception("Pas de lettre dans le passage.");
        }
        if ($nbpassage<0)
        {
            throw new Exception("Le nombre de passage ne doit pas être négatif.");
        }
        if ($nbpassage>2)
        {
            throw new Exception("Le nombre de passage ne doit pas être supérieur à 2.");
        }
        if (!is_int($nbpassage))
        {
            throw new NbPassagePasEntier("Le nombre de passage ne doit comprendre de décimal.");
        }
        /*if (!is_int($nbpassage))
        {
            throw new Exception("Le nombre de passage ne doit comprendre de décimal.");
        }*/
        /*if ($nbpassage==null)
        {
            throw new NbPassageEstNulle("Le nombre de passage ne doit pas avoir la valeur nulle.");
        }

        $this->nbpassage = $nbpassage;
    }
/////////////////////////////////////////////////TIME////////////////////////////////////////////////////////////
    /**
     * **********************************************GETTIME********************************************************
     * @return mixed
     */
   /* public function getTime()
    {
        return $this->time;
    }

    /**
     * ******************************************************SETTIME***********************************************
     * @param mixed $time
     * @throws TimePasNegatif
     */
    /*public function setTime($time): void
    {
        if ($time<0)
        {
            throw new TimePasNegatif("Le temps ne doit pas être négatif.");
        }
        $this->time = $time;
    }
}*/


namespace App;


class Passage
{
    private $nbpassage;
    private $time;

    /**
     * ******************************************GETPASSAGE********************************************************
     * @return mixed
     */
    public function getNbPassage()
    {
        return $this->nbpassage;
    }

    /**
     * ****************************************SETPASSAGE***************************************************
     * @param mixed $nbpassage
     * @throws \Exception
     */
    public function setNbPassage($nbpassage): void
    {
        if (preg_match("/[a-z]/i/", $nbpassage)) {
            throw new \Exception("Pas de lettre dans le passage.");
        }
        if ($nbpassage < 0) {
            throw new \Exception("Le nombre de passage ne doit pas être négatif.");
        }
        if ($nbpassage > 2) {
            throw new \Exception("Le nombre de passage ne doit pas être supérieur à 2.");
        }
        if (!is_int($nbpassage)) {
            throw new \Exception("Le nombre de passage ne doit comprendre de décimal.");
        }
        if ($nbpassage == null) {
            throw new \Exception("Le nombre de passage ne doit pas avoir la valeur nulle.");
        }

        $this->nbpassage = $nbpassage;
    }
///////////////////////////////////////////////////TIME////////////////////////////////////////////////////////////

    /**
     * **********************************************GETTIME********************************************************
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * ******************************************************SETTIME***********************************************
     * @param mixed $time
     * @param $nbpassage
     */
    public function setTime($time, $nbpassage): void
    {
        $this->time = $time;
    }


}


