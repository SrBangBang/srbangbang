<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index por AVG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div class="container">
     <div class="row">
   <div class="col-xs-12  ">
   <style>.contenedor{
    position: relative;
    display: inline-block;
    text-align: center;
}
.texto-encima{
    position: absolute;
    top: 14px;
    left: 230px;
}
.centrado{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}</style>

<?php 
$valor=$_POST['valor2']; 
?>
<div class="contenedor">
  <img src="assets/soytulsalud.jpeg" style="width: 100%;" alt="" />
  <div class="texto-encima" style=" color: #972C5A;background: white; height: 20px;"><?php echo " Tarjeta: ".$valor." "; ?></div>
  
</div>
   
<br><br>
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
echo "<style>.id{display:none;}</style>";  // code...

echo "<div class='container' style='margin-left:15px;'>
  <div class='row'>
      <div class='col-xs-6'><img src='img/1.jpg' style='width: 80%;' height='120' ></div>
       <div class='col-xs-6'><img src='img/5.jpg' style='width: 80%;' height='120' ></div>
    </div><br>
    <div class='row'>
      <div class='col-xs-6'><img src='img/2.jpg' style='width: 80%;' height='120' ></div>
       <div class='col-xs-6'><img src='img/4.jpg' style='width: 80%;' height='120' ></div>
    </div>
</div>";



}




?>

  <div class="row id">
    <div class="col-sm  text-center"><center>
    <div class="row">
      <div class="col-xs-6"><img src="img/1.jpg" style="width: 80%;" height="auto" alt=""></div>
       <div class="col-xs-6"><img src="img/5.jpg" style="width: 80%;" height="auto" alt=""></div>
    </div><br>
    <div class="row">
      <div class="col-xs-6"><img src="img/2.jpg" style="width: 80%;" height="auto" alt=""></div>
       <div class="col-xs-6"><img src="img/4.jpg" style="width: 80%;" height="auto" alt=""></div>
    </div><br>
    <!-- <div class="col-sm  text-center"><center>
      <div class="text-center"  style=" width: 50px;
     height: 50px;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     background: #EA619E;">
      <i  class="fa  fa-user fa-lg"style="margin-top: 18px; color:#FFFFFF; width:20px; height:20px;"></i></div></center>
                                    <h3  name="informacion" class="service-title" style="font-size:15px;">Revisión Dental (Gratuita)</h3></div>
    </div>
    <div class="col-sm  text-center"><center>
      <div class="text-center"  style=" width: 50px;
     height: 50px;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     background: #EA619E;">
      <i  class="fa  fa-plus-circle fa-lg"style="margin-top: 18px; color:#FFFFFF; width:20px; height:20px;"></i></div></center>
                                    <h3  name="informacion" class="service-title" style="font-size:15px;">2 Limpiezas Dentales (Anual)</h3></div>
    </div>
   <div class="col-sm  text-center"><center>
      <div class="text-center"  style=" width: 50px;
     height: 50px;
     -moz-border-radius: 50%;
     -webkit-border-radius: 50%;
     border-radius: 50%;
     background: #EA619E;">
      <i  class="fa  fa-eye fa-lg"style="margin-top: 18px; color:#FFFFFF; width:20px; height:20px;"></i></div></center>
                                    <h3  name="informacion" class="service-title" style="font-size:15px;">Exámen de la Vista (Gratuita)</h3></div>
    </div> -->
  </div>
</div>


<div class="col-xs-12" style="background:white; color: #424949;">

  <center><h3><hr>Checa el Video<hr style="color:white;"></h3></center>
<video class="embed-responsive-item" width="100%" controls poster="/img/st.png">
    <source src="video/Servicios.mp4"  type="video/mp4"> </source>
  </video>
  </div>
  <div class="col-xs-12" style="margin-bottom: 60px; background: white; color: #424949;">

  <center><h3><hr><i class="fa fa-map-marker"></i>Sucursal donde es válida la tarjeta<br><hr style="color: #424949;"></h3></center>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15063.989560831687!2d-99.1650648!3d19.2824797!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0642944f14fde57!2sSoy%20tu%20salud%20Tlalpan!5e0!3m2!1ses-419!2smx!4v1643219904606!5m2!1ses-419!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
 </div>


</div><br><br><br>

         
        
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
.center {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 50px;
/*  border: 3px solid green; */
}


.equalButton {
  padding: 10px;
}
</style>

<div class="footer">
  <center>
    <div class="col-xs-4  center"><!-- form action="../dashboard.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $valor; ?>">
    <button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="../img/app.png" style="width: 20px;"><br><span style="font-size: 10px; color: black">Menú Principal</span></button></form> --></div>
          <div class="col-xs-4  center">
<form action="../dashboard.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $valor; ?>">
    <button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px;" type="submit"  value="Recetas"> <img src="../img/men.png" style="width:40px; margin-top: -8px;margin-left:2px;"></button></form>
           </div>
          <div class="col-xs-4  center">
<!-- <form action="/archivos/index.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $valor; ?>">
    <button class="btn button btn-lg equalButton" style="width:60px; margin-top: 5px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="../img/recetas.png" style="width: 20px;"><br><span style="margin-left: -14px; font-size: 10px; color: black">Mis recetas</span></button></form> --></div>
</div>
</body>
</html>