<?

require_once dirname( __FILE__ ) . '/../libs/rb-mysql.php';

R::setup( 'mysql:host=localhost;dbname=diploma;port=3308','root', '' );
  
session_start();