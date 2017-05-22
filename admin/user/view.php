<?php
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php"); 
if isset(GET['id'])
{
$id = GET['id'];
}
$sql = "SELECT surname, name, patronymic, login, `e-mail`, active FROM user WHERE id =$id";
$data = fetchOne($sql);
					
?>
<?php include ("../template/footer.php"); ?>