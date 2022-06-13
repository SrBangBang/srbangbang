<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registro Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background:white;">
<?php
    require('archivos/conexion.php');



    // When form submitted, insert values into the database.
     if(isset($_POST['submit'])) {
        // removes backslashes
     
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);

       

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);


        $nombre = stripslashes($_REQUEST['nombre']);
        $nombre = mysqli_real_escape_string($con, $nombre);

 
        $email = stripslashes($_GET['Email']);
        $email = mysqli_real_escape_string($con, $email);


        $password2 = stripslashes($_REQUEST['password2']);
        $password2 = mysqli_real_escape_string($con, $password2);

        
        if ($password2==$password) {
            $password3=md5($password);
         } else
         {echo "Contraseñas no válidas";}
       
        $datos = array();
        $datos[] = array('username'=> $username, 'password'=> $password3);
        json_encode($datos,JSON_UNESCAPED_UNICODE);

        $username2=$datos[0]['username'];
        $password4=$datos[0]['password'];

        echo "password: ".$password4."<br>";
        echo "nombre: ".$nombre."<br>";
        echo "Telefono: ".$username2."<br>";
        echo "Email: ".$email."<br>";

        $query = "UPDATE usersSoytusalud SET Password='$password4',Nombre='$nombre',Telefono='$username2' WHERE Email='$email'";
               

        $result   = mysqli_query($con, $query);
       if ($result) {
             echo "
<script>    
  swal({ title: 'Usuario Actualizado',
  icon: 'success',
 text: 'Favor de Iniciar Sesión Nuevamente',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'logout.php';
  }
});
</script>";
        }else {
//             echo "
// <script>    
//   swal({ title: 'Error',
//   icon: 'warning',
//  text: 'Algunos campos no han sido llenado',
//  type: 'success'}).then(okay => {
//    if (okay) {
//     window.location.href = 'javascript:history.go(-1)';
//   }
// });
// </script>";
        }
    } else {

?>  <div class="container3">
   
                    <center>
                        <form class="form" action="" method="post" autocomplete="off" enctype='multipart/form-data'>
        <center><img src="img/logo2.png" width="200" alt=""></center>
       <!--  <h1 class="login-title">Actualización Contraseña</h1>
        <span>Favor de recordar este campo para el acceso a la cuenta</span> -->
        <!-- <input type="tel" class="login-input" name="username" placeholder="<?php echo $valor=$_GET['Telefono']; ?>" value="<?php echo $valor=$_GET['Telefono']; ?>" readonly  /> -->
        <input type="text" class="login-input" name="nombre" placeholder="<?php echo $valor=$_GET['Nombre']; ?>"  />
        <input type="tel" class="login-input" name="username" placeholder="<?php echo $valor=$_GET['Telefono']; ?>" value="<?php echo $valor=$_GET['Telefono']; ?>"   />

        <input type="password" class="login-input" name="password" placeholder="Contraseña" required>
        <input type="password" class="login-input" name="password2" placeholder="Confirmar Contraseña" required>
        
        <input type="submit" name="submit" value="Actualizar Usuario" class="login-button">
    </form></div>
<?php
    }
?>
<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: white;
  color: white;
  text-align: center;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  height: 60px;
  
  }

.left, .right {
  width: 50%;

}

.middle {
  width: 33.333%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
h6{text-decoration: none;}
</style>

<div class="footer">
  <div class="row">
  <div class="column left" style="background-color:white; color: black;">
   <a href="../dashboard.php"><button class="btn button btn-lg equalButton" style="width:60px; height: 40px; margin-top: 8px; border-radius: 10px; background: none" type="submit"  value="Recetas"> <img src="img/men.png" style="width: 40px;margin-top: -8px; margin-left:-15px;"></button></a>
  </div>
  <!-- <div class="column middle" style="background-color:white; color: black;">
   <form action="" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:60px; margin-top: 12px; height: 40px; border-radius: 10px; background: none;"  value="Recetas"><img src="img/reiniciar.png" style="width: 40px;margin-top: -12px;margin-left: -15px;"></button></center></form>
    
  </div> -->
  <div class="column right" style="background-color:white; color: black;">
    <form action="logout.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 8px; height: 40px; border-radius: 10px; background: none;" type="submit"  value="Recetas"> <img src="img/exit.png" style="width: 40px;margin-top: -8px; margin-left: -17px;"></button></a></center></form>
    
  </div>
</div>
  
</div>

</div>
</body>
</html>
