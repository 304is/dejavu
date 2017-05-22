<?php
include_once("../../lib/secure.php");
include_once("../../lib/db.php");
include ("../template/header.php"); 
$sql = 'SELECT id, surname, name, patronymic, login, `e-mail`, active FROM user';
$data = fetchAll($sql);
?>
<section class="panel">
		<header class="panel-heading">
				<h2><strong>Пользователи</strong></h2>
				<label class="color">Bootstrap Class<em><strong> table-bordered table-striped</strong></em></label>
		</header>
		<div class="panel-body">
			<table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>&#8470;</th>
						<th>Фамилия.</th>
						<th>Имя</th>
						<th>Отчество</th>
						<th>Логин</th>
						<th>Эл. почта</th>
						<th>Статус</th>
						<th width="30%">Действие</th>
					</tr>
				</thead>
				<tbody align="center">
					<?php
					$num = 1;
					foreach ($data as $col){
						echo "<tr>";
						echo "<td>".$num++."</td>";
							echo "<td>".$col['surname']."</td>";
							echo "<td>".$col['name']."</td>";
							echo "<td>".$col['patronymic']."</td>";
							echo "<td>".$col['login']."</td>";
							echo "<td>".$col['e-mail']."</td>";
							if ($col['active'] == 1) echo "<td><span class='label label-success'>&nbsp;</span></td>";
							else echo "<td><span class='label label-danger'>&nbsp;</span></td>";
							$id = $col['id'];
							echo "<td>
							<span class='tooltip-area'>
							<a href='view.php?id=$id' class='btn btn-default btn-sm' title='Профиль'><i class='fa fa-user'></i></a>
							<a href='javascript:void(0)'  class='btn btn-default btn-sm' title='Редактировать'><i class='fa fa-pencil'></i></a>
							</span>
							</td></tr>";
					}
					?>
				</tbody>
			</table>
		</div>
</section>
<?php include ("../template/footer.php"); ?>