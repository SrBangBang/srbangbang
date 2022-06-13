<?php
    session_start();
    if(!isset($_SESSION["Id_Operador"]) AND !isset($_SESSION["Id_Cliente"]) AND !isset($_SESSION["Telefono"]) AND !isset($_SESSION["Nombre"])) {
        header("Location: login.php");
        exit();
    }
?>
