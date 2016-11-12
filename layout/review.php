
<div class="tab-pane fade active in" id="reviews" >                     

								<div class="col-sm-12">
								    <?php
                                     include("include/config.php");
                                      $id=$_GET['id'];
                                        $sql =" SELECT * FROM comment WHERE idproduct='$id'";
                                        $result = mysql_query($sql);
                                        while($row = mysql_fetch_array($result))
                                    {
                                       ?>
									<ul>
										<li><a href=""><i class="fa fa-user"></i><?php echo $row['name']; ?></a></li>
										<li><a href=""><i class="fa fa-clock-o"></i><?php echo $row['gio']; ?></a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i><?php echo $row['thang'] ;?></a></li>
									</ul>
									<p><?php echo $row['noidung'] ;?></p>
									<?php } ?>
									<p><b>Write Your Review</b></p>
									
									<form action="include/review.php?id=<?php  echo $id; ?>" method="POST">
										<span>
										<input type="text" name="name" placeholder="Your Name"/>
										<!-- <input type="email" placeholder="Email Address"/> -->
										</span>
										<textarea name="noidung" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="submit" name="dang" class="btn btn-default pull-right">
											Đăng
										</button>
									</form>
								</div>					
</div>