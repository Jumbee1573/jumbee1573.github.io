<? 
	$studentName = $_SESSION['logged_student']['NAME'];
	$teacherName = $_SESSION['logged_teacher']['NAME'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/normalize.css">
	<link rel="stylesheet" href="../css/fonts.css">
	<link rel="stylesheet" href="../css/footer.css">
	<link rel="stylesheet" href="../css/general.css">
	<link rel="stylesheet" href="../css/generalMedia.css">
	<link rel="stylesheet" href="../css/header.css">
	<link rel="stylesheet" href="../css/students.css">
	<link rel="stylesheet" href="../css/studentsMedia.css">
	<link rel="stylesheet" href="../css/teachers.css">
	<link rel="stylesheet" href="../css/teachersMedia.css">
	<link rel="icon" type="image/png" href="../img/favicon.png" />
	<link rel="apple-touch-icon-precomposed" href="../img/favicon.png">
	<link rel="stylesheet" type="text/css" href="../semantic/semantic.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../semantic/semantic.min.js"></script>
	<title>Guruweb</title>
</head>
<body>
		
	<header id="main">
		<div class="header__wrapper container">

		<!-- Mobile menu -->
			<nav class="header__menu-mobile">
				<button class="header__menu_button-mobile" onclick="menuu()">
					<i class="fas fa-bars"></i>
				</button>
				<ul class="header__menu_wrapper-mobile menuDown" id="menu">
					<li class="header__menu_close-mobile">
						<button class="header__menu_button-mobile" onclick="menuu()">
							<i class="fas fa-times"></i>
						</button>
					</li>
					<li>
						<ul class="header__menu_main-mobile">
							<li onclick="menuClose()">
								<a class="header__menu_item-mobile"
								href="../index.php#main">Главная</a>
							</li>
							<li onclick="menuClose()">
								<a class="header__menu_item-mobile" 
								href="../index.php#course">Курсы</a>
							</li>
							<li onclick="menuClose()">
								<a class="header__menu_item-mobile" 
								href="../index.php#author">Об авторе</a>
							</li>
						</ul>
					</li>
					<li>
						<ul class="header__menu_authorization-mobile">
							<li onclick="menuClose()">
								<? if(isset($_SESSION['logged_student'])) :
									echo '<a href="./students-menu.php" 
									class="header__menu_item-mobile">'.$studentName.'</a>';
								?>
								<? else : 
									echo '<a href="./students.php" 
									class="header__menu_item-mobile">Студент</a>'; 
								?>
								<? endif; ?>
							</li>
							<li onclick="menuClose()">
								<? if(isset($_SESSION['logged_teacher'])) : 
									echo '<a href="./teachers-menu.php" 
									class="header__menu_item-mobile">'.$teacherName.'</a>';
								?>
								<? else : 
									echo '<a href="./teachers.php" 
									class="header__menu_item-mobile 
									header__menu_authorization_key-mobile">
									<i class="fab fa-keycdn"></i></a>'; 
								?>
								<? endif; ?>
							</li>
						</ul>
					</li>
				</ul>
				<a href="../index.php" class="header__menu_link">
					<div class="header__menu-wrapper">
						<img class="header__menu_atom" src="../img/logo.svg" alt="GuruWeb">
					</div>
				</a>
			</nav>
			<!-- End mobile menu -->

			<!-- Desktop menu -->
			<nav class="header__menu" id="header__menu">
				<div class="header__menu_main">
					<ul>
						<li class="header__menu_item">
							<a href="../index.php#main">Главная</a>
						</li>
						<li class="header__menu_item">
							<a href="../index.php#course">Курсы</a>
						</li>
						<li class="header__menu_item">
							<a href="../index.php#author">Об авторе</a>
						</li>
					</ul>
				</div>
				<div class="header__menu_authorization">
					<ul>
						<li class="header__menu_item">
							<? if(isset($_SESSION['logged_student'])) : 
								echo '<a href="./students-menu.php">'.$studentName.'</a>'; 
							?>
							<? else : 
								echo '<a href="./students.php">Студент</a>'; 
							?>
							<? endif; ?>
						</li>
						<li class="header__menu_item">
							<? if(isset($_SESSION['logged_teacher'])) : 
								echo '<a href="./teachers-menu.php">'.$teacherName.'</a>'; 
							?>
							<? else : 
								echo '<a href="./teachers.php" 
								class="header__menu_authorization_key">
								<i class="fab fa-keycdn"></i></a>'; 
							?>
							<? endif; ?>
						</li>
					</ul>		
				</div>
			</nav>
			<!-- End desktop menu -->

			<a href="#main" class="header__logo_link">
				<div class="header__logo-wrapper">
					<img class="header__logo_atom" src="../img/logo.svg" alt="GuruWeb">
					<span class="header__logo_title">GuruWeb</span>
				</div>
			</a>
		</div>
	</header>