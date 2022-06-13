<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background: WHITE;"> 
<?php
    require('archivos/conexion.php');
    session_start();
    
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = md5(mysqli_real_escape_string($con, $password));
       

        $datos = array();
        $datos2= array();
        $datos[] = array('username'=> $username, 'password'=> $password);
        json_encode($datos,JSON_UNESCAPED_UNICODE);

        $username2=$datos[0]['username'];
        $password2=md5($datos[0]['password']);


        $query    = "SELECT * FROM `usersSoytusalud` WHERE Telefono='$username'
                     AND Password='$password' AND Id_Cliente=69";
        $result = mysqli_query($con, $query) or die(mysql_error());

        $rows = mysqli_num_rows($result);
         while($row = $result->fetch_assoc()) {
         $datos2[] = array('id'=> $row["id"], 'Telefono'=> $row["Telefono"],'Id_Cliente'=> $row["Id_Cliente"],'Id_Usuario'=> $row["Id_Usuario"],'Id_Operador'=> $row["Id_Operador"],'Email'=> $row["Email"],'Password'=> $row["Password"],'Nombre'=> $row["Nombre"],'Folio_Tarjeta'=> $row["Folio_Tarjeta"],'create_datetime'=> $row["create_datetime"]);
          json_encode($datos2,JSON_UNESCAPED_UNICODE);

          header("Location: dashboard.php");  
   
  }
        if ($rows == 1) {
            $_SESSION['Id_Operador']=$datos2[0]['Id_Operador'];
            $_SESSION['Id_Cliente']=$datos2[0]['Id_Cliente'];
            $_SESSION['Telefono']=$datos2[0]['Telefono'];
            $_SESSION['Nombre']=$datos2[0]['Nombre'];
            $_SESSION['Id_Usuario']=$datos2[0]['Id_Usuario'];
            $_SESSION['Folio_Tarjeta']=$datos2[0]['Folio_Tarjeta'];
    
        } else {
              echo "
<script>    
  swal({ title: 'Usuario o Contraseña no válido',
  icon: 'error',
 text: 'El usuario o contraseña no es válido intente de nuevo',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'javascript:history.go(-1)';
  }
});
</script>";
        }
        
    } else {
?>
   
<div class="container">

    <form class="form" method="post" name="login" autocomplete="off">
        <center><img src="img/logo2.png" width="200" alt=""></center>
       <!--  <h1 class="login-title" style="color: #902954;">Inicio de Sesión</h1> -->
        <input type="tel" class="login-input" name="username" placeholder="Teléfono" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Iniciar Sesión" name="submit" class="login-button"/>
        <p class="link">¿No tienes una cuenta?

         <a href="http://sybiml.com/system/RegistroPaciente/formCitaapp.php?id_Cliente=69&id_Operador=6764&tipoKey=71&I_tipoTarjeta=1">Registrate Ahora</a></p>
         

        <p class="link"><a href="update.php">¿Olvidaste tu contraseña?</a></p>
  </form>
</div>
<?php
    }
?>


</body>
</html>
