<?php
session_start();
  
  // $id =$_GET['id'];
    $i =$_GET['i'];
     
     $_SESSION['cart'][$i]['soluong'] +=1 ;
       
    $_SESSION["cart"] = array_values($_SESSION["cart"]);//lưu giỏ hàng còn lại
      
   header("Location:../cart.php");
    exit();
?>