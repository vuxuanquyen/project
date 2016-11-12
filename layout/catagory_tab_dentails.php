<?php
$id=$_GET['id'];
@$sql = "select * from comment where idproduct='$id' ";
@$result = mysql_query($sql);
@$row= mysql_num_rows($result);

?>


<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews(<?php echo $row; ?>) </a></li>
							</ul>
						</div>
						<div class="tab-content">
							
						<?php
						  include("companyprofile.php");
						  include("tag.php");
						  include("dentails.php");
                          include("review.php");
						?>

						</div>
					</div>