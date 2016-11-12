	<?php
	$now = getdate(); 
	$day1=$now["mday"] . "." . $now["mon"] . "." . $now["year"]; 
	$day= date("Y-m-d", strtotime($day1));  
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$gio = date('H:i:s');
	 $id=$_GET['id'];
	 if(isset($_POST['dang'])){
	 	$name=$_POST['name'];
	 	$noidung=$_POST['noidung'];
	 }
	 include("config.php");
  

	 @$sql= " insert into comment values('','$name','$gio','$day','$noidung','$id') ";
	 @$result=mysql_query($sql);
	 
	 	echo "<script>alert('Cảm ơn bạn đã Reviews sản phẩm!');window.location='../index.php';</script>";

	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />