<?php
 include 'db1.php'; 
session_start();

echo ' You are logged in ';
$userid= $_SESSION['UserId'];
 class Login1{

 public function __construct(){

$this->db = new DB();
$this->db = $this->db->__construct();

 }	

public function retriveDetails(){
$userid= $_SESSION['UserId'];
$stmt = $this->db->prepare("SELECT * FROM users WHERE UserId = :uid");
$stmt->execute(array(':uid'=>$userid));
$row1=$stmt->fetch(PDO::FETCH_ASSOC);

 $userName=$row1['UserName'];
  $stmt->bindParam(':uid',$userid);  
 $stmt->bindParam(':uname',$userName);  
return $userName;


}
}

$l=new Login1();
$m=$l->retriveDetails();


?>
<html>

<head>


</head>


<body>

<div class="right">
	<p><?php echo $m;?></p>
     <label><a href="logout.php?logout=true"><i class="glyphicon glyphicon-log-out"></i> logout</a></label>
    </div>


</body>






</html>
