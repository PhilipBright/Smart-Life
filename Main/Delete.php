<?php
include '../Components/connect.php';
session_start();
if(isset($_GET['product_id'])){
  $pid = $_GET['product_id'];
  foreach($_SESSION['cart'] as $key => $value){
    if($value['id'] == $pid){
        unset($_SESSION['cart'][$key]);
        break;
    }
}}
  header('Location: Cart.php'); ?>