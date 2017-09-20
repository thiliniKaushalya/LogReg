<?php

require_once ('LogIn.php');
require_once('session.php');

$user_logout = new login();

if($user_logout->is_loggedin()!="")
	{
		$user_logout->redirect('profile.php');
	}
if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
	$user_logout->logout();
	$user_logout->redirect('index.php');
	}







?>