<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registro Usuario</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
    require('db.php');
    
     if(isset($_POST['submit'])) {
       
      
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);

        $name = stripslashes($_REQUEST['nombre']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);


        $apaterno = stripslashes($_REQUEST['apaterno']);
        //escapes special characters in a string
        $apaterno = mysqli_real_escape_string($con, $apaterno);

        $amaterno = stripslashes($_REQUEST['amaterno']);
        //escapes special characters in a string
        $amaterno = mysqli_real_escape_string($con, $amaterno);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);


        // $nip = stripslashes($_REQUEST['nip']);
        // $nip = mysqli_real_escape_string($con, $nip);

        // $tel_casa = stripslashes($_REQUEST['tel_casa']);
        // $tel_casa = mysqli_real_escape_string($con, $tel_casa);

        // $tel_cel = stripslashes($_REQUEST['tel_cel']);
        // $tel_cel = mysqli_real_escape_string($con, $tel_cel);


        // $genero    = stripslashes($_REQUEST['genero']);
        // $genero    = mysqli_real_escape_string($con, $genero);

        // $fecha_nac    = stripslashes($_REQUEST['fecha_nac']);
        // $fecha_nac    = mysqli_real_escape_string($con, $fecha_nac);

        // $estado_nac = stripslashes($_REQUEST['estado_nac']);
        // $estado_nac = mysqli_real_escape_string($con, $estado_nac);
  
        // $rfc = stripslashes($_REQUEST['rfc']);
        // $rfc = mysqli_real_escape_string($con, $rfc);

        // $curp = stripslashes($_REQUEST['curp']);
        // $curp = mysqli_real_escape_string($con, $curp);

        // $estado = stripslashes($_REQUEST['estado']);
        // $estado = mysqli_real_escape_string($con, $estado);

        // $direccion = stripslashes($_REQUEST['direccion']);
        // $direccion = mysqli_real_escape_string($con, $direccion);

        // $almu = stripslashes($_REQUEST['almu']);
        // $almu = mysqli_real_escape_string($con, $almu);

        // $numext = stripslashes($_REQUEST['numext']);
        // $numext = mysqli_real_escape_string($con, $numext);


        // $numint = stripslashes($_REQUEST['numint']);
        // $numint = mysqli_real_escape_string($con, $numint);


        // $cp = stripslashes($_REQUEST['cp']);
        // $cp = mysqli_real_escape_string($con, $cp);

        // $colonia = stripslashes($_REQUEST['colonia']);
        // $colonia = mysqli_real_escape_string($con, $colonia);

        // $sec_e = stripslashes($_REQUEST['sec_e']);
        // $sec_e = mysqli_real_escape_string($con, $sec_e);

        // $civil = stripslashes($_REQUEST['civil']);
        // $civil = mysqli_real_escape_string($con, $civil);

        // $escolaridad = stripslashes($_REQUEST['escolaridad']);
        // $escolaridad = mysqli_real_escape_string($con, $escolaridad);

        $create_datetime = date("Y-m-d H:i:s");


        $datos = array();

       $datos[] = array('username'=> $username, 'name'=> $name,'apaterno'=> $apaterno,'amaterno'=> $amaterno,'email'=> $email,'password'=> $password,'create_datetime'=> $create_datetime);

       echo json_encode($datos,JSON_UNESCAPED_UNICODE);

        
      
        $username2=$datos[0]['username'];
        $name2=$datos[0]['name'];
        $apaterno2=$datos[0]['apaterno'];
        $amaterno2=$datos[0]['amaterno'];
        $email2=$datos[0]['email'];
        $password2=$datos[0]['password'];
        $create_datetime2=$datos[0]['create_datetime'];





        $query    = "INSERT INTO `users` (Id_Cliente,Id_Usuario,Id_Operador, Password,Email,Nombre,Ap_Paterno,Ap_Materno,create_datetime)
                     VALUES ('69','$username2','6764', '" . md5($password2) . "', '$email2','$name2','$apaterno2','$amaterno2','$create_datetime2')";
        $result   = mysqli_query($con, $query);
       if ($result) {
             echo "
<script>    
  swal({ title: 'Usuario Registrado',
  icon: 'success',
 text: 'El usuario ha sido ingresado correctamente',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'javascript:history.go(-2)';
  }
});
</script>";

        }else {
            echo "
<script>    
  swal({ title: 'Error',
  icon: 'warning',
 text: 'Usuario ya Registrado',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'javascript:history.go(-1)';
  }
});
</script>";
        }
    } else {

?>  <div class="container2">

    <form class="form" action="" method="post" autocomplete="off" enctype='multipart/form-data'>
        <center><img src="img/logo2.png" width="200" alt=""></center>
        <h1 class="login-title">Registro Usuario</h1>
        <span>Favor de recordar este campo para el acceso a la cuenta</span>
        <input type="tel" class="login-input" name="username" placeholder="Teléfono" required />
        <input type="text" class="login-input" name="email" placeholder="Email" required>
        <input type="password" class="login-input" name="password" placeholder="Contraseña" required>
        <input type="text" class="login-input" name="nombre" placeholder="Nombre" required>
        <input type="text" class="login-input" name="apaterno" placeholder="Apellido Paterno" required="">
        <input type="text" class="login-input" name="amaterno" placeholder="Apellido Materno" required="">
        <input type="submit" name="submit" value="Registrar Usuario" class="login-button">
        <p class="link">¿Ya tienes una cuenta? <a href="login.php">Inicia Sesión</a></p>
    </form></div>
<?php
    }
?>
</body>
</html>
