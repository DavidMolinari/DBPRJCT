<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 09:45
 */
class competenceEtudiant
{
    private $idEtudiant,$idCompetence;
<<<<<<< HEAD


=======
>>>>>>> 56e6079207146c4a86ef0a29eac6a77cc387437a

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
    public function getIdCompetence()
    {
        return $this->idCompetence;
    }

    /**
     * @param mixed $idCompetence
     */
    public function setIdCompetence($idCompetence)
    {
        $this->idCompetence = $idCompetence;
    }
}