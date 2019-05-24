<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 24/05/2019
 * Time: 00:54
 */

class annonce
{
    private $id_annonce;
    private $abstract;
    private $date_embauche;
    private $date_fin;
    private $experience;
    private $id_etudiant;
    private $id_recruteur;
    private $typeContrat;
    private $competences;

    /**
     * @return mixed
     */
    public function getIdAnnonce()
    {
        return $this->id_annonce;
    }

    /**
     * @param mixed $id_annonce
     */
    public function setIdAnnonce($id_annonce)
    {
        $this->id_annonce = $id_annonce;
    }

    /**
     * @return mixed
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param mixed $abstract
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }

    /**
     * @return mixed
     */
    public function getDateEmbauche()
    {
        return $this->date_embauche;
    }

    /**
     * @param mixed $date_embauche
     */
    public function setDateEmbauche($date_embauche)
    {
        $this->date_embauche = $date_embauche;
    }

    /**
     * @return mixed
     */
    public function getDateFin()
    {
        return $this->date_fin;
    }

    /**
     * @param mixed $date_fin
     */
    public function setDateFin($date_fin)
    {
        $this->date_fin = $date_fin;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return mixed
     */
    public function getIdEtudiant()
    {
        return $this->id_etudiant;
    }

    /**
     * @param mixed $id_etudiant
     */
    public function setIdEtudiant($id_etudiant)
    {
        $this->id_etudiant = $id_etudiant;
    }

    /**
     * @return mixed
     */
    public function getIdRecruteur()
    {
        return $this->id_recruteur;
    }

    /**
     * @param mixed $id_recruteur
     */
    public function setIdRecruteur($id_recruteur)
    {
        $this->id_recruteur = $id_recruteur;
    }

    /**
     * @return mixed
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }

    /**
     * @param mixed $typeContrat
     */
    public function setTypeContrat($typeContrat)
    {
        $this->typeContrat = $typeContrat;
    }

    /**
     * @return mixed
     */
    public function getCompetences()
    {
        return $this->competences;
    }

    /**
     * @param mixed $competences
     */
    public function setCompetences($competences)
    {
        $this->competences = $competences;
    }



}