<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 09:37
 */
class annonce
{
    private $dateEmbauche ,$duree,$expAttendue,$idPoste,$idRecruteurEntreprise;
<<<<<<< HEAD


=======
>>>>>>> 56e6079207146c4a86ef0a29eac6a77cc387437a

    /**
     * @return mixed
     */
    public function getDateEmbauche()
    {
        return $this->dateEmbauche;
    }

    /**
     * @param mixed $dateEmbauche
     */
    public function setDateEmbauche($dateEmbauche)
    {
        $this->dateEmbauche = $dateEmbauche;
    }

    /**
     * @return mixed
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * @param mixed $duree
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;
    }

    /**
     * @return mixed
     */
    public function getExpAttendue()
    {
        return $this->expAttendue;
    }

    /**
     * @param mixed $expAttendue
     */
    public function setExpAttendue($expAttendue)
    {
        $this->expAttendue = $expAttendue;
    }

    /**
     * @return mixed
     */
    public function getIdPoste()
    {
        return $this->idPoste;
    }

    /**
     * @param mixed $idPoste
     */
    public function setIdPoste($idPoste)
    {
        $this->idPoste = $idPoste;
    }

    /**
     * @return mixed
     */
    public function getIdRecruteurEntreprise()
    {
        return $this->idRecruteurEntreprise;
    }

    /**
     * @param mixed $idRecruteurEntreprise
     */
    public function setIdRecruteurEntreprise($idRecruteurEntreprise)
    {
        $this->idRecruteurEntreprise = $idRecruteurEntreprise;
    }
}