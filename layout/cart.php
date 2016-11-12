<?php
@session_start();
include("include/config.php");
?>


			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					
				   <?php  
                   
					if(@$_SESSION['cart']){
                        for($i=0;$i<count($_SESSION['cart']);$i++){

	                      @$idproduc=$_SESSION['cart'][$i]['id'];
	                       $sql = "select * from product where idproduct='$idproduc'";
	                         $result = mysql_query($sql);
                             	if(!$result) {
		                        echo "cau truy van sai";
	                            }
                                 while($row = mysql_fetch_array($result)){
                                    ?>
						<tr>
							<td class="cart_product">
								<a href=""><img style="width:110px;height:110px;" src="<?php echo $row['anh']; ?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href=""><?php echo $row['ten'];  ?></a></h4>
								<p>Web ID: <?php  echo $row['idproduct']; ?></p>
							</td>
							<td class="cart_price">
								<p>$<?php echo $row['gia'] ?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="include/themcart.php?id=<?php echo $row['idproduct'];?>&i=<?php echo $i ;?>"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="<?php echo $_SESSION['cart'][$i]['soluong'] ?>" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="include/giamcart.php?id=<?php echo $row['idproduct'];?>&i=<?php echo $i ?>"> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$<?php  $sum=$_SESSION['cart'][$i]['soluong']*$row['gia']; echo $sum; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="deletecart.php?id=<?php echo $row['idproduct'];?>&i=<?php echo $i ;?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php
                    }
                    }
                    }
                    
                    ?>
					
					</tbody>
				</table>
			</div>
	