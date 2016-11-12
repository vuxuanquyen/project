<?php
include("config.php");
@session_start();
if(isset($_POST["order"]))
{
 $name=$_POST['name'];
 $address=$_POST['address'];
 $phone=$_POST['phone'];
 $mphone=$_POST['mphone'];
 $note=$_POST['note'];
 $acc=@$_SESSION['email'] ;
}
if(isset($_SESSION['email'])){
$soluong=0;
$idproduct="";
$gia = 0;
for($i=0;$i<count($_SESSION['cart']);$i++){
   @$soluong=  $_SESSION['cart'][$i]['soluong'];//số lượng của sp
  @$idproduct= $_SESSION['cart'][$i]['id'];//id sp
	$sql = "select * from product where idproduct='$idproduct'";
	$result=mysql_query($sql);
	while($row = mysql_fetch_array($result)){
		$sum= $row['gia']*$soluong;
	}
	$gia=$sum;
	$query="insert into checkout values('','$acc','$idproduct','$soluong','$gia','$name','$address','$phone','$mphone','$note')";
	$kq=mysql_query($query);
    
  }
}
else {
 echo "<script>alert('Bạn chưa đăng nhập!');window.location='../login.php';</script>";	
}
?>
<?php
unset($_SESSION['cart']);
 echo "<script>alert('Cảm ơn bạn đã mua sản phầm.nhân viên sẽ liên lạc với quý khách sau!');window.location='../index.php';</script>";
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />