<?php
session_start();
  
   //$id =$_GET['id'];
    $i =$_GET['i'];
    if($_SESSION['cart'][$i]['soluong'] >=1){
         $_SESSION['cart'][$i]['soluong'] -=1 ;
          $_SESSION["cart"] = array_values($_SESSION["cart"]);//lưu giỏ hàng còn lại
          header("Location:../cart.php");
          exit();
    }
     if($_SESSION['cart'][$i]['soluong'] =0){
     	$_SESSION["cart"] = array_values($_SESSION["cart"]);//lưu giỏ hàng còn lại
    
     }
      header("Location:../cart.php");
      exit(); 
     
?>