<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 09:46
 */
class diplome
{
    private $id,$idEtudiant,$idEcole,$nbAnnees;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
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