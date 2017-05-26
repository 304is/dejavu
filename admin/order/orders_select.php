<?php
$sql = "SELECT content.`id`, user.`name` AS user_name, content.`id_order`, content.`id_goods`, content.`price`, content.`quantity` FROM `content`
LEFT JOIN user
		ON  user.id = content.id_user ";
	$row = fetchAll($sql);
	?>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
			<thead>
					<tr>
						<th>No.</th>
						<th>Пользователь</th>
						<th>Заказ</th>
						<th>Товар</th>
						<th>Цена</th>
						<th>Количество</th>
					</tr>
			</thead>
	<? foreach ($row as $value) { ?>
			<tbody align="center">
					<tr>
						<td><?=$value["id"]?></td>
						<td valign="middle"><?=$value["user_name"]?></td>
						<td><?=$value["id_order"]?></td>
						<td><?=$value["id_goods"]?></td>
						<td><?=$value["price"]?></td>
						<td><?=$value["quantity"]?></td>
						
					</tr>
			</tbody>
		
	<?};?>
	</table>
		</div>
	<?

?>