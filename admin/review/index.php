<?php
<<<<<<< 2a24914e8cb263fce920db43bc2a2e36f09a6f29
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
=======
include ("../../lib/db.php");
>>>>>>> 4481b4611c3cb2c39b7a92135256c7db62f00b0e
include ("../template/header.php");
	$sql = "
		SELECT  goods.id, goods.name AS goods_name, goods.date, user.surname, user.name, user.patronymic, review.date, review.active, review.comments
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
						<th>Action</th>
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
						<td><?=$value["surname"]?><?=$value["name"]?><?=$value["patronymic"]?></td>
						<td><?=$value["comments"]?></td>
						<td><?php if ($value["active"]==1)
						echo '<span class="label label-success">&nbsp;</span>';
						else echo '<span class="label label-danger">&nbsp;</span>';
						?></td>
						<td>
							<span class="tooltip-area">
							<a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
							</span>
						</td>
					</tr>
			</tbody>
		
	<?};?>
	</table>
		</div>

<?php
include ("../template/footer.php"); 
?>
