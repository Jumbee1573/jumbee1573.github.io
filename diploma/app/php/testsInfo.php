<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . "/header.php";
?>

<? if(isset($_SESSION['logged_teacher'])) : ?>
<?
    $testTrigger = R::getRow('SELECT TEST_TRIGGER FROM TEST_TRIGGER WHERE ID_TEST_TRIGGER = 1');
    $loggedTeacher = $_SESSION['logged_teacher'];
    $ID = R::getRow('SELECT ID_TEACHER FROM TEACHER WHERE
    SURNAME = ? AND NAME = ? AND PATRONYMIC = ? AND PASSWORD = ?', array(
    $loggedTeacher['SURNAME'], $loggedTeacher['NAME'], 
    $loggedTeacher['PATRONYMIC'], $loggedTeacher['PASSWORD']));
?>

<main class="main__wrapper">
	<div class="main__inner container">
		<nav class="logged__menu_wrapper">
			<ul class="logged__menu logged__menu_left">
				<li class="logged__menu_item">
                    <a href="testsResults.php" 
                    class="logged__menu_item_link">
                        Результаты студентов
                    </a>
				</li>
				<li class="logged__menu_item">
					<a href="testsInfo.php" class="logged__menu_item_link logged__menu_item_link_active">Тесты</a>
				</li>
			</ul>		
			<ul class="logged__menu logged__menu_right">
				<li class="logged__menu_item">
					<a href="authorization/logout.php" class="logged__menu_item_link">Выход</a>
				</li>
			</ul>		
        </nav>
            <? if($testTrigger['TEST_TRIGGER'] == 1) : ?>
                <button class="ui primary button" id="testActive">
                    Тесты активированы!
                </button>
            <? else  : ?>
                <button class="ui button" id="testDiactive">
                    Тесты диактивированы!
                </button>
            <? endif; ?>
        <div class="wrapper">
            <?
                $test = R::getAll('SELECT TEST_NAME FROM TEST');

                if(count($test) == 0) {
                    echo '<span class="result__message">Тестов нет!</span>';
                } else {
                    echo 
                    '<table class="ui celled table">
                        <thead>
                            <tr>
                                <th>Название теста</th>
                            </tr>
                        </thead>';
                    foreach($test as $key => $value) {
                        foreach($value as $insideKey => $insideValue) {
                            echo '<tr class="tr__hover tr__clicked">';
                            echo '<td id='.$insideKey.'>'.$value['TEST_NAME'].'</td>';
                            echo '</tr>';
                        }
                    }
                    echo "</table>";
                }
            ?>
        </div>
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