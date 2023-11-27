<?php
   include("session.php");
   
	unset($_SESSION["loggedin"]);
	unset($_SESSION["login_user"]);
	unset($_SESSION["is_admin"]);
	header("location:index.php");
?>