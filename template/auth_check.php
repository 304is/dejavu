<?php
session_start();
include_once("../lib/db.php");
	if (isset($_POST['login'])) {
		$user_data_query = "
			SELECT id, password, CONCAT(name,' ', surname) AS user_name
			FROM user
			WHERE login = '{$_POST['username']}'
		";
		$user_data = fetchOne($user_data_query);
		if ($_POST['password'] == $user_data['password']) {
			$_SESSION['user_id'] = $user_data['id'];
			$_SESSION['user_name'] = $user_data['user_name'];
			header("location: index.php");
		}
		else {
			header("location: index.php");
		};
	} 
	if (isset($_POST['logout'])) {
		if($_SESSION['user_id']) {
		session_destroy();
		header("location: index.php");
	}	else {
		header("location: index.php");
	};
	};

