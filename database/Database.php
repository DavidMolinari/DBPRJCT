<?php
class Database{
    private static $conn;
    private function __construct(){}
    public static function connect(){
        if(!empty(self::$conn)){
            return self::$conn;
        }
        try {
            $dbh = new PDO('mysql:host=91.121.155.160;dbname=stmncv4', 'stmncv4', 'p891OfBOYOwepmfc', array(PDO::ATTR_PERSISTENT => true));
            self::$conn = $dbh;
            return $dbh;

        } catch (PDOException $e) {
            print "Error! : " . $e->getMessage() . "<br/>";
            die();
        }
    }
}

?>