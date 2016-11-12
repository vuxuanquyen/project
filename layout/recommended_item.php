<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Sản Phẩm bán chạy</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
								<?php
                                          include("include/config.php");
                                           @$sql= "select * from product where tinhtrang='hot'  ";
                                           @$result=mysql_query($sql);
                                          while(@$row = mysql_fetch_array($result)) {
                            	            ?>
									 <div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img style="width: 175px;height: 154px;" src="<?php  echo $row['anh']; ?>" alt="" />
													<h2>$<?php echo $row['gia']; ?></h2>
													<p><?php  echo $row['ten']; ?></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									 <?php   } ?>
								</div>
								<div class="item">	
										
								<?php
                                          include("include/config.php");
                                           @$sql= "select * from product where category='women' and id>10  ";
                                           @$result=mysql_query($sql);
                                          while(@$row = mysql_fetch_array($result)) {
                            	            ?>
									 <div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img style="width: 175px;height: 154px;" src="<?php echo $row['anh']; ?>" alt="" />
													<h2>$<?php echo $row['gia']; ?></h2>
													<p><?php echo $row['ten']; ?></p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									 <?php   } ?>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
</div>