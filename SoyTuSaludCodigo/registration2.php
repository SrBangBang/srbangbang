<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registro Usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        $tel_casa = stripslashes($_REQUEST['tel_casa']);
        $tel_casa = mysqli_real_escape_string($con, $tel_casa);

        $tel_cel = stripslashes($_REQUEST['tel_cel']);
        $tel_cel = mysqli_real_escape_string($con, $tel_cel);


        $genero    = stripslashes($_REQUEST['genero']);
        $genero    = mysqli_real_escape_string($con, $genero);

        $fecha_nac    = stripslashes($_REQUEST['fecha_nac']);
        $fecha_nac    = mysqli_real_escape_string($con, $fecha_nac);

        $estado_nac = stripslashes($_REQUEST['estado_nac']);
        $estado_nac = mysqli_real_escape_string($con, $estado_nac);
  
        $rfc = stripslashes($_REQUEST['rfc']);
        $rfc = mysqli_real_escape_string($con, $rfc);

        $curp = stripslashes($_REQUEST['curp']);
        $curp = mysqli_real_escape_string($con, $curp);

        $estado = stripslashes($_REQUEST['estado']);
        $estado = mysqli_real_escape_string($con, $estado);

        $direccion = stripslashes($_REQUEST['direccion']);
        $direccion = mysqli_real_escape_string($con, $direccion);

        $almu = stripslashes($_REQUEST['almu']);
        $almu = mysqli_real_escape_string($con, $almu);

        $numext = stripslashes($_REQUEST['numext']);
        $numext = mysqli_real_escape_string($con, $numext);


        $numint = stripslashes($_REQUEST['numint']);
        $numint = mysqli_real_escape_string($con, $numint);


        $cp = stripslashes($_REQUEST['cp']);
        $cp = mysqli_real_escape_string($con, $cp);

        $colonia = stripslashes($_REQUEST['colonia']);
        $colonia = mysqli_real_escape_string($con, $colonia);

        $sec_e = stripslashes($_REQUEST['sec_e']);
        $sec_e = mysqli_real_escape_string($con, $sec_e);

        $civil = stripslashes($_REQUEST['civil']);
        $civil = mysqli_real_escape_string($con, $civil);

        $escolaridad = stripslashes($_REQUEST['escolaridad']);
        $escolaridad = mysqli_real_escape_string($con, $escolaridad);

        $create_datetime = date("Y-m-d H:i:s");


        $datos = array();

       $datos[] = array('username'=> $username, 'name'=> $name,'apaterno'=> $apaterno,'amaterno'=> $amaterno,'email'=> $email,'password'=> $password,'tel_casa'=> $tel_casa,'tel_cel'=> $tel_cel,'genero'=> $genero,'fecha_nac'=> $fecha_nac,'estado_nac'=> $estado_nac,'rfc'=> $rfc,'curp'=> $curp,'estado'=> $estado,'direccion'=> $direccion,'almu'=> $almu,'numext'=> $numext,'numint'=> $numint,'cp'=> $cp,'colonia'=> $colonia,'sec_e'=> $sec_e,'civil'=> $civil,'escolaridad'=> $escolaridad,'create_datetime'=> $create_datetime);

       json_encode($datos,JSON_UNESCAPED_UNICODE);

        
      
        $username2=$datos[0]['username'];
        $name2=$datos[0]['name'];
        $apaterno2=$datos[0]['apaterno'];
        $amaterno2=$datos[0]['amaterno'];
        $email2=$datos[0]['email'];
        $password2=$datos[0]['password'];
        $tel_casa2=$datos[0]['tel_casa'];
        $tel_cel2=$datos[0]['tel_cel'];
        $genero2=$datos[0]['genero'];
        $fecha_nac2=$datos[0]['fecha_nac'];
        $estado_nac2=$datos[0]['estado_nac'];
        $rfc2=$datos[0]['rfc'];
        $curp2=$datos[0]['curp'];
        $estado2=$datos[0]['estado'];
        $direccion2=$datos[0]['direccion'];
        $almu2=$datos[0]['almu'];
        $numext2=$datos[0]['numext'];
        $numint2=$datos[0]['numint'];
        $cp2=$datos[0]['cp'];
        $colonia2=$datos[0]['colonia'];
        $sec_e2=$datos[0]['sec_e'];
        $civil2=$datos[0]['civil'];
        $escolaridad2=$datos[0]['escolaridad'];
        $create_datetime2=$datos[0]['create_datetime'];





        $query    = "INSERT INTO `users` (username, password, email,nombre,apaterno,amaterno,genero,fecha_nac,estado_nac,rfc,curp,tel_casa,tel_cel,estado,direccion,almu,colonia, num_ext,num_int,cp,seccion_elect,escolaridad,civil,create_datetime)
                     VALUES ('$username2', '" . md5($passwor2) . "', '$email2','$name2','$apaterno2','$amaterno2','$genero2','$fecha_nac2','$estado_nac2','$rfc2','$curp2','$tel_casa2','$tel_cel2','$estado2','$direccion2','$almu2','$colonia2','$numext2','$numint2','$cp2','$sec_e2','$escolaridad2','$civil2', '$create_datetime2')";
        $result   = mysqli_query($con, $query);
       if ($result) {
             echo "
<script>    
  swal({ title: 'Usuario Registrado',
  icon: 'success',
 text: 'El usuario ha sido ingresado correctamente',
 type: 'success'}).then(okay => {
   if (okay) {
    window.location.href = 'dashboard.php';
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

?>  <div class="container4">

    <form class="form" action="" method="post" autocomplete="off" enctype='multipart/form-data'>
        <center><img src="img/logo2.png" width="200" alt=""></center>
        <h1 class="login-title">Registro Usuario</h1>
        <span>Favor de recordar este campo para el acceso a la cuenta</span>
        <input type="text" class="login-input" name="username" placeholder="ID Tarjeta" required />
        <input type="text" class="login-input" name="email" placeholder="Email" required>
        <input type="password" class="login-input" name="password" placeholder="Contraseña" required>
        <input type="text" class="login-input" name="nombre" placeholder="Nombre" required>
        <input type="text" class="login-input" name="apaterno" placeholder="Apellido Paterno" required="">
        <input type="text" class="login-input" name="amaterno" placeholder="Apellido Materno" required="">
        <select class="login-input" style="width: 300px; height: auto; border: none;" name="genero" id="genero">
            <option value="">Selecciona tu Género</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Binario">Binario</option>
        </select><br>
        <span>Fecha de Nacimiento</span>
        <input type="date" class="login-input" name="fecha_nac" placeholder="Fecha Nacimiento" required="">
        <select id="estado_nac" style="width: 300px; height: 45px; border-radius: 0px; border: none;" name="estado_nac">
                        <option value="">Selecciona Estado de Nacimiento</option>
                        <!--Consulta mysql de la tabla estados de origen-->
                        <?php 

                        $sql = "SELECT * from Estados";
                        $con->set_charset("utf8");
                        $query = $con -> query ($sql);

                        while($valores = mysqli_fetch_array($query)){
                           echo "<option value='".$valores['id']."'>".$valores['id']."</option>";
                       }

                       ?> </select><br><br>
        <input type="text" class="login-input" name="rfc" placeholder="RFC" oninput="this.value = this.value.toUpperCase()">
        <input type="text" class="login-input" name="curp" placeholder="Curp" oninput="this.value = this.value.toUpperCase()">
        <input type="tel" class="login-input" name="tel_casa" placeholder="Número Telefónico Casa" required="">
        <input type="tel" class="login-input" name="tel_cel" placeholder="Número Telefónico Celular" required="">

        <select id="estado"  style="width: 300px; height: auto; border: none;" name="estado">
                        <option value="">Selecciona Estado</option>
                        <!--Consulta mysql de la tabla estados de origen-->
                        <?php 

                        $sql = "SELECT * from Estados";
                        $con->set_charset("utf8");
                        $query = $con -> query ($sql);

                        while($valores = mysqli_fetch_array($query)){
                           echo "<option value='".$valores['id']."'>".$valores['id']."</option>";
                       }

                       ?> </select>
        <input type="text" class="login-input" name="almu" placeholder="Alcaldía o Municipio"required="">
        <input type="text" class="login-input" name="colonia" placeholder="Colonia"required="">
        <input type="text" class="login-input" name="direccion" placeholder="Dirección" required="">
        <input type="text" class="login-input" name="numext" placeholder="Número Exterior" required="">
        <input type="text" class="login-input" name="numint" placeholder="Número Interior" required="">
        <input type="text" class="login-input" name="cp" placeholder="Código Postal" required="">
        <input type="text" class="login-input" name="sec_e" placeholder="Sección Electoral" required="">
        <select id="escolaridad"  style="width: 300px; height: 45px;  border: none;" name="escolaridad">
                        <option value="">Selecciona Escolaridad</option>
                         <option value="Kinder">Kinder</option>
                          <option value="Primaria">Primaria</option>
                          <option value="Secundaria">Secundaria</option>
                          <option value="Preparatoria">Preparatoria</option>
                          <option value="Licenciatura">Licenciatura</option>
                          <option value="Maestría o Diplomado">Maestría o Diplomado</option>
                        </select><br><br>
        <select id="civil"  style="width: 300px; height: 45px;  border: none;" name="civil">
                        <option value="">Selecciona Estado Civil</option>
                         <option value="Soltero">Soltero</option>
                          <option value="Casado">Casado</option>
                          <option value="Divorciado">Divorciado</option>
                          <option value="Unión Libre">Unión Libre</option>
                        </select><br><br>
        <input type="submit" name="submit" value="Registrar Usuario" class="login-button">
        <p class="link"><a href="dashboard.php">Regresar</a></p>
    </form></div>
<?php
    }
?>
</body>
</html>
