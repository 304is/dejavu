<?$title='Deja Vu | Аккаунт '; ?>
<?php require_once('header.php'); ?> 
<!--account-->
	<div class="account">
		<div class="container">
			<div class="register">
				<form> 
					<div class="register-top-grid">
						<h3>Личная информация</h3>
						<div class="input">
							<span>ИМЯ<label>*</label></span>
							<input type="text"> 
						</div>
						<div class="input">
							<span>ФАМИЛИЯ<label>*</label></span>
							<input type="text"> 
						</div>
						<div class="input">
							<span>АДРЕС ЭЛЕКТРОННОЙ ПОЧТЫ<label>*</label></span>
							<input type="text"> 
						</div>
						<a class="news-letter" href="#">
							<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>ПОДПИСАТЬСЯ НА РАССЫЛКУ</label>
						</a>
						<div class="clearfix"> </div>
					</div>
				    <div class="register-bottom-grid">
						<h3>Войти информация</h3>
						<div class="input">
							<span>ПАРОЛЬ<label>*</label></span>
							<input type="password">
						</div>
						<div class="input">
							<span>ПОДТВЕРЖДЕНИЕ ПАРОЛЯ<label>*</label></span>
							<input type="password">
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