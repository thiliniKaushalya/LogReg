<?php

include '2.php'; 
include 'db1.php'; 

class Login{

 public function __construct(){

$this->db = new DB();
$this->db = $this->db->__construct();

 }	

public function UserLogin($uemail,$paswrd){

try{
 $stmt = $this->db->prepare('select * from users where Email=:uemail AND Password=:upasswrd ');

$stmt->execute(array(':uemail'=>$uemail,':upasswrd'=>$paswrd));
$row1=$stmt->fetch(PDO::FETCH_ASSOC);
echo $stmt->rowcount();

//$psnew=$stmt->bindParam(':upasswrd', $paswrd);

if($stmt->rowcount()>0){
	   //   $ps=$row1['Password'];
      //    $stmt->bindParam(':upasswrd', $ps);   
             
             //     if( $psnew!=$paswrd){
                       
           //        $url='index.php';
          // header("Location: $url");
       
   $_SESSION['UserId']=$row1['UserId'];
          $userId=$row1['UserId'];
          $userName=$row1['UserName'];
            $stmt->bindParam(':uname',$userName);   
          $url='profile.php';
           header("Location: $url");
       echo ':uname';
           return $userName;
          
}
else{

$url='index.php';
header("Location: $url");
}




}catch(PDOException $e){

echo 'rty';
echo $e->getMessage();

}


}
 public function redirect($url)
   {
       header("Location: $url");
   }

public function logout(){

	session_destroy();
	unset($_SESSION['user_session']);
	return true;
}
public function is_loggedin()
   {
      if(isset($_SESSION['user_session']))
      {
         return true;
      }
   }

}


  ?>