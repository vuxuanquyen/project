<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới</h2>
						<?php  
						include("include/config.php");
						$sql = "select * from product  ";
						$result= mysql_query($sql);
						while($row=mysql_fetch_array($result)){	
						?>
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img  src="<?php echo $row['anh'] ?>" alt="" />
											<h2>$<?php echo $row['gia'] ?></h2>
											<p><a href="product.php?id=<?php echo $row['idproduct'] ?> "><?PHP echo $row['ten']; ?> </a></p>
										 <a href="cart.php?id=<?php echo $row['idproduct'] ?> " class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									<!--	<div class="product-overlay">
											<div class="overlay-content">
												<h2>$<?php echo $row['gia'] ?></h2>
												<p><?php echo $row['ten'] ?></p>
												<a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>-->
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
									</ul>
								</div>
							</div>
						</div>
					
					<?php } ?>
						
					</div>