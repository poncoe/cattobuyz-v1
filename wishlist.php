<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include 'layout/styles-scripts.php';?>
</head><!--/head-->

<body>
    <?php include 'layout/header.php';?>

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Wishlist</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/one.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Colorblock Scuba</a></h4>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
							</td>
						</tr>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-9">

				</div>
				<div class="col-sm-6">
				<a class="btn btn-default check_out" href="">Reset Wistlist</a>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

    <?php include 'layout/footer.php';?>
</body>
</html>