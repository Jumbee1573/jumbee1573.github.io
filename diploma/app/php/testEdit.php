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
        <div class="wrapper">  
           <?
                if(isset($_POST['id'])) {
                    echo "efwef";
                }
                print_r($_POST);
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