<?php
session_start();
	include_once("../../lib/db.php");
	if(isset($_POST["username"]) and isset($_POST["password"])){
		$sql = "
			SELECT id, login, password
			FROM user
			WHERE login = '".$_POST['username']."'";
		$row = fetchOne($sql);
		if ($row) {
			if( password_verify($_POST["password"], $row["password"]) ) {
				$_SESSION['admin'] = $row['id'];
				$return_arr["status"]=1;
			}
			else {
				$return_arr["status"]=0;
			}
		} 
		else {
			$return_arr["status"]=0;
		}
		echo json_encode($return_arr);
		exit();
	}
?>