<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard área del Cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="format-detection" content="telephone=yes">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <link rel="stylesheet" href="style3.css" />
    
<body>
    <div class="container">
    <div class="form"><br>
       <center style="margin-top: -100px;"><img src="img/logo2.png"  width="200" alt=""></center>
        <p style="color: #902954;"><h3 style="color: #902954;">Bienvenid@</h3> <?php  $_SESSION['Id_Operador'];  $_SESSION['Id_Cliente'];  $_SESSION['Telefono']; echo "<h3 style='color: #902954; '>".$_SESSION['Nombre']."</h3>"; 

          //$_SESSION['Id_Usuario'];
         $_SESSION['Id_Usuario'];
         $_SESSION['Folio_Tarjeta']?>
            
        </p>
        <p style="color: #902954;"><h4 style="color: #902954;"><center>¿Que desea hacer?</center></h4></p>
        <p style="text-align: right; "></p>
        
         <div class="row col-xs-12" >
             <div class="col-xs-6  center"><form action="/archivos/index4.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:155px; margin-top: 10px; margin-left: -40px; height: 155px; border-radius: 10px; background: none;"   value="Recetas"><img src="img/misdatos.jpg" style="width: 155px;margin-top: -8px;border-radius: 10px;margin-left: -12px;"></button></center></form></div>
          
          <div class="col-xs-6 center"><form action="/medicallife/index2.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><input type="hidden"  id="valor2" name="valor2" value="<?php echo $_SESSION['Folio_Tarjeta']; ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:155px; margin-top: 10px; height: 155px; border-radius: 10px; margin-left: 8px;  background: none;"  value="Recetas"><img src="img/tarjeta.jpg" style="width: 155px;margin-top: -8px;border-radius: 10px;margin-left: -6px;"></button></center></form></div>

         
        </div>

<br>
        <div class="row col-xs-12 ">
          <div class="col-xs-6 center"><form action="http://sybiml.com/apirest/recetas/index.php" method="get"><input type="hidden"  id="id_User" name="id_User" value="<?php echo $_SESSION['Id_Usuario']; ?>"><input type="hidden"  id="id_Cliente" name="id_Cliente" value="<?php echo $_SESSION['Id_Cliente']?>"><center><button class="btn button btn-lg equalButton" style="width:155px; margin-top: 10px; height: 155px; margin-left: -53px; border-radius: 10px; background: none;" type="submit"  value="Recetas"> <img src="img/recetas.jpg" style="width: 155px;margin-top: -6px;border-radius: 10px;"></button></a></center></form></div>

          <div class="col-xs-6  center"><a href="tel:+525541652020"><button class="btn button btn-lg equalButton bt1" style="margin-left: 6px; width:155px; margin-top: 10px; height: 155px; border-radius: 10px; background: none"  value="Recetas"><img src="img/cita.jpg" style="width: 155px;margin-top: -6px; margin-left: -6px; border-radius: 10px;"></button></a></div>
       
        </div>


        
          <!-- <div class="col-xs-6  center"><form action="update2.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:70px; margin-top: 10px; height: 70px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/reset2.png" style="width: 45px;margin-top: -6px;"></button></a></center></form>
          </div> -->

           
       
        <!--   <a href="https://webbot.me/6f6c5d9c29e9c4c00872035d2161b49c217c6673161580fa4d7fc4444ac850a4"><button class="btn button btn-lg equalButton" style="width:70px; margin-top: 10px; height: 70px; border-radius: 10px; background: #EA619E;"  value="Recetas"> <img src="img/cel2.png" style="width: 40px;margin-top: -6px;"><br></button></a> -->
       

      <!-- a href="https://link-to-tel.herokuapp.com/tel/525541652020"><button class="btn btn-outline-success"><i class="material-icons pr-2 align-bottom">phone </i>525541652020</button></a> -->
         <?php 


$user_agent = $_SERVER['HTTP_USER_AGENT'];


function getPlatform($user_agent) {
   $plataformas = array(
      'Windows 10' => 'Windows NT 10.0+',
      'Windows 8.1' => 'Windows NT 6.3+',
      'Windows 8' => 'Windows NT 6.2+',
      'Windows 7' => 'Windows NT 6.1+',
      'Windows Vista' => 'Windows NT 6.0+',
      'Windows XP' => 'Windows NT 5.1+',
      'Windows 2003' => 'Windows NT 5.2+',
      'Windows' => 'Windows otros',
      'iPhone' => 'iPhone',
      'iPad' => 'iPad',
      'Mac OS X' => '(Mac OS X+)|(CFNetwork+)',
      'Mac otros' => 'Macintosh',
      'Android' => 'Android',
      'BlackBerry' => 'BlackBerry',
      'Linux' => 'Linux',
   );
   foreach($plataformas as $plataforma=>$pattern){
      if (preg_match('/(?i)'.$pattern.'/', $user_agent))
         return $plataforma;
   }
   return 'Otras';
}




$SO = getPlatform($user_agent);

