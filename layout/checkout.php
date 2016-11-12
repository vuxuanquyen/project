<?php
@session_start();

?>
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->
			
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-8 clearfix">
						<div class="bill-to">
							<p>Info</p>
							<div class="form-one">
								<form method="POST" action="include/checkout.php" >
									<input type="text" name="name" placeholder=" Name *">
									
									<input type="text" name="address" placeholder="Address ">

									<input type="text"  name="phone" placeholder="Phone *">
									<input type="text" name="mphone" placeholder="Mobile Phone">
									<input type="text" name="note" placeholder="Note Order Shopping">
									<button type="submit" name="order" class="btn btn-default">Đặt Hàng</button>
								</form>
							</div>
							
					</div>
									
				</div>
				
			</div>

		</div>
		<h2>Prodcut</h2>
		<?php
               include("cart.php");
			?>
	</section> <!--/#cart_items-->