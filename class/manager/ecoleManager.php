<?php
/**
 * Created by PhpStorm.
 * User: Adrian
 * Date: 15/03/2019
 * Time: 11:45
 */
class ecoleManager
{

    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addEcole(ecole $ecole)
    {
        $nom = $ecole->getNom();
        $specialite  = $ecole->getSpecialite();
        $todelete = $ecole->getTodelete();


        $query = "
        INSERT INTO `ecole` (nom, specialite, todelete)
        values(
        '".$nom."',
        '".$specialite."',
        '".$todelete."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getEcole($id)
    {
        $sth = $this->conn->prepare("SELECT * FROM `ecole` WHERE `ID` ='".$id."'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
    public function getEcoles()
    {
        $sth = $this->conn->prepare("SELECT * from `ecole`;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteEcole($id)
    {
        $query = "DELETE FROM `ecole` WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updateEcoleById($id, ecole $ecole) {
        $query = "
        UPDATE USER
         SET 
         nom = '".htmlspecialchars($nom = $ecole->getNom())."',
         specialite = '".htmlspecialchars($specialite  = $ecole->getSpecialite())."',
         todelete = '".htmlspecialchars($todelete = $ecole->getTodelete())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

}