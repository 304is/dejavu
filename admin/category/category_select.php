<?php
	$sql = "SELECT id,name
		FROM category
	";
	$row = fetchAll($sql);
	?>
	<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
			<thead>
					<tr>
						<th>No.</th>
						<th>Название</th>
					</tr>
			</thead>
	<? foreach ($row as $value) { ?>
			<tbody align="center">
					<tr>
						<td><?=$value["id"]?></td>
						<td valign="middle"><?=$value["name"]?></td>
					</tr>
			</tbody>
		
	<?};?>
	</table>
		</div>
	<?

?>