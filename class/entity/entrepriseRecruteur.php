<?php
/**
 * Created by PhpStorm.
 * User: utilisateur
 * Date: 15/03/2019
 * Time: 09:37
 */

class entrepriseRecruteur
{
    private $idRecruteur;
    private $idEntreprise;



    /**
     * @return mixed
     */
    public function getIdRecruteur()
    {
        return $this->idRecruteur;
    }

    /**
     * @param mixed $idRecruteur
     */
    public function setIdRecruteur($idRecruteur)
    {
        $this->idRecruteur = $idRecruteur;
    }

    /**
     * @return mixed
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * @param mixed $idEntreprise
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;
    }
}