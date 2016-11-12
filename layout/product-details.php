<?php  
						include("include/config.php");
						$sql = "select * from product where idproduct='$idproduct' ";
						$result= mysql_query($sql);
						while($row=mysql_fetch_array($result)){
						?>
              <div class="product-details"><!--product-details-->
              
						<div class="col-sm-5">
							<div class="view-product">
							<div class="hovergallery">	<img src="<?php echo $row['anh'];  ?>" alt="" /></div>
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh'];  ?>" alt=""></a>
										  <a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh1'];  ?>" alt=""></a>
										  <a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh2'];  ?>" alt=""></a>
										</div>
										<div class="item">
										<a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh'];  ?>" alt=""></a>
										  <a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh1'];  ?>" alt=""></a>
										  <a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh2'];  ?>" alt=""></a>
										</div>
										<div class="item">
										  <a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh'];  ?>" alt=""></a>
										  <a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh1'];  ?>" alt=""></a>
										  <a href=""><img style="width:84px;height:84px;" src="<?php echo $row['anh2'];  ?>" alt=""></a>
										</div>
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						<div class="col-sm-7">
						
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $row['ten']  ?></h2>
								<p>Web ID:<?php echo $row['idproduct'];  ?></p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>US<?php echo $row['gia'] ?>$</span>
									<label>Quantity:</label>
									<input type="text" value="1" />
									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>
								
								<p><b>Condition:</b><?php  echo $row['tinhtrang'];  ?></p>
								<p><b>Brand:</b><?php  echo $row['nhanhieu'] ?></p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
						
					</div>
					<?php } ?>