<div class="category-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#tshirt" data-toggle="tab">Men</a></li>
								<li><a href="#blazers" data-toggle="tab">Women</a></li>
								<li><a href="#sunglass" data-toggle="tab">Giày</a></li>
								<li><a href="#kids" data-toggle="tab">Kids</a></li>
								<li><a href="#poloshirt" data-toggle="tab">Sales</a></li>
							</ul>
						</div>
						<div class="tab-content">
						<?php
							//<!--  tshirt-->
							include("tshirt.php");
							//<!-- blazers-->
							include("blazers.php");
							//<!-- sunglass-->
							include("sunglass.php");
							//<!-- kid-->
							include("kids.php");
							//<!-- poloshirt -->
							include("poloshirt.php");
						
						?>
							
						</div>
					</div>