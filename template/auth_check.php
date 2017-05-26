<?php
	include_once("../lib/db.php");
	$user_data_query = "
		SELECT id, login, password
		FROM user
		WHERE login = {$_POST['username']}
	";
	fetchOne($user_data_query);
	