<?php
include("config.php");
@session_start();
if(isset($_POST["login"]))
{
	$email=$_POST["email"];
	$pass=md5($_POST["pass"]);
	
	if ($email == "" || $pass =="") {
			echo "email hoặc pass bạn không được để trống!";
		}else{
			$sql = "select * from account where email = '$email' and pass = '$pass' ";
			$query = mysql_query($sql);
			$num_rows = mysql_num_rows($query);
			if ($num_rows==0) {
				echo "<script>alert('Thông tin bạn nhập không chính xác!');window.location='../login.php';</script>";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['email'] = $email;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                echo "<script>alert('chính xác!');window.location='../index.php';</script>";
				
			}
	
}
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />