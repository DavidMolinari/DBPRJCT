<?php
/**
 * Created by PhpStorm.
 * User: utilisateur
 * Date: 15/03/2019
 * Time: 10:23
 */

class userManager
{
    private $conn;
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function addUser(user $user) {
        $login = $user->getLogin();
        $password = $user->getPassword();
        $registerDate = $user->getRegisterDate();

        $query = "INSERT INTO USER (login, password, registerDate) values(
        '".$login."',
        '".$password."',
        '".$registerDate."')";

        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function getUsers() {
        $sth = $this->conn->prepare("SELECT * from USER;");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function deleteUser($id){
        $query = "DELETE FROM USER WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }

    public function updateUserById($id, user $user) {
        $query = "
        UPDATE USER
         SET 
         login = '".htmlspecialchars($user->getLogin())."',
         password = '".htmlspecialchars($user->getPassword())."',
         registerDate = '".htmlspecialchars($user->getRegisterDate())."'
         WHERE id = ".htmlspecialchars($id)."
        ";

        $sth = $this->conn->prepare($query);
        $sth->execute();

    }

    public function getUser($id)
    {
        $query = "SELECT * FROM USER WHERE ID = '".$id."'";
        $sth = $this->conn->prepare($query);
        $sth->execute();
    }



}