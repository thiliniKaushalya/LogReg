<?php

  require_once('2.php'); 
  include 'db1.php'; 
class register {

Private $db;

 public function __construct(){

$this->db = new DB();
$this->db = $this->db->__construct();

 

 }	

public function register1(){



       
 $developer = new WebDeveloper($_POST["username"],$_POST["email"],$_POST["phoneno"],$_POST["password"],$_POST["confirmpassword"]);
  //$conn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName, $this->dbUsername, $this->dbPassword);
    //            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $devname= $developer->getName();
$devemail= $developer->getemail(); 
$devphno=$developer->getphoneno();
 $devpaswrd=$developer->getps();
 $devconpaswrd=$developer->getconps();

if($devpaswrd==$devconpaswrd){

   $stmtcheck= $this->db->prepare('select Email from users where Email= :uemail');
   $stmtcheck->bindParam(':uemail', $devemail);
   $stmtcheck->execute();

   if($stmtcheck->rowCount()>0){
    $url='index.html';
header("Location: $url");
   }
   else

   {

 try{
 //$sql = "INSERT INTO users (UserName,Email,PhoneNumber) VALUES ($devname,$devemail,$devphno)";
   $stmt = $this->db->prepare('INSERT INTO users (UserName,Email,PhoneNumber,Password) VALUES (:uname,:ujob,:upic,:upaswrd)');
 
   $stmt->bindParam(':uname', $devname);
   $stmt->bindParam(':ujob',$devemail);
   $stmt->bindParam(':upic',$devphno);
    $stmt->bindParam(':upaswrd',$devpaswrd);


    // use exec() because no results are returned

$stmt->execute();
$url='profile.php';
header("Location: $url");
   }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
  }
  }
else{
$url='index.html';
header("Location: $url");

}

}
}

 $register=new register();  

 $register->register1();

?>