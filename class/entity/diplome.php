<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 09:46
 */
class diplome
{
    private $idEtudiant,$idEcole,$nbAnnees;

<<<<<<< HEAD


    /**
=======
     /**
>>>>>>> 56e6079207146c4a86ef0a29eac6a77cc387437a
     * @return mixed
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    /**
     * @param mixed $idEtudiant
     */
    public function setIdEtudiant($idEtudiant)
    {
        $this->idEtudiant = $idEtudiant;
    }

    /**
     * @return mixed
     */
    public function getIdEcole()
    {
        return $this->idEcole;
    }

    /**
     * @param mixed $idEcole
     */
    public function setIdEcole($idEcole)
    {
        $this->idEcole = $idEcole;
    }

    /**
     * @return mixed
     */
    public function getNbAnnees()
    {
        return $this->nbAnnees;
    }

    /**
     * @param mixed $nbAnnees
     */
    public function setNbAnnees($nbAnnees)
    {
        $this->nbAnnees = $nbAnnees;
    }
}