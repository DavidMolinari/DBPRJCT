<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 11:16
 */
class competenceManager
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addCompetence(competence $competence) {
        $nom = $competence->getNom();

        $query = "INSERT INTO `competence` (nom) values(
        '".$nom."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
    public function getCompetence($id)
    {
        $sth = $this->conn->prepare("SELECT * FROM `competence` WHERE `ID` ='".$id."'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function getCompetences()
    {
        $sth = $this->conn->prepare("SELECT * from `competence`;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteCompetence($id)
    {
        $query = "DELETE FROM `competence` WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updateCompetenceById($id, competence $competence) {
        $query = "
        UPDATE USER
         SET 
         nom = '".htmlspecialchars($nom = $competence->getNom())."',
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
}