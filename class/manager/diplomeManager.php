<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 11:33
 */
class diplomeManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function addDiplome(diplome $diplome)
    {
        $idEtudiant = $diplome->getIdEtudiant();
        $idEcole  = $diplome->getIdEcole();
        $nbAnnees = $diplome->getNbAnnees();

        $query = "
        INSERT INTO `diplome` (idEtudiant ,idEcole,nbAnnees)
        values(
        '".$idEtudiant."',
        '".$idEcole."',
        '".$nbAnnees."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getDiplome($id)
    {
        $sth = $this->conn->prepare("SELECT * FROM `diplome` WHERE `ID` ='".$id."'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getDiplomes()
    {
        $sth = $this->conn->prepare("SELECT * from `diplome`;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteDiplome($id)
    {
        $query = "DELETE FROM `diplome` WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updateDiplomeById($id, diplome $diplome) {

        $query = "
        UPDATE USER
         SET 
         idEtudiant = '".htmlspecialchars($idEtudiant = $diplome->getDateEmbauche())."',
         idEcole = '".htmlspecialchars($idEcole  = $diplome->getDuree())."',
         nbAnnees = '".htmlspecialchars($nbAnnees = $diplome->getExpAttendue())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
}