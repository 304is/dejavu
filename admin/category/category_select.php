<div class="table-responsive">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
			<thead>
					<tr>
						<th>No.</th>
						<th>Название</th>
						<th>Действие</th>
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
						<td>
							<span class="tooltip-area">
							<a href="javascript:void(0)" class="btn btn-default btn-sm" title="редактировать"><i class="fa fa-pencil"></i></a>
							<a href="javascript:void(0)"  class="btn btn-default btn-sm" title="Удалить"><i class="fa fa-trash-o"></i></a>
							</span>
						</td>
					</tr>
						<? };?>
			</tbody>
		

	</table>
		</div>
	<?

?>