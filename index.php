<?php
require 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'layout/styles-scripts.php'; ?>
</head>

<body>
	<?php include 'layout/header.php'; ?>

	<section>
		<div class="container">
			<div class="row">

				<div class="col-sm-12 padding-right">
					<div class="features_items">
						<!--features_items-->
						<h2 class="title text-center">Latest Items</h2>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/product/catstarterkit.jpeg" alt="" />
										<h2>$60</h2>
										<p>Cat Starter Kit</p>
										<a href="product1-starterkit.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$60</h2>
											<p>Cat Starter Kit</p>
											<a href="product1-starterkit.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist1-starterkit.php"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-eye"></i>view item</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/product/makanankucing.jpeg" alt="" />
										<h2>$20</h2>
										<p>Cat Food</p>
										<a href="product2-catfood.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$20</h2>
											<p>Cat Food</p>
											<a href="product2-catfood.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist2-catfood.php"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-eye"></i>view item</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/product/smartfeeding.jpeg" alt="" />
										<h2>$128</h2>
										<p>Smart Feeder Water</p>
										<a href="product3-smartfeeder.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$128</h2>
											<p>Smart Feeder Water</p>
											<a href="product3-smartfeeder.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist3-smartfeeder.php"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-eye"></i>view item</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="images/product/petcargos.jpeg" alt="" />
										<h2>$80</h2>
										<p>Pet Cargo</p>
										<a href="product4-petcargo.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$80</h2>
											<p>Pet Cargo</p>
											<a href="product4-petcargo.php" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
									<img src="images/home/new.png" class="new" alt="" />
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="wishlist4-petcargo.php"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-eye"></i>view item</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div>

					<!--features_items-->

				</div>
			</div>
		</div>
	</section>

	<?php include 'layout/footer.php'; ?>
</body>

</html>