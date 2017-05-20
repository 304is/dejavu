<?php
include_once("../../lib/db.php");
include_once("../../lib/secure.php");
include ("../template/header.php"); ?>
<!-- Здесь должен быть Ваш код -->
<?php
	$sql = "
		SELECT *
		FROM category";
	$row = fetchOne($sql);
?>
<?php include ("../template/footer.php"); ?>