<? 
    require_once dirname( __FILE__ ) . '/../db/db.php';
    unset($_SESSION['logged_student']);
    unset($_SESSION['logged_teacher']);
    header('Location: /index.php');
?>