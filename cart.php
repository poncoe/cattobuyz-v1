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
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>

			<!-- Content -->

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

					<?php
					$query = mysqli_query($db, "SELECT * FROM cart");
					while ($row = mysqli_fetch_assoc($query)) {
					$img = "images/product/".$row['img'];
						?>

					<tbody>
						<tr>
							<td class="cart_product">
								<a href=""><img src='<?php echo $img ?>' height="150px" width="150px" alt=""></a>
							</td>
							<td class="cart_description">
								<p style="visibility: hidden;"><a href=""><?php echo $row['id'];?></a></p>
								<h4><a href=""><?php echo $row['nameproduct'];?></a></h4>
							</td>
							<td class="cart_price">
								<p>$<?php echo $row['price'];?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="deletedatacart.php?id=<?php echo $row['id']; ?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						</tr>
						<?php
					}
						?>
					</tbody>
				</table>
			</div>

			<!-- Content -->

		</div>
	</section> <!--/#cart_items-->

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">

				</div>
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li>Cart Sub Total <span>$<?php $query = mysqli_query($db, "SELECT SUM(price) FROM cart"); $row = mysqli_fetch_assoc($query); echo $row['SUM(price)'];?></span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Total <span>$<?php $query = mysqli_query($db, "SELECT SUM(price) FROM cart"); $row = mysqli_fetch_assoc($query); echo $row['SUM(price)'];?></span></li>
						</ul>
							<a class="btn btn-default check_out" href="checkoutsuccess.php">Check Out</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/#do_action-->

    <?php include 'layout/footer.php';?>
</body>
</html>