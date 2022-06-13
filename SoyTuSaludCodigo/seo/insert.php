<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertar</title>
	 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!--Link bootsrap--> 
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
	<?php 
	include 'db.php';
   $titulo = $_POST['titulo'];
   $descripcion = $_POST['descripcion'];
   $descripcion2 = $_POST['descripcion2'];
   $frase = $_POST['frase'];

   

   
    
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
  //Insertar datos en la tabla principal
  // $sql = "INSERT INTO Sucursales_CDMX(Nombre,Direccion,Horario,Servicio1,Servicio2,Servicio3,Servicio4,Servicio5,Url,iframe)  VALUES ('$nombre', '$direccion', '$horario','$servicio1','$servicio2','$servicio3','$servicio4','$servicio5','$url','$iframe')";

   // $sql = "INSERT INTO Sucursales_EDOMEX(Nombre,Direccion,Horario,Servicio1,Servicio2,Servicio3,Servicio4,Servicio5,Url,iframe)  VALUES ('$nombre', '$direccion', '$horario','$servicio1','$servicio2','$servicio3','$servicio4','$servicio5','$url','$iframe')";

  //$sql = "INSERT INTO Sucursales_PUEBLA(Nombre,Direccion,Horario,Servicio1,Servicio2,Servicio3,Servicio4,Servicio5,Url,iframe)  VALUES ('$nombre', '$direccion', '$horario','$servicio1','$servicio2','$servicio3','$servicio4','$servicio5','$url','$iframe')";

  //$sql = "INSERT INTO Sucursales_GUANAJUATO(Nombre,Direccion,Horario,Servicio1,Servicio2,Servicio3,Servicio4,Servicio5,Url,iframe)  VALUES ('$nombre', '$direccion', '$horario','$servicio1','$servicio2','$servicio3','$servicio4','$servicio5','$url','$iframe')";

  //$sql = "INSERT INTO Sucursales_TLAXCALA(Nombre,Direccion,Horario,Servicio1,Servicio2,Servicio3,Servicio4,Servicio5,Url,iframe)  VALUES ('$nombre', '$direccion', '$horario','$servicio1','$servicio2','$servicio3','$servicio4','$servicio5','$url','$iframe')";

  //$sql = "INSERT INTO Sucursales_DURANGO(Nombre,Direccion,Horario,Servicio1,Servicio2,Servicio3,Servicio4,Servicio5,Url,iframe)  VALUES ('$nombre', '$direccion', '$horario','$servicio1','$servicio2','$servicio3','$servicio4','$servicio5','$url','$iframe')";

   //$sql = "INSERT INTO Sucursales_SURESTE(Nombre,Direccion,Horario,Servicio1,Servicio2,Servicio3,Servicio4,Servicio5,Url,iframe)  VALUES ('$nombre', '$direccion', '$horario','$servicio1','$servicio2','$servicio3','$servicio4','$servicio5','$url','$iframe')";

    $sql = "INSERT INTO SEO(Titulo,Descripcion,Palabras,Frase)  VALUES ('$titulo', '$descripcion', '$descripcion2','$frase')";





  if ($con->query($sql) === TRUE) {
    //Implementación de sweet alert
    echo "
  <script>    
    swal({ title: 'Datos enviado con éxito',
    icon: 'success',
   text: 'Las agregaremos en su sitio cuando se instale o configure',

   type: 'success'}).then(okay => {
     if (okay) {
      window.location.href = 'index.php';
    }
  });

  </script>";
  } else {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

  $con->close();

  

	 ?>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>