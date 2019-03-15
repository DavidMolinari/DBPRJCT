<?php
/**
 * Created by PhpStorm.
 * User: utilisateur
 * Date: 15/03/2019
 * Time: 10:54
 */

class recruteurManager
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addRecruteur(recruteur $recruteur) {
        $prenom = $recruteur->getPrenom();
        $nom = $recruteur->getNom();
        $num = $recruteur->getNum();
        $idUser = $recruteur->getIdUser();

        $query = "INSERT INTO RECRUTEUR (prenom, nom, num,id_user) values(
        '".$prenom."',
        '".$nom."',
        '".$num."',
        '".$idUser."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getRecruteurs() {
        $sth = $this->conn->prepare("SELECT * from RECRUTEUR;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteRecruteur($id){
        $query = "DELETE FROM RECRUTEUR WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updateRecruteurById($id, recruteur $recruteur) {
        $query = "
        UPDATE RECRUTEUR
         SET 
         prenom = '".htmlspecialchars($recruteur->getPrenom())."',
         nom = '".htmlspecialchars($recruteur->getNom())."',
         num = '".htmlspecialchars($recruteur->getNum())."',
         id_user = '".htmlspecialchars($recruteur->getIdUser())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();

    }

    public function getRecruteur($id)
    {
        $query = "SELECT * FROM RECRUTEUR WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
}