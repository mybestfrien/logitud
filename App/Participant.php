<?php


namespace App;


use PHPUnit\Util\Exception;

use function PHPUnit\Framework\throwException;

class Participant
{


        private $nom;
        private $prenom;

    /**
     * SETNOM
     * @param mixed $nom
     * @throws \Exception
     */

   public function setNom($nom): void
    {
        if (preg_match("/[0-9]/", $nom)) {
            throw new \Exception("Pas de nombre dans le nom.");
        }
        $this->nom=$nom;
    }

    /**
     * GETNOM
     * @return mixed
     */
   public function getNom()
    {
        return $this->nom;
    }


    /////////////////////////////////////////////PRENOM////////////////////////////////////////
    /**
     * GETPRENOM
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;

    }

    /**
     * SETPRENOM
     * @param mixed $prenom
     * @throws \Exception
     */
    public function setPrenom($prenom): void
    {
        if (preg_match("/[0-9]/", $prenom)) {
            throw new \Exception("Pas de nombre dans le prénom.");
        }
        $this->prenom=$prenom;
    }



}
/*class Participant {
    private $nom;
    private $prenom;

    ////////////////////////////////////////////CONSTRUCTOR////////////////////////////////////////////////

    public function __construct($nom, $prenom)
    {
        $this->setNom($nom);

        $this->setPrenom($prenom);
    }

    //////////////////////////////////////////////////////SET///////////////////////////////////////////////

    /**
     * @param mixed $prenom
     * @throws \Exception
     */
    /*public function setPrenom($prenom): void
    {
        if (preg_match("/[0-9]/", $prenom)) {
            throw new PasDeNbPrenom("Pas de nombre dans le prénom.");
        }
        $this->prenom = $prenom;
    }*/

    /**
     * @param mixed $nom
     */
    /*public function setNom($nom): void
    {
        $this->nom = $nom;
    }*/

    /////////////////////////////////////GET///////////////////////////////////////////////
    /**
     * @return mixed
     */
    /*public function getPrenom()
    {
        return $this->prenom;
    }*/
    /**
     * @return mixed
     */
   /* public function getNom()
    {
        return $this->nom;
    }


}*/