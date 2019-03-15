<?php
class Database{
    private static $conn;
    private function __construct(){}
    public static function connect(){
        if(!empty(self::$conn)){
            return self::$conn;
        }
        try {
            $dbh = new PDO('mysql:host=localhost;dbname=dbprjct', 'root', 'root', array(PDO::ATTR_PERSISTENT => true));
            self::$conn = $dbh;
            return $dbh;

        } catch (PDOException $e) {
            print "Error! : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

?>