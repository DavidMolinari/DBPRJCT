<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/database/Database.php';

class userManager
{
    private $conn;
    public function __construct()
    {
        $this->conn = Database::connect();
    }

    public function getUsers()
    {
        $sth = $this->conn->prepare("SELECT * from user;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteUser($id)
    {
        $query = "DELETE FROM user WHERE id_user = " . $id;
        $sth = $this->conn->prepare($query);
        $sth->execute();
        $sth->fetch();
    }


    public function updateUserById($id, user $user)
    {
        $query = "
        UPDATE user
         SET 
         email = '" . htmlspecialchars($user->getEmail()) . "',
         password = '" . htmlspecialchars($user->getPassword()) . "',
         prenom = '" . htmlspecialchars($user->getPrenom()) . "',
         nom = '" . htmlspecialchars($user->getNom()) . "',
         sexe = '" . htmlspecialchars($user->getSexe()) . "',
         tel = '" . htmlspecialchars($user->getTel()) . "',
         adresse = '" . htmlspecialchars($user->getAdresse()) . "',
         ville = '" . htmlspecialchars($user->getVille()) . "',
         cp = '" . htmlspecialchars($user->getCp()) . "',
         is_admin = '" . htmlspecialchars($user->getisAdmin()) . "'
         WHERE id = " . htmlspecialchars($id) . "
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getUser($id)
    {
        $query = "SELECT * FROM user WHERE id_user = '" . $id . "'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function auth($email, $pwd)
    {
        $query = "SELECT id_user FROM user WHERE email = '" . $email . "' AND password = '" . $pwd . "'";
        $sth = $this->conn->prepare($query);
        $res = $sth->execute();
        $row = $sth->fetch(PDO::FETCH_ASSOC);
        if ($row) return true;
        return false;
    }


    public function addUser(user $user)
    {
        $email = $user->getEmail();
        $password = $user->getPassword();
        $adresse = $user->getAdresse();
        $ville = $user->getVille();
        $cp = $user->getCp();
        $tel = $user->getTel();
        $prenom = $user->getPrenom();
        $nom = $user->getNom();
        $sexe = $user->getSexe();
        $is_admin = $user->getisAdmin();

        $query = "
        INSERT INTO USER(email, password, nom, prenom, adresse, cp, ville, sexe, tel, is_admin, register_date)
        values(
        '" . $email . "',
        '" . $password . "',
        '" . $nom . "',
        '" . $prenom . "',
        '" . $adresse . "',
        '" . $cp . "',
        '" . $ville . "',
        '" . $sexe . "',
        '" . $tel . "',
        '" . $is_admin . "',
        '" . date('Y-m-d G:i:s') . "'
        )";

        $sth = $this->conn->prepare($query);
        $res = $sth->execute();
        echo '<script type="text/javascript"> window.open("../../index.php","_self");</script>';

    }

}