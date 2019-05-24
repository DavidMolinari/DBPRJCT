<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 24/05/2019
 * Time: 00:59
 */

class ecoleManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
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
	
	    public function addEcole(ecole $ecole)
    {
       
	    $cp=$ecole->getCp();
		$nom=$ecole->getNom();
		$ville=$ecole->getVille();
		$id_ecole=$ecole->getIdEcole();
		$adresse=$ecole->getAdresse();

        $query = "
        INSERT INTO `ecole` (cp, nom, ville,id_ecole,adresse)
        values(
        '".$cp."',
        '".$nom."',
        '".$ville."',
		'".$id_ecole."',
		'".$adresse."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
	
     public function deleteEcole($id)
    {
        $query = "DELETE FROM `ecole` WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }
	
	public function updateEcoleById($id, ecole $ecole) 
	{
		$query = "
		UPDATE USER
		 SET 
		 cp = '".htmlspecialchars($cp = $ecole->getCp())."',
		 nom = '".htmlspecialchars($nom  = $ecole->getNom())."',
		 ville = '".htmlspecialchars($ville = $ecole->getVille())."',
		 id_ecole = '".htmlspecialchars($id_ecole = $ecole->getIdEcole())."',
		 adresse = '".htmlspecialchars($adresse = $ecole->getAdresse())."'
		 WHERE id = ".htmlspecialchars($id)."
		";

		$sth = $this->conn->prepare($query);
		$sth->execute();
    }
}