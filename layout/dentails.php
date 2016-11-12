<div class="tab-pane fade" id="details" >
                   <?php
                       include("include/config.php");
                       $sql = "select * from product where tinhtrang='hot'";
                       $result = mysql_query($sql);
                       while($row = mysql_fetch_array($result)) {
                    ?>
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img style="width: 175px;height: 154px;" src="<?php echo $row['anh'];  ?>" alt="" />
												<h2>$<?php echo $row['gia'] ?></h2>
												<p><a href=""><?php echo $row['ten'] ;?></a></p>
												<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
											</div>
										</div>
									</div>
								</div>
					<?php  } ?>
</div>