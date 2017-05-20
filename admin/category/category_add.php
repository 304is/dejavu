<?php
ob_start();
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php");

?>
<!-- Здесь должен быть Ваш код -->
<div class = "container">
	<div class="row">
		<div class="col-md-push-3 col-md-6">
			<div class="panel-body">
				<form method="post" class="form-horizontal" data-collabel="3" data-alignlabel="left">
					<div class="form-group">
						<label class="control-label">Название  категории:</label>
						<div>
							<input name="name" type="text" class="form-control" placeholder="Название">
						</div>
					</div>
					
					<div class="col-md-offset-3 col-md-9">
						<center><button name="submit" type="submit" class="btn btn-theme">Добавить</button></center>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
$name = $_POST["name"];

if (isset ($_POST["submit"])) {
	$sql = "INSERT INTO `category`(`name`) VALUES ('$name')
	";
	$message = InsertRow($sql);
	echo "<center>Добавлена запись с номером " . $message . "</center>"; 
}
include ("../template/footer.php"); ?>
<?php 
 ob_end_flush();
?>