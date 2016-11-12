<?php
session_start();
  $id =$_GET['id'];
  $i =$_GET['i'];
 foreach($_SESSION['cart'] as $key => $value) {
      if($value['id'] == $id) {
        unset($_SESSION['cart'][$key]); //xóa giở hàng với idproduct
        $_SESSION["cart"] = array_values($_SESSION["cart"]);//lưu giỏ hàng còn lại
       }
     }

     header("Location:cart.php");
    exit();
?>