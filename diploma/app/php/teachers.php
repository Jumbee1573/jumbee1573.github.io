<? 
	require_once dirname( __FILE__ ) . '/authorization/teachers-authorization.php';
	require_once dirname( __FILE__ ) . "/header.php";
?>

	<main>
		<div class="teachers__login_wrapper login__wrapper container">
			<span class="login__form_authorization">					
				<? if($_SESSION['authorizationData'] == "Вы уже авторизованы") : 
					echo "Вы уже авторизованы"; 
				?>
				<? elseif ($_SESSION['authorizationData'] == "Неверные данные") : 
					echo "Неверные данные"; 
				?>
				<? endif; ?>
			</span>
			<form class="login__form" action="./teachers.php" method="post">
				<h1>Авторизация</h1>
				<ul class="login__form_inner">
					<li class="login__form_item">
						<input type="text" name="surname" value="Виничук" 
						maxlength="30" pattern="[А-Я][а-я]+" required>
					</li>
					<li class="login__form_item">
						<input type="text" name="name" value="Ольга" 
						maxlength="30" pattern="[А-Я][а-я]+" required>
					</li>
					<li class="login__form_item">
						<input type="text" name="patronymic" value="Николаевна" 
						maxlength="30" pattern="[А-Я][а-я]+" required>
					</li>
					<li class="login__form_item">
						<input type="password" name="password" value="1234" 
						required>
					</li>
					<li class="white__button_wrapper">
						<button class="white__button" type="submit" name="teachers-authorization">
							Войти
						</button>
					</li>
				</ul>
			</form>
		</div>
	</main>

<? 
	require_once dirname( __FILE__ ) . "/footer.php";
?>