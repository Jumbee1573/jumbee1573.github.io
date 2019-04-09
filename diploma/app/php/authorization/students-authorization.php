<?

require_once dirname( __FILE__ ) . '/../db/db.php';

$data = $_POST;
$_SESSION['authorizationData'] = "";


if(isset($data['students-authorization'])) {
    if(isset($_SESSION['logged_teacher']) || isset($_SESSION['logged_student'])) {
        $_SESSION['authorizationData'] = "Вы уже авторизованы";
        echo "<style>
            .login__form_authorization {
                display: flex!important;
                justify-content: center!important;
            }
        </style>";
    } else {
        $student = R::getRow('SELECT SURNAME, NAME, PATRONYMIC, PASSWORD, ID_GROUPP FROM STUDENT WHERE
        SURNAME = ? AND NAME = ? AND PATRONYMIC = ? AND PASSWORD = ? AND ID_GROUPP IN
        (SELECT ID_GROUPP FROM GROUPP WHERE GROUPP = ?)', array(
        $data['surname'], $data['name'], $data['patronymic'], $data['password'], $data['groupp']));

        if($student) {
            $_SESSION['logged_student'] = $student;
            header('Location: ./students-menu.php');
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