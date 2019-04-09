<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . "/header.php";
?>

<? if(isset($_SESSION['logged_teacher'])) : ?>
<?
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
                    class="logged__menu_item_link logged__menu_item_link_active">
                        Результаты студентов
                    </a>
				</li>
				<li class="logged__menu_item">
					<a href="testsInfo.php" class="logged__menu_item_link">Тесты</a>
				</li>
			</ul>		
			<ul class="logged__menu logged__menu_right">
				<li class="logged__menu_item">
					<a href="authorization/logout.php" class="logged__menu_item_link">Выход</a>
				</li>
			</ul>		
		</nav>
        <div class="wrapper">
            <?
                $testResult = R::getAll('SELECT STUDENT.SURNAME, STUDENT.NAME, STUDENT.PATRONYMIC, 
                STUDENT_RESULT.RESULT, GROUPP.GROUPP, TEST.TEST_NAME FROM STUDENT JOIN STUDENT_RESULT 
                ON STUDENT_RESULT.ID_STUDENT = STUDENT.ID_STUDENT JOIN GROUPP ON 
                STUDENT.ID_GROUPP = GROUPP.ID_GROUPP JOIN TEST ON STUDENT_RESULT.ID_TEST = TEST.ID_TEST');

                if(count($testResult) == 0) {
                    echo '<span class="result__message">Нет результатов тестов!</span>';
                } else {
                    echo 
                    '<table class="ui celled table">
                        <thead>
                            <tr>
                                <th>Фамилия</th>
                                <th>Имя</th>
                                <th>Отчество</th>
                                <th>№ группы</th>
                                <th>Название теста</th>
                                <th>Оценка</th>
                            </tr>
                        </thead>';
                    foreach($testResult as $value) {
                        echo '<tr class="tr__hover">';
                        echo "<td>".$value['SURNAME']."</td>";
                        echo "<td>".$value['NAME']."</td>";
                        echo "<td>".$value['PATRONYMIC']."</td>";
                        echo "<td>".$value['GROUPP']."</td>";
                        echo "<td>".$value['TEST_NAME']."</td>";
                        echo "<td>".$value['RESULT']."</td>";
                        echo "</tr>";
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