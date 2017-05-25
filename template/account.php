<?$title='Deja Vu | Аккаунт '; ?>
<?php 
require_once('header.php'); 
include_once("../lib/db.php");
?> 
<!--account-->
	<div class="account">
		<div class="container">
			<div class="register">
				<form method = "post"> 
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
							<input type="text" name="adress"> 
						</div>
						<div class="input">
							<span>ТЕЛЕФОН<label>*</label></span>
							<input type="text" name="telephone"> 
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
							<input type="password" name="password_verify">
						 </div>
						 	<div class="register-but">
					   <input name = "submit" type="submit" value="Отправить">
					   <div class="clearfix"> </div>
				</div>
					</div>
				</form>
				<div class="clearfix"> </div>

			</div>
	    </div>
	</div>
	<!--//account-->
<?php 
	require_once('footer.php');
	if (isset($_POST['submit'])) {
		$surname = $_POST['surname'];
		$name = $_POST['name'];
		$patronymic = $_POST['patronymic'];
		$login = $_POST['login'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$telephone = $_POST['telephone'];
		$password = $_POST['password'];
		$password_verify = $_POST['password_verify'];
		$role = 4;
		$user_hash = 123;
		$user_ip = 123;
		$reg_date = 123;
		$registration_query = "
			INSERT INTO user(surname, name, patronymic, login, password, e-mail, address, telephone, reg_date, id_role, user_hash, user_ip)
			VALUES ('$surname','$name','$patronymic',$login','$password','$email','$address','$telephone','$reg_date','$role','$user_hash','$user_ip')
		";
		if ($password == $password_verify){
			InsertRow($registration_query);
		} else {
			echo "Пароли не совпадают.";
		}
	};
?>