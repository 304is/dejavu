<?php
include_once("../../lib/secure.php");
include ("../template/header.php"); ?>
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
																								<th>Ф.И.О.</th>
																								<th>Логин</th>
																								<th>Эл. почта</th>
																								<th>Статус</th>
																								<th width="30%">Action</th>
																				</tr>
																		</thead>
																		<tbody align="center">
																				<tr>
																								<td>1</td>
																								<td valign="middle">Sander</td>
																								<td>asylzhan1997</td>
																								<td>example@demo.com</td>
																								<td><span class="label label-success">&nbsp;</span></td>
																								<td>
																									<span class="tooltip-area">
																									<a href="javascript:void(0)" class="btn btn-default btn-sm" title="Edit"><i class="fa fa-pencil"></i></a>
																									<a href="javascript:void(0)"  class="btn btn-default btn-sm" title="Delete"><i class="fa fa-trash-o"></i></a>
																									</span>
																								</td>
																				</tr>
																		</tbody>
																</table>
												</div>
										</section>
<?php include ("../template/footer.php"); ?>