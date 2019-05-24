<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 24/05/2019
 * Time: 00:51
 */

class ecole
{
    private $cp;
    private $nom;
    private $ville;
    private $id_ecole;
    private $adresse;

    /**
     * @return mixed
     */
    public function getIdEcole()
    {
        return $this->id_ecole;
    }

    /**
     * @param mixed $id_ecole
     */
    public function setIdEcole($id_ecole)
    {
        $this->id_ecole = $id_ecole;
    }

    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return mixed
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * @param mixed $cp
     */
    public function setCp($cp)
    {
        $this->cp = $cp;
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

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

}