<?php
/**
 * Created by PhpStorm.
 * User: utilisateur
 * Date: 15/03/2019
 * Time: 09:46
 */

class poste
{

    private $type;
    private $nom;



    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
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