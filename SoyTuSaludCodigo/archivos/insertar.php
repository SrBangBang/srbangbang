<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insertar Datos</title>
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <?php
include('conexion.php');
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);

}

$id_usuario = mysqli_real_escape_string($con, $_GET['id_Usuario']);
$FolioTarjeta = mysqli_real_escape_string($con, $_GET['FolioTarjeta']);
$nombre.= mysqli_real_escape_string($con, $_GET['nombre']);
$celular = mysqli_real_escape_string($con, $_GET['celular']);
$id_cliente = mysqli_real_escape_string($con, $_GET['idCliente']);
$id_operador= mysqli_real_escape_string($con, $_GET['idOperador']);
$email = mysqli_real_escape_string($con, $_GET['email']);
$I_tipoTarjeta = mysqli_real_escape_string($con, $_GET['I_tipoTarjeta']);





$caracteres='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
$longpalabra=8;
for($pass='', $n=strlen($caracteres)-1; strlen($pass) < $longpalabra ; ) {
  $x = rand(0,$n);
  $pass.= $caracteres[$x];
}

$pass;


// $id_cliente= '69';
// $id_operador= '6764';

 $create_datetime = date("Y-m-d H:i:s");


switch ($id_cliente) {
   case '51':

$sql = "INSERT INTO usersTexcoco(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {

$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);


// echo json_encode($response);
  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/texcoco/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/texcoco/dashboard.php';
  }
});
</script>";
}  else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/texcoco/login.php';
  }
});
</script>";

}



}

    break;
      case '74':

$sql = "INSERT INTO usersTlaxcala(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {

$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);


// echo json_encode($response);
  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/tlaxcala/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/tlaxcala/dashboard.php';
  }
});
</script>";
}  else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/tlaxcala/login.php';
  }
});
</script>";

}



}

    break;
      case '45':

$sql = "INSERT INTO usersSoytusalud(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {
$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);

//echo json_encode($response);
  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/dashboard.php';
  }
});
</script>";
}  else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/chicoloapan/login.php';
  }
});
</script>";

}



}

    break;


     case '83':

$sql = "INSERT INTO usersChicoloapan(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {
$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);

// echo json_encode($response);
  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/chicoloapan/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/chicoloapan/dashboard.php';
  }
});
</script>";
}  else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/chicoloapan/login.php';
  }
});
</script>";

}



}

    break;

       case '75':

$sql = "INSERT INTO usersCoyoacan(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {
$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);

// echo json_encode($response);
  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/coyoacan/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/coyoacan/dashboard.php';
  }
});
</script>";
}  else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/coyoacan/login.php';
  }
});
</script>";

}



}

    break;

       case '78':

$sql = "INSERT INTO usersVC(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {
$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);

// echo json_encode($response);
  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/vc/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/vc/dashboard.php';
  }
});
</script>";
}  else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/vc/login.php';
  }
});
</script>";

}



}

    break;
  case '82':

$sql = "INSERT INTO usersAltontonga(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {
$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);

// echo json_encode($response);
  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/altotonga/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/altotonga/dashboard.php';
  }
});
</script>";
}  else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/altotonga/login.php';
  }
});
</script>";

}



}

    break;

     case '69':

$sql = "INSERT INTO usersSoytusalud(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {
$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);

// echo json_encode($response);

  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/dashboard.php';
  }
});
</script>";
} else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/login.php';
  }
});
</script>";

}

}

    break;
    
     case '77':

$sql = "INSERT INTO usersCampeche(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {
$params = array(
  "message" => "Usuario :".$celular." contraseña:".$pass."",
  "numbers" => $celular,
  "country_code" => +52
);
$headers = array(
  "apikey: 46d09541c85eb990535551b16e58d48988f11421"
);
curl_setopt_array($ch = curl_init(), array(
  CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HEADER => 0,
  CURLOPT_HTTPHEADER => $headers,
  CURLOPT_POST => 1,
  CURLOPT_POSTFIELDS => http_build_query($params),
  CURLOPT_RETURNTRANSFER => 1
));
$response = curl_exec($ch);
curl_close($ch);

// echo json_encode($response);

  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/campeche/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/campeche/dashboard.php';
  }
});
</script>";
} else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/campeche/login.php';
  }
});
</script>";

}

}

    break;


     case '101':

$sql = "INSERT INTO usersSanLuisPotosi(Id_Cliente,Id_Operador,Id_Usuario,Telefono,Password,Nombre,Email,Folio_Tarjeta,I_tipoTarjeta,create_datetime) VALUES ('$id_cliente', '$id_operador','$id_usuario', '$celular','".md5($pass)."','$nombre','$email','$FolioTarjeta','$I_tipoTarjeta','$create_datetime')";
  if ($con->query($sql) === TRUE) {
// $params = array(
//   "message" => "Usuario :".$celular." contraseña:".$pass."",
//   "numbers" => $celular,
//   "country_code" => +52
// );
// $headers = array(
//   "apikey: 46d09541c85eb990535551b16e58d48988f11421"
// );
// curl_setopt_array($ch = curl_init(), array(
//   CURLOPT_URL => "https://api.smsmasivos.com.mx/sms/send",
//   CURLOPT_SSL_VERIFYPEER => 0,
//   CURLOPT_HEADER => 0,
//   CURLOPT_HTTPHEADER => $headers,
//   CURLOPT_POST => 1,
//   CURLOPT_POSTFIELDS => http_build_query($params),
//   CURLOPT_RETURNTRANSFER => 1
// ));
// $response = curl_exec($ch);
// curl_close($ch);

// echo json_encode($response);

  if ($I_tipoTarjeta=='1' ) {
 echo "
<script>    
  swal({ title: 'Usuario Agregado',
  icon: 'success',
 text: 'Tu Usuario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/sanluispotosi/login.php';
  }
});
</script>";
}elseif ($I_tipoTarjeta=='2') {
  echo "
<script>    
  swal({ title: 'Beneficiario Agregado ',
  icon: 'success',
 text: 'El Usuario del Beneficiario es [".$celular."] y tu contraseña es ".$pass." .Le llegará un Mensaje de confirmación',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/sanluispotosi/dashboard.php';
  }
});
</script>";
} else{  echo "
<script>    
  swal({ title: 'Error',
  icon: 'error',
 text: 'Favor de intentar de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'https://testing.srbangbang.com/sanluispotosi/login.php';
  }
});
</script>";

}

}

    break;
  
  default:
    // code...
    break;
}

?>
</body>
</html>