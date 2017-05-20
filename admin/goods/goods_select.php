<?php
	$sql = "
		SELECT  goods.id, goods.name, goods.date, goods.description, goods.price, category.category_name, goods.active
		FROM goods
		LEFT JOIN category
		ON  category.id = goods.id_category
	";
	$row = fetchAll($sql);
	?>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
			<thead>
					<tr>
						<th>No.</th>
						<th>Название</th>
						<th>Дата</th>
						<th>Описание</th>
						<th>Цена</th>
						<th>Категория</th>
						<th>Активность</th>
						<th>Action</th>
					</tr>
			</thead>
	<? foreach ($row as $value) { ?>
			<tbody align="center">
					<tr>
						<td><?=$value["id"]?></td>
						<td valign="middle"><?=$value["name"]?></td>
						<td><?=$value["date"]?></td>
						<td><?=$value["description"]?></td>
						<td><?=$value["price"]?></td>
						<td><?=$value["category_name"]?></td>
						<td><?
						if ($value["active"] == 1){
						echo "Есть в наличии";
						} else {
							echo "Нет в наличии";
						}
						?></td>
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