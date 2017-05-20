<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
			<thead>
					<tr>
						<th>No.</th>
						<th>Название</th>
					</tr>
			</thead>

			<tbody align="center">
			<? 
$sql = "SELECT id,name FROM category ";			
$row = fetchAll($sql);			
			foreach ($row as $value){ ?>
					<tr>
						<td><?=$value["id"]?></td>
						<td valign="middle"><?=$value["name"]?></td>
					</tr>
						<? };?>
			</tbody>
		

	</table>
		</div>
	<?

?>