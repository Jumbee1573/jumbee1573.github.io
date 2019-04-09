<? 
	require_once dirname( __FILE__ ) . '/db/db.php';
    require_once dirname( __FILE__ ) . "/header.php";
?>

<? if(isset($_SESSION['logged_student'])) : ?>
<?
    $testTrigger = R::getRow('SELECT TEST_TRIGGER FROM TEST_TRIGGER WHERE ID_TEST_TRIGGER = 1');
    $loggedStudent = $_SESSION['logged_student'];
    $ID = R::getRow('SELECT ID_STUDENT FROM STUDENT WHERE
    SURNAME = ? AND NAME = ? AND PATRONYMIC = ? AND PASSWORD = ? AND ID_GROUPP IN
    (SELECT ID_GROUPP FROM GROUPP WHERE ID_GROUPP = ?)', array(
    $loggedStudent['SURNAME'], $loggedStudent['NAME'], 
    $loggedStudent['PATRONYMIC'], $loggedStudent['PASSWORD'], 
    $loggedStudent['ID_GROUPP']) );
?>

<main class="main__wrapper">
	<div class="main__inner container">
		<nav class="logged__menu_wrapper">
			<ul class="logged__menu logged__menu_left">
				<li class="logged__menu_item">
                    <a href="studentTestsResults.php" 
                    class="logged__menu_item_link">
                        Результаты тестов
                    </a>
				</li>
				<li class="logged__menu_item">
					<a href="studentTests.php" class="logged__menu_item_link
                    logged__menu_item_link_active">
                        Тесты
                    </a>
				</li>
			</ul>		
			<ul class="logged__menu logged__menu_right">
				<li class="logged__menu_item">
					<a href="authorization/logout.php" class="logged__menu_item_link">Выход</a>
				</li>
			</ul>		
		</nav>
        <div class="wrapper">  
            <? if($testTrigger['TEST_TRIGGER'] == 1) : ?>
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
                                echo '<tr class="tr__hover" onclick="myFunc();">';
                                echo '<td id='.$insideKey.'>'.$value['TEST_NAME'].'</td>';
                                echo '</tr>';
                            }
                        }
                        echo "</table>";
                    }
                ?>
            <? else : ?>
                В данное время тесты недоступны для прохождения!
            <? endif; ?>
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