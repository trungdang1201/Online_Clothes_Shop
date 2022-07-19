<?php $this->view("header", $data); ?>

<?php

if (isset($errors) && count($errors) > 0) {

	echo "<div>";
	foreach ($errors as $error) {

		echo "<div class='alert alert-danger' style='padding:5px;max-width:500px;margin:auto;text-align:center;'>$error</div>";
	}
	echo "</div>";
}

?>
<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li class="active">Check out</li>
			</ol>
		</div>
		<!--/breadcrums-->


		<?php if (is_array($ROWS)) : ?>

			<div class="register-req">
				<p>Fileds with a * are required</p>
			</div>
			<!--/register-req-->

			<?php

			$address1 		= "";
			$address2 		= "";
			$phone 			= "";
			$message 		= "";

			if (isset($POST_DATA)) {

				extract($POST_DATA);
			}

			?>

			<form method="post">
				<div class="shopper-informations">
					<div class="row">

						<div class="col-sm-8 clearfix">
							<div class="bill-to">
								<p>Bill To</p>
								<div class="form-one">

									<input name="address1" value="<?= $address1 ?>" class="form-control" type="text" placeholder="Address 1 *" autofocus="autofocus" required><br>
									<input name="address2" value="<?= $address2 ?>" class="form-control" type="text" placeholder="Address 2"><br>

								</div>
								<div class="form-two">


									<input name="phone" value="<?= $phone ?>" class="form-control" type="text" placeholder="Mobile Phone *" required><br>
									<br>

								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="order-message">
								<p>Shipping Order</p>
								<textarea name="message" placeholder="Notes about your order, Special Notes for Delivery" rows="16"><?= $message ?></textarea>

							</div>
						</div>
					</div>

					<input type="submit" class="btn btn-primary pull-right" value="Continue >" name="">

				</div>
			</form>


		<?php else : ?>
			<h3 style="text-align: center;">
				Please add some items in the cart first!
			</h3>
		<?php endif; ?>

		<a href="<?= ROOT ?>cart">
			<input type="button" class="btn btn-primary pull-left" value="< Back to cart" name="">
		</a>
	</div>
</section>
<!--/#cart_items-->
<br><br>


<?php $this->view("footer", $data); ?>
