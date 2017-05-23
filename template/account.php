<?$title='Deja Vu | Аккаунт '; ?>
<?php 
require_once('header.php'); 
include_once("../lib/db.php");
$surname = "";
$name = "";
$patronymic = "";
$login = "";
$email = "";
$address = "";
$telephone = "";
?> 
<!--account-->
	<div class="account">
		<div class="container">
			<div class="register">
				<form> 
					<div class="register-top-grid">
						<h3>Личная информация</h3>
						<div class="input">
							<span>ФАМИЛИЯ<label>*</label></span>
							<input type="text" name="surname"> 
						</div>
						<div class="input">
							<span>ИМЯ<label>*</label></span>
							<input type="text" name="name"> 
						</div>
						<div class="input">
							<span>ОТЧЕСТВО<label>*</label></span>
							<input type="text" name="patronymic"> 
						</div>
						<div class="input">
							<span>ЭЛЕКТРОННАЯ ПОЧТА<label>*</label></span>
							<input type="text" name="email"> 
						</div>
						<div class="input">
							<span>АДРЕС<label>*</label></span>
							<input type="text" name="email"> 
						</div>
						<div class="input">
							<span>ТЕЛЕФОН<label>*</label></span>
							<input type="text" name="email"> 
						</div>
						<div class="clearfix"> </div>
					</div>
				    <div class="register-bottom-grid">
						<h3>Данные для входа</h3>
						<div class="input">
							<span>ЛОГИН<label>*</label></span>
							<input type="text" name="login">
						</div>
						<div class="input">
							<span>ПАРОЛЬ<label>*</label></span>
							<input type="password" name="password">
						</div>
						<div class="input">
							<span>ПОДТВЕРЖДЕНИЕ ПАРОЛЯ<label>*</label></span>
							<input type="password" name="password">
						 </div>
					</div>
				</form>
				<div class="clearfix"> </div>
				<div class="register-but">
				   <form>
					   <input type="submit" value="Отправить">
					   <div class="clearfix"> </div>
				   </form>
				</div>
			</div>
	    </div>
	</div>
	<!--//account-->
<?php require_once('footer.php'); ?> 