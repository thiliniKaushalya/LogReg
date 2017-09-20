<?php
session_start();
require_once("LogIn.php");

$login = new login();

if($login->is_loggedin()!="")
{
  $login->redirect('profile.php');
}

if(isset($_POST['btn-login']))
{
 
  $umail = strip_tags($_POST['email']);
  $upass = strip_tags($_POST['password']);
    
  if($login->UserLogin($umail,$upass))
  {
    $login->redirect('profile.php');
    $un= $login->UserLogin($umail,$upass);

  }
  else
  {
    $error = "Wrong Details !";
  } 
}
?>
