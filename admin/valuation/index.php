<?php
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php"); 
include ("valuation_select.php");
?>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
			<thead>
					<tr>
						<th>No.</th>
						<th>Пользователь</th>
						<th>Название товара</th>
						<th>Оценка</th>
						<th>Дата</th>
					</tr>
			</thead>
	<? foreach ($valuation_row as $value) { ?>
			<tbody align="center">
					<tr>
						<td><?=$value["id"]?></td>
						<td valign="middle"><?=$value["user_name"]?></td>
						<td><?=$value["goods_name"]?></td>
						<td><?=$value["ball"]?></td>
						<td><?=gmdate("d.m.Y", $value["date"])?></td>
					</tr>
			</tbody>
		
	<?};?>
	</table>
		</div>
<!-- Здесь должен быть Ваш код -->
<?php include ("../template/footer.php"); ?>