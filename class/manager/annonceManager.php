<?php
/**
 * Created by PhpStorm.
 * User: Davvm
 * Date: 24/05/2019
 * Time: 00:59
 */
require_once $_SERVER['DOCUMENT_ROOT'] . '/DBPRJCT/database/Database.php';

class annonceManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function getAnnoncesRecruteurs()
    {

        $query = "
          SELECT * from ANNONCE 
          INNER JOIN recruteur on ANNONCE.id_recruteur = recruteur.id_recruteur
          INNER JOIN USER ON RECRUTEUR.id_user = USER.id_user;
          ";
        $sth = $this->conn->prepare($query);
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }
}