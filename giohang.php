<?php
include("include/config.php");

?>
<?php
include("include/config.php");
@session_start();
if(isset($_GET['id'])){
    $id=$_GET['id'];//lấy idproduct
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
   
}
?>
