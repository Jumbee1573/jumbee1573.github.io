<?

require_once dirname( __FILE__ ) . '/../db/db.php';

$data = $_POST;
$_SESSION['authorizationData'] = "";

if(isset($data['teachers-authorization'])) {
    if(isset($_SESSION['logged_teacher']) || isset($_SESSION['logged_student'])) {
        $_SESSION['authorizationData'] = "Вы уже авторизованы";
        echo "<style>
            .login__form_authorization {
                display: flex!important;
                justify-content: center!important;
            }
        </style>";
    } else {
        $teacher = R::getRow('SELECT SURNAME, NAME, PATRONYMIC, PASSWORD FROM TEACHER WHERE
        SURNAME = ? AND NAME = ? AND PATRONYMIC = ? AND PASSWORD = ?', array(
        $data['surname'], $data['name'], $data['patronymic'], $data['password']));
    
        if($teacher) {
            $_SESSION['logged_teacher'] = $teacher;
            header('Location: ./teachers-menu.php');
        } else {
            $_SESSION['authorizationData'] = "Неверные данные";
            echo "<style>
                .login__form_authorization {
                    display: flex!important;
                    justify-content: center!important;
                }
            </style>";
        }
    }
    
}