<?php
include("include/config.php");
@session_start();
?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];//get idproduct
    if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])){
        $count = count($_SESSION['cart']);
        $flag = false;
        for($i=0;$i<$count;$i++){
            if($_SESSION['cart'][$i]['id'] == $id){
                $_SESSION['cart'][$i]['soluong'] +=1;
                $flag = true;
                break;
            }
        }
        if($flag== false){
        $_SESSION['cart'][$count]['id']=$id;
         $_SESSION['cart'][$count]['soluong']=1;
        }
    }
    else {
        $_SESSION['cart']= array();
        $_SESSION['cart'][0]['id']=$id;
         $_SESSION['cart'][0]['soluong']=1;
    }
   
    header("Location:index.php");
    exit();
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<!--/header_top-->
		<?php  include("layout/header_top.php") ; ?>
		<!--/header-middle-->
	    <?php  include("layout/header_middle.php") ; ?>
		<!--/header-bottom-->
		<?php  include("layout/header-bottom.php"); ?>
	</header><!--/header-->
	
	<!--/slider-->
	<?php// include("layout/slider.php") ;?>
	<!--- left-->
	
	
	<section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Shopping Cart</li>
                </ol>
            </div>
	<?php
    include("layout/cart.php");
    ?>	
    </div>
    </section> <!--/#cart_items-->
	<?php  include("layout/bt_cart.php") ;?>
	
	
   <?php  include("layout/footer.php")   ?>
  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
