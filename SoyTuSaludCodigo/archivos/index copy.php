<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

   <script type="text/javascript" src="https://testing.srbangbang.com/js/recetas.js"></script>

    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-auto">
                    <center>
                        <a href="../dashboard.php">
                     <button type="button" style="color: white; background: #EA619E;" class="btn">
                        Regresar
                    </button></a>
                 <h1 >Mis Recetas</h1></center>
                   
                </div>
            </div>
            <div class="row justify-content-md-center">
                
                <div class="col-sm">
                    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Nuevo
                    </button> -->

                     

                    <table class="table mt-2">
                        <thead>
                            <tr>
                                
                                <th scope="col">Teléfono</th>
                                <th scope="col"># Empleado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

include('conexion.php');

$tmp = array();
$res = array();
$valor=$_POST['valor'];
$valor2=$_POST['valor2'];
echo $valor."<br>";

echo $valor2;
?>

 <a href="https://shot.screenshotapi.net/screenshot?&url=http%3A%2F%2Fmedicallife.sybi.mx%2Fsystem%2Fmedicalcenter%2FImprimeReceta.php%3Freceta%3D2511893%26ideventocita%3D2342819%26idevento%3D2511903%26idusuarioweb%3D<?php echo $valor2  ?>&output=image&file_type=pdf&pdf_options%5Bformat%5D)=Letter&pdf_options%5Bmedia%5D)=print&pdf_options%5Blandscape%5D)=true&pdf_options%5Bprint_background%5D)=false&wait_for_event=load"  download=""><button class="btn btn-lg text-center"  style="width:100px; border-radius: 10px; color: white; background: #EA619E; font-size: 15px;"   value="PDF">Descargar</button></a>
<?php
$sel = $con->query("SELECT * FROM files where title=$valor LIMIT 20");





                             while ($row = $sel->fetch_assoc()) {
                             $myArray[] = $row;
    
    
                              json_encode($myArray, JSON_UNESCAPED_UNICODE);

                              ?>
                                <tr>
                                  
                                    <td><?php echo $myArray[0]['title']; ?></td>
                                    <td><?php echo $myArray[0]['description']; ?></td>
                                    <td>
                                        <!-- <a href="http://pdfmyurl.com/?url=http://medicallife.sybi.mx/system/medicalcenter/ImprimeReceta.php?receta=2595980&ideventocita=2454269&idevento=2595980&idusuarioweb=1573795&app=1" download><button class="btn btn-lg text-center"  style="width:100px; border-radius: 10px; color: white; background: #EA619E; font-size: 15px;"   value="PDF">Descargar 1</button></a> --><!-- <br><br> -->
                                        <br><br>
                                    </center>
                                    </center>
                                    </td>
                                     <br><br>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
                                <label for="title">Titulo</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Descripcion</label>
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
   margin-bottom: -6px;
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
      <div class="col"><a href="../dashboard.php"><button class="btn button btn-lg equalButton" style="width:60px; height: 40px; border-radius: 10px; background: #EA619E;" type="submit"  value="Recetas"> <img src="../img/menu2.png" style="width: 30px;"></button></a></div>
      <div class="col"><form action="/archivos/index4.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php  echo $valor; ?>"><center><button class="btn button btn-lg equalButton" type="submit"  style="width:60px;  height: 40px; border-radius: 10px; background: #EA619E;"  value="Recetas"><img src="../img/usuario2.png" style="width: 30px;"></button></center></form></div>
      <div class="col"><form action="/archivos/index.php" method="post"><input type="hidden"  id="valor" name="valor" value="<?php  echo $valor; ?>"><center><button class="btn button btn-lg equalButton" style="width:60px;  height: 40px; border-radius: 10px; background: #902954;" type="submit"  value="Recetas"> <img src="../img/recetas2.png" style="width: 30px;"></button></a></center></form></div>
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
                                            alert(msg);
                                            $('#exampleModal').modal('hide')
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
