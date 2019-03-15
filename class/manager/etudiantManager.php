<?php
/**
 * Created by PhpStorm.
 * Etudiant: utilisateur
 * Date: 15/03/2019
 * Time: 11:41
 */

require_once '../database/Database.php';
class etudiantManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function addEtudiant(etudiant $etudiant) {

        $prenom = $etudiant->getPrenom();
        $nom = $etudiant->getNom();
        $adresse = $etudiant->getAdresse();
        $ville = $etudiant->getVille();
        $region = $etudiant->getRegion();
        $isMobile = $etudiant->getisMobile();
        $num = $etudiant->getNum();
        $description = $etudiant->getDescription();
        $avatar = $etudiant->getAvatar();
        $idUser = $etudiant->getIdUser();

        $query = "INSERT INTO ETUDIANT (prenom, nom, adresse, ville, region, is_mobile, num, description,avatar,id_user) values(
        '".$prenom."',
        '".$nom."',
        '".$adresse."',
        '".$ville."',
        '".$region."',
        '".$isMobile."',
        '".$num."',
        '".$description."',
        '".$avatar."',
        '".$idUser."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getEtudiants() {
        $sth = $this->conn->prepare("SELECT * from ETUDIANT;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteEtudiant($id){
        $query = "DELETE FROM ETUDIANT WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updateEtudiantById($id, etudiant $etudiant) {
        $query = "
        UPDATE ETUDIANT
         SET 
         prenom = '".htmlspecialchars($etudiant->getPrenom())."',
         nom = '".htmlspecialchars($etudiant->getNom())."',
         adresse = '".htmlspecialchars($etudiant->getAdresse())."',
         ville = '".htmlspecialchars($etudiant->getVille())."',
         region = '".htmlspecialchars($etudiant->getRegion())."',
         is_mobile = '".htmlspecialchars($etudiant->getisMobile())."',
         num = '".htmlspecialchars($etudiant->getNum())."',
         description= '".htmlspecialchars($etudiant->getDescription())."',
         avatar = '".htmlspecialchars($etudiant->getAvatar())."',
         id_user= '".htmlspecialchars($etudiant->getIdUser())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();

    }

    public function getEtudiant($id)
    {
        $query = "SELECT * FROM ETUDIANT WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
}