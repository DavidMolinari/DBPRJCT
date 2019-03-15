<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 11:23
 */
class competenceEtudiantManager
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addCompetenceEtudiant(competenceEtudiant $competenceEtudiant)
    {
        $idEtudiant = $competenceEtudiant->getIdEtudiant();
        $idCompetence  = $competenceEtudiant->getIdCompetence();


        $query = "
        INSERT INTO `competence_etudiant` (idEtudiant ,idCompetence)
        values(
        '".$idEtudiant."',
        '".$idCompetence."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getCompetenceEtudiant($id)
    {
        $sth = $this->conn->prepare("SELECT * FROM `competence_etudiant` WHERE `ID` ='".$id."'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function getCompetenceEtudiants()
    {
        $sth = $this->conn->prepare("SELECT * FROM `competence_etudiant`");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteCompetenceEtudiants($id)
    {
        $query = "DELETE FROM `competence_etudiant` WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updateCompetenceEtudiantsById($id, competenceEtudiant $competenceEtudiant) {
        $query = "
        UPDATE USER
         SET 
         idEtudiant = '".htmlspecialchars($idEtudiant = $competenceEtudiant->getIdEtudiant())."',
         idCompetence = '".htmlspecialchars($idCompetence  = $competenceEtudiant->getIdCompetence())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

}