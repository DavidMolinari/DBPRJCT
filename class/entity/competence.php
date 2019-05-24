<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 24/05/2019
 * Time: 00:53
 */

class competence
{
    private $id_competence;
    private $nom;

    /**
     * @return mixed
     */
    public function getIdCompetence()
    {
        return $this->id_competence;
    }

    /**
     * @param mixed $id_competence
     */
    public function setIdCompetence($id_competence)
    {
        $this->id_competence = $id_competence;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

}