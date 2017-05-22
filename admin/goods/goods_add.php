<?php
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php");
$update_name = "123";
$update_date = "123";
$update_description = "";
$update_price = "";
$update_category = "";
$update_active = "";
if (isset ($_GET['id'])) {
	$sql = "
		SELECT name, date, description, price, id_category ,active
		FROM goods
		WHERE id = {$_GET['id']}
		
	";
	$row = fetchOne($sql);
	$update_name = $row['name'];
	$update_date = gmdate("d-m-Y", $row["date"]);
	$update_description = $row['description'];
	$update_price = $row['price'];
	$update_category = $row['id'];
	$update_active = $row['active'];
	echo $update_date;
} else {
	$sql = "
		SELECT *
		FROM category
	";
	$row = fetchAll($sql);
}
?>
<!-- Здесь должен быть Ваш код -->
<div class = "container">
	<div class="row">
		<div class="col-md-push-3 col-md-6">
			<div class="panel-body">
				<form method="post" class="form-horizontal" data-collabel="3" data-alignlabel="left">
					<div class="form-group">
						<label class="control-label">Название:</label>
						<div>
							<input name="goods_name" type="text" class="form-control" placeholder="Название" value = <?=$update_name?> >
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Дата:</label>
						<div>
							<input name="date" type="date" class="form-control" value = <?=$update_date?>>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Описание:</label>
						<div>
							<textarea name="description" class="form-control" placeholder="Введите текст..." rows="10"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Цена:</label>
						<div>
							<input name="price" type="text" class="form-control" placeholder="Цена">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" style="text-align: left;">Категория:</label>
						<div class="col-md-9">
							<select name="category" class="form-control">
								<? 
									foreach ($row as $value) { ?>
										<option value = <?=$value['id']?> > <?=$value['name']?> </option>
									<?};
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-3" style="text-align: left;">Наличие:</label>
						<div class="col-md-9">
							<select name="active" class="form-control">
								<option value="1">Есть в наличии</option>
								<option value="2">Нет в наличии</option>
							</select>
						</div>
						<br>
					</div>
					<div class="col-md-offset-3 col-md-9">
					<input name = "goods_id" type = "hidden" value = <?=$_GET['id']?>>
						<center><button name="submit" type="submit" class="btn btn-theme">Добавить</button></center>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<?php 
$date = strtotime($_POST["date"]);
$goods_name = $_POST["goods_name"];
$description = $_POST["description"];
$price = $_POST["price"];
$category = $_POST["category"];
$active = $_POST["active"];
if ( !empty($_POST['goods_id']) && isset($_POST['submit']) ) {
	$sql = "
		UPDATE goods
		SET name = '$goods_name', date = '$date', description = '$description', price = '$price', id_category = '$category', active = '$active'
		WHERE id = {$_GET['id']}
	";
	UpdateRow($sql);
} else {
	if (isset ($_POST["submit"])) {
	$sql = "
		INSERT INTO goods(name, date, description, price, id_category, active)
		VALUES ('$goods_name','$date','$description','$price','$category', '$active')
	";
	$message = InsertRow($sql);
	echo "<center>Добавлена запись с номером " . $message . "</center>"; 
};
};

include ("../template/footer.php"); ?>