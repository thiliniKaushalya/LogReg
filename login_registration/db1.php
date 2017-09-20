

<?php
require_once('2.php'); 
class DB{

    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "w3s";
    //public conn;


    public function __construct(){
        
             $dbcon= new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
           return $dbcon;

    
}
}

?>