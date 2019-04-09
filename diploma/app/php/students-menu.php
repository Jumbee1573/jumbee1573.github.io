<?
	require_once dirname( __FILE__ ) . '/db/db.php';
	require_once dirname( __FILE__ ) . "/header.php";
?>

<? if(isset($_SESSION['logged_student'])) : ?>

<main class="main__wrapper">
	<div class="main__inner container">
		<nav class="logged__menu_wrapper">
			<ul class="logged__menu logged__menu_left">
				<li class="logged__menu_item">
					<a href="studentTestsResults.php" class="logged__menu_item_link">Результаты тестов</a>
				</li>
				<li class="logged__menu_item">
					<a href="studentTests.php" class="logged__menu_item_link">Тесты</a>
				</li>
			</ul>		
			<ul class="logged__menu logged__menu_right">
				<li class="logged__menu_item">
					<a href="authorization/logout.php" class="logged__menu_item_link">Выход</a>
				</li>
			</ul>		
		</nav>
	</div>
</main>

<? else : ?>
	<main class="main__wrapper">
        <div class="main__inner container">
	        Вы не авторизованы!	
        </div>		
    </main>
<? endif; ?>

<? 
	require_once dirname( __FILE__ ) . "/footer.php";
?>