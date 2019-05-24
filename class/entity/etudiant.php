<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 24/05/2019
 * Time: 00:38
 */

class etudiant
{
    private $id_etudiant;
    private $facebook;
    private $linkedin;
    private $twitter;
    private $website;
    private $description;
    private $competences;
    private $ecole;

    /**
     * @return mixed
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * @param mixed $ecole
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;
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
    public function getFacebook()
    {
        return $this->facebook;
    }

    /**
     * @param mixed $facebook
     */
    public function setFacebook($facebook)
    {
        $this->facebook = $facebook;
    }

    /**
     * @return mixed
     */
    public function getLinkedin()
    {
        return $this->linkedin;
    }

    /**
     * @param mixed $linkedin
     */
    public function setLinkedin($linkedin)
    {
        $this->linkedin = $linkedin;
    }

    /**
     * @return mixed
     */
    public function getTwitter()
    {
        return $this->twitter;
    }

    /**
     * @param mixed $twitter
     */
    public function setTwitter($twitter)
    {
        $this->twitter = $twitter;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        $this->website = $website;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}