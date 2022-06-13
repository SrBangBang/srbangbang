<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registro Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body style="background: white;">
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

        $query = "UPDATE usersSoytusalud SET Password='$password4' WHERE Telefono='$username2'";
               

        $result   = mysqli_query($con, $query);
       if ($result) {
             echo "
<script>    
  swal({ title: 'Contraseña Actualizada',
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
        <!-- <h1 class="login-title">Actualizar Contraseña</h1>
        <span>Favor de recordar este campo para el acceso a la cuenta</span> -->
        <input type="tel" class="login-input" name="username" placeholder="Ingrese Teléfono"  />
        <input type="password" class="login-input" name="password" placeholder="Contraseña" required>
        <input type="password" class="login-input" name="password2" placeholder="Confirmar Contraseña" required>
        <input type="submit" name="submit" value="Actualizar Contraseña" class="login-button">
        <p class="link"><a href="../login.php">¿Ya tienes una cuenta?</a></p>
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
  width: 33.333%;

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

<!-- <div class="footer">
  <div class="row">
  <div class="column left" style="background-color:white; color: black;">
   <a href="../dashboard.php"><button class="btn button btn-lg equalButton" style="width:60px; height: 40px; margin-top: 8px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="../img/menu.png" style="margin-left: -10px; width: 20px;"><br><span style="margin-left: -10px; font-size: 10px; color: black">Menú</span></button></a>
  </div>
  <div class="column middle" style="background-color:white; color: black;">
   <form action="/medicallife/" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:60px; margin-top: 8px; height: 40px; border-radius: 10px; background: #EA619E;"  value="Recetas"><img src="img/app.png" style="width: 20px;margin-top: -1px; margin-left:-10px;"><br><span style="margin-left: -10px;font-size: 10px;color: black;">App</span></button></center></form>
    
  </div>
  <div class="column right" style="background-color:white; color: black;">
    <form action="logout.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 8px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/logout.png" style="width: 20px;margin-top: -1px; margin-left:-8px"><br><span style="margin-left:-15px; margin-top:8px; font-size: 10px; color: black;">Cerrar sesión</span></button></a></center></form>
    
  </div>
</div>
  
</div>

</div>
 -->
</body>
</html>
