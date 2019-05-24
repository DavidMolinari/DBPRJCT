<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 24/05/2019
 * Time: 00:46
 */

class recruteur
{
    private $id_recruteur;
    private $entreprise;

    /**
     * @return mixed
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * @param mixed $entreprise
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;
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

}