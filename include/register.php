<?php
include("config.php");
@session_start();
if(isset($_POST["register"]))
{
	$name=$_POST["name"];
	//$name=EncodeSpecialChar($name);
	$email=$_POST["email"];
	//$email=EncodeSpecialChar($email);	
	$pass=md5($_POST["pass"]);
		{    
    	$sql="INSERT INTO account(id,name,email,pass) VALUES('','$name','$email','$pass');";
		$kq=mysql_query($sql);
		if(!$kq)
		{
			echo "<script>alert('Thông tin bạn nhập không chính xác!');window.location='../login.php';</script>";
		}
		else 
		{
			//luu session
			  $_SESSION['email'] = $email;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                echo "<script>alert('chính xác!');window.location='../index.php';</script>";
		}	 
      
	}
}



?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />