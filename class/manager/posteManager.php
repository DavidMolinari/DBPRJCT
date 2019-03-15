<?php
/**
 * Created by PhpStorm.
 * Poste: utilisateur
 * Date: 15/03/2019
 * Time: 11:19
 */

require_once '../database/Database.php';
class posteManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function addPoste(poste $poste) {
        $type = $poste->getType();
        $nom = $poste->getPassword();

        $query = "INSERT INTO POSTE (type, nom) values(
        '".$type."',
        '".$nom."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getPostes() {
        $sth = $this->conn->prepare("SELECT * from POSTE;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deletePoste($id){
        $query = "DELETE FROM POSTE WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updatePosteById($id, poste $poste) {
        $query = "
        UPDATE POSTE
         SET 
         type = '".htmlspecialchars($poste->getType())."',
         nom = '".htmlspecialchars($poste->getNom())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getPoste($id)
    {
        $query = "SELECT * FROM POSTE WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }



}