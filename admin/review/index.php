<?php
include ("../template/header.php");
include ("../template/footer.php"); 
?>
<?php
	$sql = "
		SELECT  goods.id, goods.name AS goods_name, goods.date, user.lastname, user.name, user.patronymic, review.date, review.active
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
						<th>No.</th>
						<th>Товар</th>
						<th>ФИО</th>
						<th>Комментарии</th>
						<th>Дата</th>
						<th>Action</th>
					</tr>
			</thead>
	<? foreach ($row as $value) { ?>
			<tbody align="center">
					<tr>
						<td><?=$value["id"]?></td>
						<td valign="middle"><?=$value["goods_name"]?></td>
						<td><?=gmdate("d.m.Y", $value["review.date"])?></td>
						<td><?=$value["lastname"]?></td>
						<td><?=$value["name"]?></td>
						<td><?=$value["patronymic"]?></td> 
						<td><?=$value["review"]?></td>
						<td>
							<span class="tooltip-area">
							<a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
							<a href="javascript:void(0)"  class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
							</span>
						</td>
					</tr>
			</tbody>
		
	<?};?>
	</table>
		</div>
	<?

?>