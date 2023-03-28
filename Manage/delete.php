<?php 
    include '../Components/connect.php';
   
    $pid = $_GET['pid'];
    $sql = $db->prepare("DELETE FROM tbl_products WHERE product_id ='$pid'");    
    $sql->execute();
  
    header('Location: products.php');
 ?>
 <?php
  $uid = $_GET['uid'];
  $sql = $db->prepare("DELETE FROM tbl_users WHERE user_id ='$uid'");    
  $sql->execute();

  header('Location: manageUsers.php'); ?>