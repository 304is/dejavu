<?php
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php");
	$sql = "
		SELECT  goods.id, goods.name AS goods_name, goods.date, CONCAT (user.surname,' ', user.name,' ', user.patronymic) AS user_name, review.date, review.active, review.comments
		FROM review
		LEFT JOIN user
		ON review.id_user = user.id
		LEFT JOIN goods
		ON review.id_goods = goods.id
	";
	$row = fetchAll($sql);
	?>

	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
			<thead>
					<tr>
						<th>№</th>
						<th>Товар</th> 
						<th>Дата</th>
						<th>ФИО</th>
						<th>Комментарий</th>
						<th>Статус</th>
					</tr>
			</thead>
	<? 
	$i=0;
	foreach ($row as $value) {
	$i++;
	?>
			<tbody align="center">
					<tr>
						<td><?=$i;?></td>
						<td valign="middle"><?=$value["goods_name"]?></td>
						<td><?=gmdate("d.m.Y", $value["date"])?></td>
						<td><?=$value["user_name"]?></td>
						<td><?=$value["comments"]?></td>
						<td><?php if ($value["active"]==1)
						echo '<span class="label label-success">&nbsp;</span>';
						else echo '<span class="label label-danger">&nbsp;</span>';
						?></td>
					</tr>
			</tbody>
		
	<?};?>
	</table>
		</div>

<?php
include ("../template/footer.php"); 
?>
