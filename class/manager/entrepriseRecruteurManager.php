<?php
/**
 * Created by PhpStorm.
 * EntrepriseRecruteur: utilisateur
 * Date: 15/03/2019
 * Time: 13:42
 */

require_once '../../database/Database.php';
class entrepriseRecruteurManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function addEntrepriseRecruteur(entrepriseRecruteur $entrepriseRecruteur) {
        $idRecruteur = $entrepriseRecruteur->getIdRecruteur();
        $idEntreprise = $entrepriseRecruteur->getIdEntreprise();

        $query = "INSERT INTO entreprise_recruteur (id_recruteur, id_entreprise) values(
        '".$idRecruteur."',
        '".$idEntreprise."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getEntrepriseRecruteurs() {
        $sth = $this->conn->prepare("SELECT * from entreprise_recruteur;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteEntrepriseRecruteur($id){
        $query = "DELETE FROM entreprise_recruteur WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updateEntrepriseRecruteurById($id, entrepriseRecruteur $entrepriseRecruteur) {
        $query = "
         UPDATE entreprise_recruteur
         SET 
         id_recruteur = '".htmlspecialchars($entrepriseRecruteur->getIdRecruteur())."',
         id_entreprise = '".htmlspecialchars($entrepriseRecruteur->getIdEntreprise())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();

    }

    public function getEntrepriseRecruteur($id)
    {
        $query = "SELECT * FROM entreprise_recruteur WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
}