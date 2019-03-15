<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 13:33
 */
require_once '../../database/Database.php';
class entrepriseManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function addEntreprise(entreprise $entreprise)
    {
        $nom = $entreprise->getNom();
        $secteur  = $entreprise->getSecteur();


        $query = "
        INSERT INTO `entreprise` (nom ,secteur)
        values(
        '".$nom."',
        '".$secteur."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getEntreprise($id)
    {
        $sth = $this->conn->prepare("SELECT * FROM `entreprise` WHERE `ID` ='".$id."'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function getEntreprises()
    {
        $sth = $this->conn->prepare("SELECT * from `entreprise`;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteEntreprise($id)
    {
        $query = "DELETE FROM `entreprise` WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
    public function updateEntrepriseById($id, entreprise $entreprise) {
        $query = "
        UPDATE USER
         SET 
         nom = '".htmlspecialchars($nom = $entreprise->getNom())."',
         secteur = '".htmlspecialchars( $secteur  = $entreprise->getSecteur())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
}