<?php
session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];//lấy idproduct

   unset($_SESSION['cart'][$id]);
  header("Location:cart.php");
}
?>