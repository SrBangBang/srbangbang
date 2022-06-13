<?php
session_start();
if (!isset($_SESSION['id_AdminSessionML'])) {//no hay session
  header('location: login.php');
    exit();
}else{//hay session
    
}
?>
