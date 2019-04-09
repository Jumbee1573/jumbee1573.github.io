<? 
    require_once dirname( __FILE__ ) . '/db/db.php';

    if(isset($_POST['status']) || $_POST['status'] == 0) {
        R::exec('UPDATE TEST_TRIGGER SET TEST_TRIGGER = ?', array($_POST['status']));
    }
?>