<div class="tab-pane fade" id="blazers" >
         <?php
                            include("include/config.php");
                            @$sql= "select * from product where category='women'  ";
                            @$result=mysql_query($sql);
                            while(@$row = mysql_fetch_array($result)) {
                            	?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img style="width: 175px;height: 154px;" src="<?php echo $row['anh'];  ?>"  />
												<h2>$<?php echo $row['gia']; ?></h2>
												<p><a href="product.php?id=<?php echo $row['idproduct'] ?>"> <?php echo $row['ten']; ?></a></p>
												<a href="cart.php?id=<?php echo $row['idproduct'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
											
										</div>
									</div>
						
							</div>
							 <?php   } ?>							
</div>