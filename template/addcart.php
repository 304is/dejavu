<?
session_start();
include_once("../lib/db.php");
if (isset ($_POST["submit"])) {
$row = fetchOne("SELECT id,name,price FROM goods where id=".$_POST["goods_id"]);

$categoryuser_id = $_SESSION["user_id"];
$goods_id = $_POST["goods_id"];
$quantity = $_POST["quantity"];

	$sql = "INSERT INTO `basket`(`id_user`, `id_goods`, `quantity`) VALUES ('$categoryuser_id','$goods_id','$quantity')";
	InsertRow($sql);
header("Location: index.php");
};
?>	


