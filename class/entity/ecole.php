<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 09:47
 */
class ecole
{
    private $nom,$specialite,$todelete;
<<<<<<< HEAD


=======
>>>>>>> 56e6079207146c4a86ef0a29eac6a77cc387437a

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
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * @param mixed $specialite
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;
    }

    /**
     * @return mixed
     */
    public function getTodelete()
    {
        return $this->todelete;
    }

    /**
     * @param mixed $todelete
     */
    public function setTodelete($todelete)
    {
        $this->todelete = $todelete;
    }
}