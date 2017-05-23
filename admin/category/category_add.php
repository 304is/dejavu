<?php
ob_start();
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php");
$update_name = "";
if (isset ($_GET['id'])) {
	$sql = "SELECT name FROM category WHERE category.id = {$_GET['id']}";
	$value_row = fetchOne($sql);
	$update_name = $value_row['name'];
	}
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
							<input name="name" type="text" class="form-control" placeholder="Название" value = <?=$update_name?> >
						</div>
					</div>
					
					<div class="col-md-offset-3 col-md-9">
					<input name = "category_id" type = "hidden" value = <?=$_GET['id']?>>
						<center><button name="submit" type="submit" class="btn btn-theme">Добавить</button></center>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
$name = $_POST["name"];
if ( !empty($_POST['category_id']) && isset($_POST['submit']) ) {
	$sql = "
		UPDATE category
		SET name = '$name'
		WHERE id = {$_GET['id']}
	";
	UpdateRow($sql);
	header("Location: index.php");
} else {
	if (isset ($_POST["submit"])) {
	$sql = "INSERT INTO `category`(`name`) VALUES ('$name')
	";
	$message = InsertRow($sql);
	echo "<center>Добавлена запись с номером " . $message . "</center>"; 
};
};




include ("../template/footer.php"); ?>
<?php 
 ob_end_flush();
?>