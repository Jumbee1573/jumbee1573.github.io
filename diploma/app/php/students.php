<? 
	require_once dirname( __FILE__ ) . '/authorization/students-authorization.php';
	require_once dirname( __FILE__ ) . "/header.php";
?>

	<main>
		<div class="students__login_wrapper login__wrapper container">
			<form class="login__form" action="./students.php" method="POST">
				<span class="login__form_authorization">					
					<? if($_SESSION['authorizationData'] == "Вы уже авторизованы") : 
						echo "Вы уже авторизованы"; 
					?>
					<? elseif ($_SESSION['authorizationData'] == "Неверные данные") : 
						echo "Неверные данные"; 
					?>
					<? endif; ?>
				</span>
				<h1>Авторизация</h1>
				<ul class="login__form_inner">
					<li class="login__form_item">
						<input type="text" name="surname" value="Вербицкий" 
						maxlength="30" pattern="^\s*[A-ZА-Я][a-zа-я]+('[a-zа-я]+|-[A-ZА-Я][a-zа-я]+)?\s*$" required>
					</li>
					<li class="login__form_item">
						<input type="text" name="name" value="Станислав" 
						maxlength="30" pattern="^\s*[A-ZА-Я][a-zа-я]+('[a-zа-я]+|-[A-ZА-Я][a-zа-я]+)?\s*$" required>
					</li>
					<li class="login__form_item">
						<input type="text" name="patronymic" value="Викторович" 
						maxlength="30" pattern="^\s*[A-ZА-Я][a-zа-я]+('[a-zа-я]+|-[A-ZА-Я][a-zа-я]+)?\s*$" required>
					</li>
					<li class="login__form_item">
						<input type="text" name="groupp" value="52492" 
						maxlength="10" pattern="[0-9]{5}|[0-9]К[0-9]{4}|[0-9]K[0-9]{4}" required>
					</li>
					<li class="login__form_item">
						<input type="password" name="password" value="1234" 
						required>
					</li>
					<li class="white__button_wrapper">
						<button class="white__button" type="submit" name="students-authorization">
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