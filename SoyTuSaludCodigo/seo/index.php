<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario SEO</title>

<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #F6B733;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 200px;
  font-size: 30px;
}

input[type=submit]:hover {
  background-color: black;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 60%;
  margin-left: auto;
  margin-right: auto;
}
</style>
</head>
<body>
<center>

<img src="img/sr.png" alt="Logotipo Sr Bang Bang" width="250">
</center>

<div class="container">
  <h3>Formulario de datos para SEO sitio web a construir</h3>
  <form action="insert.php" method="post">
    <label>Título</label>
    <input type="text" id="titulo" name="titulo" onkeyup="countChars2(this);" placeholder="Ingresa título de tu página">
    <p id="charNum2">60 carácteres restantes</p>


    <label >Descripción de tu página</label>
    <textarea id="descripcion" name="descripcion" onkeyup="countChars(this);" placeholder="Ingresa la descripción de tu página" style="height:100px"></textarea>
    <p id="charNum">300 carácteres restantes</p>

    <label >Palabras Clave</label>
    <textarea id="descripcion2" name="descripcion2" placeholder="Ingresa un mínimo de 10 palabras clave separadas por coma" style="height:100px"></textarea>
   

    <label for="lname">Frase Clave</label>
    <input type="text" id="frase" name="frase"  placeholder="Ingresa la frase clave de tu página">
<center>
    <input type="submit" value="Enviar">
    </center>
  </form>
</div>
<script type="text/javascript">
  function countChars(obj){
    var maxLength = 300;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 0){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">Te has excedido el límite de '+maxLength+' carácteres</span>';
    }else{
        document.getElementById("charNum").innerHTML = charRemain+' carácteres restantes';
    }
}

 function countChars2(obj){
    var maxLength = 60;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);
    
    if(charRemain < 0){
        document.getElementById("charNum2").innerHTML = '<span style="color: red;">Te has excedido el límite de '+maxLength+' carácteres</span>';
    }else{
        document.getElementById("charNum2").innerHTML = charRemain+' carácteres restantes';
    }
}


</script>

</body>
</html>
