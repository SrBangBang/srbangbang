<?
header('Access-Control-Allow-Origin: *');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Content-type: application/json; charset=utf-8');
//error_reporting(E_ALL); ini_set('display_errors', '1');
session_start();

// if($_SESSION['id_UserSession']==""){  //si no hay session lo sacamos
// 	session_destroy();
// 	$res =  (object) array('flagerror' => 1 , 'Message' => "Tu Sesi&oacute;n ha expirado. Favor de volver a entrar al sistema.", 'ObjResult' => "");
// 	$data = json_encode($res);
// 	echo $data;
// 	exit();
// }
$type =    $_POST['type'];

//require("PHPMailer-master/class.phpmailer.php");
//include_once "PHPMailer-master/PHPMailerAutoload.php";

$idtokenPost = strip_tags($_POST['idtoken_post']); //token post  fija
$idtokenServerS = $_SESSION['idtokenServer'];  //token server fija para evitar rss xss

$xssdinamicPost  = strip_tags($_POST['xssdinamic_post']); //token post dinamica
$xssdinamicS  = $_SESSION['xssdinamic'];  //token server dinamica

//require("class.DB.php");


//global $bd;
//$bd = Db::getInstance();


//limpiamos variables
/* variables de seguridad */

//obtenemos la IP
if (getenv('HTTP_X_FORWARDED_FOR')) {
  $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
  $ipaddress = getenv('REMOTE_ADDR');
} else {
  $ipaddress = getenv('REMOTE_ADDR');
}
$st_IP = $ipaddress;


//Login ADMIN
if($type == 1){
  $errorflag = 0;
  $message = "Datos OK";
  $ObjResult = "";
  $user = $_REQUEST['user'];
  $password = $_REQUEST['password'];

  /*
  //captcha
  $secretKey="6LeYOtAaAAAAAB3zcTqdeYn0Y_CFk79BpPCWraTb";
  $response=$_POST["captcha"];

  $verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$response}");
  $captcha_success=json_decode($verify);
  if ($captcha_success->success==false) {
    $flagerror = 1;
    $message = "Eres un robot [1:1]";
    $res =  (object) array('flagerror' => $flagerror , 'message' => $message);
    $data = json_encode($res);
    echo $data;
    //$bd->disconnect();
    exit();
  }
  //captcha
  */

  if($user == "ADMIN" && $password == "ADMIN_1"){
    $message = "Login Correcto";
    $_SESSION['id_AdminSessionML'] = $user;
  }else{
    $errorflag = 1;
    $message = "Credenciales incorrectas";
  }
  //$ObjResult = (object) array('nombre_postulacion'=>$nombre_postulacion);
  $res =  (object) array('flagerror' => $errorflag, 'Message' => $message, 'ObjResult' => $ObjResult);
  $data = json_encode($res);
  echo $data;
  exit();
  //$bd->disconnect();
}
?>
