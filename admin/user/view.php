<?php
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php"); 
if (isset($_GET['id']))
{
$id = $_GET['id'];
}
$sql = "SELECT surname, name, patronymic, login, `e-mail`, address, telephone FROM user WHERE id =$id";
$row = fetchOne($sql);
?>
<section class="panel">
	<header class="panel-heading">
			<h2><strong>Профиль</strong></h2>
	</header>
	<div class="panel-body">
		<table cellpadding="0" cellspacing="0" border="0" class='table'>
			<tr><td  width='20%'>Фамилия</td><td><?=$row['surname'] ?></td></tr>
			<tr><td width='20%'>Имя</td><td><?=$row['name']?></td></tr>
			<tr><td width='20%'>Отчество</td><td><?=$row['patronymic']?></td></tr>
			<tr><td width='20%'>Логин</td><td><?=$row['login']?></td></tr>
			<tr><td width='20%'>Эл. почта</td><td><?=$row['e-mail']?></td></tr>
			<tr><td width='20%'>Адрес</td><td><?=$row['address']?></td></tr>
			<tr><td width='20%'>Телефон</td><td><?=$row['telephone']?></td></tr>
		</table>
	</div>
</section>
<?php include ("../template/footer.php"); ?>