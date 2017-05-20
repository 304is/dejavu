<?php
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php");
$sql = "
	SELECT *
	FROM category
";
$row = fetchAll($sql);
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
							<input name="goods_name" type="text" class="form-control" placeholder="Название">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label">Дата:</label>
						<div>
							<input name="date" type="date" class="form-control">
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
						<center><button name="submit" type="submit" class="btn btn-theme">Submit</button></center>
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
if (isset ($_POST["submit"])) {
	$sql = "
		INSERT INTO goods(name, date, description, price, id_category, active)
		VALUES ('$goods_name','$date','$description','$price','$category', '$active')
	";
	$message = InsertRow($sql);
	echo "<center>Добавлена запись с номером " . $message . "</center>"; 
}
include ("../template/footer.php"); ?>