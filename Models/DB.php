<?php 

class DB{
    private static $hostname = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "class_rank";

    public static $db;

public static function connect(){
    return mysqli_connect(self::$hostname,self::$username,self::$password,self::$database);
}

}

?>
