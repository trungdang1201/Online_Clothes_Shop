<?php $this->view('header', $data); ?>

<section id="slider">
	<!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider-carousel" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
						<li data-target="#slider-carousel" data-slide-to="1"></li>
						<li data-target="#slider-carousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img src="<?php echo ASSETS . THEME ?>images/home/banner/banner3.jpeg" class="banner img-responsive" alt="" />
						</div>
						<div class="item">
							<img src="<?php echo ASSETS . THEME ?>images/home/banner/banner1.jpeg" class="banner img-responsive" alt="" />
						</div>
						<div class="item">
							<img src="<?php echo ASSETS . THEME ?>images/home/banner/banner2.jpeg" class="banner img-responsive" alt="" />
						</div>
					</div>

					<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>
<!--/slider-->

<section>
	<div class="container">
		<div class="row">

	<?php $this->view('sidebar.inc',$data);?>
			<div class="col-sm-9 padding-right">
				<div class="features_items">
					<!--features_items-->
					<h2 class="title text-center">Features Items</h2>

					<?php if (is_array($ROWS)) : ?>
						<?php foreach ($ROWS as $row) : ?>
							<!-- 1 product -->
								<?php $this->view("product.inc",$row);?>
							<!-- end -->
						<?php endforeach; ?>
					<?php endif; ?>

				</div>
				<!--features_items-->

				<div class="recommended_items">
					<!--recommended_items-->
					<h2 class="title text-center">recommended items</h2>

					<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<?php $recommend1 = array(0, 1, 2); ?>
								<?php foreach ($recommend1 as $i): ?>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $ROWS[$i]->image ?>" alt="" />
												<h2><?= $ROWS[$i]->price ?> ₫</h2>
												<p><?= $ROWS[$i]->description ?></p>
												<a href="<?=ROOT?>add_to_cart/<?= $ROWS[$i]->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
							<div class="item">
								<?php $recommend2 = array(3, 5, 6); ?>
								<?php foreach ($recommend2 as $i): ?>
								<div class="col-sm-4">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<img src="<?php echo $ROWS[$i]->image ?>" alt="" />
												<h2><?= $ROWS[$i]->price ?> ₫</h2>
												<p><?= $ROWS[$i]->description ?></p>
												<a href="<?=ROOT?>add_to_cart/<?= $ROWS[$i]->id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
				<!--/recommended_items-->

			</div>
		</div>
	</div>
</section>

<?php $this->view('footer', $data); ?>
