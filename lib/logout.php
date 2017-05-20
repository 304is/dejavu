<?php 
include_once("../lib/secure.php");

session_unset(); 

session_destroy(); 

header('location: /admin/auth/login.php');

?>