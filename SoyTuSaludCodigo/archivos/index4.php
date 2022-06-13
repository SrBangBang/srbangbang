<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <center>
                        <center><img src="../img/logo2.png" width="200" alt=""></center>
                 <h3 style="background: #902954; color: white;">Mi perfil</h3></center>

                   
                </div>
            </div>
            <div class="row justify-content-md-center">
                
                <div class="col-sm">
                   <!--  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Nuevo
                    </button> -->

                     

                     <?php

include('conexion.php');
$tmp = array();
$res = array();
$valor=$_POST['valor'];
$sel = $con->query("SELECT * FROM usersSoytusalud where Telefono=$valor");
while ($row = $sel->fetch_assoc()) {
      
      
$myArray[] = $row;
    
json_encode($myArray, JSON_UNESCAPED_UNICODE);

       $hola = $myArray[0]['Nombre'];
       $separador = " ";
       $separada = explode($separador, $hola);
        $separada[0];
        $separada[2];
        $separada[4];
       $hola3=$myArray[0]['I_tipoTarjeta'];
       
       echo "<div class='row'>";
       echo "<div class='col-sm w-100' style='font-size:20px; color:#424949;'>";
       echo "<div>&nbsp;&nbsp;&nbsp;&nbsp;<span class='font-weight-bold'>Teléfono:</span><br>&nbsp;&nbsp;&nbsp;&nbsp;".$myArray[0]['Telefono']."</div>";
       echo "<div>&nbsp;&nbsp;&nbsp;&nbsp;<span class='font-weight-bold'>Nombre:</span><br>&nbsp;&nbsp;&nbsp;&nbsp;".$hola."</div>";
        echo "<div>&nbsp;&nbsp;&nbsp;&nbsp;<span class='font-weight-bold'>Email:</span><br>&nbsp;&nbsp;&nbsp;&nbsp;".$myArray[0]['Email']."</div>";
        echo "<div>&nbsp;&nbsp;&nbsp;&nbsp;<span class='font-weight-bold'>Folio Tarjeta:</span><br>&nbsp;&nbsp;&nbsp;&nbsp;".$myArray[0]['Folio_Tarjeta']."</div>";
        $hola2=$myArray[0]['Folio_Tarjeta'];

       echo "</div>";
       echo "</div><br><br><br><br>";
       $valor=$myArray[0]['Id_Usuario'];

       $valor2=$myArray[0]['Telefono'];

       $hola4=$myArray[0]['Email'];
    
}

 ?>


  <?php 

  $sql = "SELECT COUNT(`Folio_Tarjeta`) AS total_name FROM `usersSoytusalud` where Folio_Tarjeta=$hola2";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_object($result) ;
  $registro=$row->total_name;
 // echo "<center>Registros con la tarjeta al momento: " . $registro."</center>";

if ($hola3=='1') {
  
   if ($registro=='4') {
    echo "<style type='text/css'>
     .boton {
 background:#902954; color: white;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 80%;
  display:none;
}


 </style>";
  }else{
    echo "<style type='text/css'>
     .boton {
 background:#902954; color: white;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 80%;
  display:block;
}
 </style>";

  }


}elseif ($hola3=='2') {
    echo "<style type='text/css'>
     .boton {
 background:#902954; color: white;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 80%;
  display:none;
}


 </style>";


}else{
  

}

 
?>
<?php 

 echo "<style type='text/css'>
     .boton2 {
 background:#902954; color: white;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  width: 80%;
  display:block;
}


 </style>"; ?>

<center>
<a href='../update3.php?Nombre=<?php echo $hola; ?>&Telefono=<?php echo $valor2; ?>&Email=<?php echo $hola4; ?>&FolioTarjeta=<?php echo $hola2; ?>'><button class='boton2' >Actualizar Información</button><br>
    <a href='http://sybiml.com/system/RegistroPaciente/formCitaapp.php?id_Cliente=69&id_Operador=6764&tipoKey=71&I_tipoTarjeta=2&FolioTarjeta=<?php echo $hola2; ?>'><button class='boton' >Agregar Beneficiario</button></a><center>



    <?php
;
?>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form enctype="multipart/form-data" id="form1">
                            <div class="form-group">
                                <label for="title">Número de Tarjetahabiente</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Médico</label>
                                <input type="text" class="form-control" id="description" name="description">
                            </div>
                            <div class="form-group">
                                <label for="description">archivo</label>
                                <input type="file" class="form-control" id="file" name="file">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary" onclick="onSubmitForm()">Cuardar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalPdf" tabindex="-1" aria-labelledby="modalPdf" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ver archivo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe id="iframePDF" frameborder="0" scrolling="no" width="100%" height="500px"></iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>
            </div>
        </div>
          <style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   margin-top: 40px;
   width: 100%;
   height: 60px;
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
  padding: 2px;
}
</style>

</style>
<div class="footer">
     <div class="row">
      <div class="col"><a href="../dashboard.php"><button class="btn button btn-lg equalButton" style="width:60px; height: 40px; border-radius: 10px; background: none;" type="submit"  value="Recetas"> <img src="../img/men.png" style="width: 40px;"></button></a></div>
      <div class="col"><form action="../update2.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $valor2 ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:60px;  height: 40px; border-radius: 10px; background: none;"  value="Recetas"><img src="../img/reiniciar.png" style="width: 40px;"></button></center></form></div>

      <div class="col"><form action="../logout.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php echo $_SESSION['Id_Usuario']; ?>"><input type="hidden"  id="valor2" name="valor2" value="<?php echo $hola2; ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:60px; height: 40px; border-radius: 10px; background: none;"  value="Recetas"><img src="../img/exit.png" style="width:40px; margin-top:-6px ;"></button></center></form></div>
      
    </div>
</div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script>
                            function onSubmitForm() {
                                var frm = document.getElementById('form1');
                                var data = new FormData(frm);
                                var xhttp = new XMLHttpRequest();
                                xhttp.onreadystatechange = function () {
                                    if (this.readyState == 4) {
                                        var msg = xhttp.responseText;
                                        if (msg == 'success') {
                                           swal({ title: 'Éxito',
      icon: 'success',
     text: 'Mensaje enviado y estado del paquete actualizado',

     type: 'success'}).then(okay => {
       if (okay) {
      location.reload();
      }
    });
                                            $('#exampleModal').modal('hide');

                                        } else {
                                            alert(msg);
                                        }

                                    }
                                };
                                xhttp.open("POST", "upload.php", true);
                                xhttp.send(data);
                                $('#form1').trigger('reset');
                            }
                            function openModelPDF(url) {
                                $('#modalPdf').modal('show');
                                $('#iframePDF').attr('src','<?php echo 'https://' . $_SERVER['HTTP_HOST'] .  '/../archivos/' ; ?>'+url);
                            }
        </script>

    </body>
</html>