$SO;

if ($SO=='iPhone') {
echo "<style>.bt1{display:none;}</style>";  // code...

echo "<div class='col-xs-6  center' style='margin-left:150px; margin-top:-100px;'><center><b style=' z-index: 99999;'>Agendar citar<br>Marcar al <br>5541652020<b></center></div>";
}




?>

          </div>
         
        <!--   <div class="col-xs-6  center"><form action="logout.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:70px; margin-top: 10px; height: 70px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/logout2.png" style="width: 40px;margin-top: 2px;"></button></a></center></form></div> --></div>
          
        </div>
          
        </div>

                  
        </div>



       <!--  <p style="text-align:center;">
           <form action="/medicallife/" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['username']; ?>"><center><button class="btn button btn-lg text-center" type="submit"  style="width:250px; border-radius: 10px; background: #EA619E;"  value="Recetas">App</button></center></form>
           </p><br>

           <div class="row" >
          <div class="col-xs-6 center"><center>
          <a href="tel:+123456789"><button class="btn button btn-lg equalButton" style="width:70px; margin-top: 10px; height: 50px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/cel2.png" style="width: 35px;margin-top: -6px;"><br></button></a></center>
          </div>
         <div class="row" >
          <div class="col-xs-6 center"> </div>
          <div class="col-xs-6  center"><form action="logout.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:70px; margin-top: 10px; height: 50px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/logout2.png" style="width: 36px;margin-top: -6px;"></button></a></center></form></div></div>

        <p style="text-align:center;"> <a href="https://codepen.io/MrChriZ/pen/PooYmMO">hola</a>
            <form action="/archivos/index4.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['username']; ?>"><center><button class="btn button btn-lg text-center" type="submit"  style="width:250px; border-radius: 10px; background: #EA619E;"  value="Recetas">Mi Perfil</button></center></form>
           </p><br>
           <p style="text-align:center;">
            <form action="/archivos/index.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['username']; ?>"><center><button class="btn button btn-lg text-center"  style="width:250px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas">Recetas</button></center></form>
           </p> -->
    </div></div>
    <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   margin-top: 30px;
   width: 100%;
   height: 52px;
   background-color: white;
   color: black;
   text-align: center;

}
<style>
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 200px;
  border: 3px solid green; 
}


.equalButton {
  padding: 10px;
}
</style>

</style>
<div class="footer" style="margin-top: 2000px;">
  <div class="row" >
          <!-- <div class="col-xs-3  center"><form action="/dashboard.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;"  value="Recetas"><img src="img/menu2.png" style="width: 30px;margin-top: -8px;"><br></button></center></form></div> -->

         <!--  <div class="col-xs-4  center"><form action="/archivos/index4.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;"  value="Recetas"><img src="img/usuario3.png" style="width: 30px;margin-top: -8px;"></button></center></form></div> -->

         <!--  <div class="col-xs-6  center"> <form action="http://sybiml.com/apirest/recetas/index.php" method="get"><input type="hidden"  id="id_User" name="id_User" value="<?php echo $_SESSION['Id_Usuario']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/recetas3.png" style="width: 30px;margin-top: -6px;"><br></button></a></center></form>

        

          </div> -->
          <div class="col-xs-6  center"><form action="update2.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: none;" type="submit"  value="Recetas"> <img src="img/reiniciar.png" style="width:45px;margin-top: -8px;"></button></a></center></form></div>

          <div class="col-xs-6  center"><form action="logout.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 6px; height: 40px; border-radius: 10px; background: none;" type="submit"  value="Recetas"> <img src="img/exit.png" style="width: 45px;margin-top: -8px;"></button></a></center></form></div>
          
         

         

      <!--  

      <form action="http://medicallife.sybi.mx/apirest/recetas/index.php" method="post"><input type="hidden"  id="id_User" name="id_User" value="<?php echo $_SESSION['Id_Usuario']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/recetas3.png" style="width: 35px;margin-top: -8px;"></button></a></center></form>


       <div class="col-xs-3  center"><form action="/archivos/index5.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><input type="hidden"  id="valor2" name="valor2" value="<?php echo $_SESSION['Id_Usuario']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/recetas3.png" style="width: 35px;margin-top: -8px;"></button></a></center></form></div>


        <div class="col-xs-3  center"><form action="/archivos/index.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/recetas2.png" style="width: 30px;margin-top: -8px;"></button></a></center></form></div> -->


          <!--  <div class="col-xs-3  center"><form action="http://medicallife.sybi.mx/apirest/recetas/index.php" method="get"><<input type="hidden"  id="id_User" name="id_User" value="<?php echo $_SESSION['Id_Usuario']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/recetas2.png" style="width: 30px;margin-top: -8px;"></button></a></center></form></div> -->
<!-- 
           <div class="col-xs-6  center"><form action="update2.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Telefono']; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="img/reset2.png" style="width: 35px;margin-top: -8px;"></button></a></center></form></div> -->
        </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>
</html>
