<?php 

include('../Components/connect.php');
   session_start();
    session_unset();
    header('Location: ../Main/Home.php');
  
?>