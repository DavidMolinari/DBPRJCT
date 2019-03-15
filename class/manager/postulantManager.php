<?php
/**
 * Created by PhpStorm.
 * Postulant: utilisateur
 * Date: 15/03/2019
 * Time: 11:15
 */

require_once '../../database/Database.php';
class postulantManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function addPostulant(postulant $postulant) {
        $idEtudiant = $postulant->getIdEtudiant();
        $idAnnonce = $postulant->getIdAnnonce();

        $query = "INSERT INTO POSTULANT (id_etudiant, id_annonce) values(
        '".$idEtudiant."',
        '".$idAnnonce."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getPostulants() {
        $sth = $this->conn->prepare("SELECT * from POSTULANT;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deletePostulant($id){
        $query = "DELETE FROM POSTULANT WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updatePostulantById($id, postulant $postulant) {
        $query = "
        UPDATE POSTULANT
         SET 
         id_etudiant = '".htmlspecialchars($postulant->getIdEtudiant())."',
         id_annonce = '".htmlspecialchars($postulant->getIdAnnonce())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();

    }

    public function getPostulant($id)
    {
        $query = "SELECT * FROM POSTULANT WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }



}