<?php $this->view("header",$data); ?>

	<section>
		<div class="container">
			<div class="row">
				<?php $this->view('sidebar.inc',$data)?>
				<div class="col-sm-9 padding-right">
					<?php if($ROW):?>
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?=ROOT .$ROW->image?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
										<div class="item active">
										  <a href=""><img src="<?=ROOT .$ROW->image?>" alt="" /></a>
										</div>

										<?php if ($ROW->image2): ?>
										<div class="item">
										<a href=""><img src="<?=ROOT .$ROW->image2?>" alt="" /></a>
										</div>
										<?php endif; ?>

										<?php if ($ROW->image3): ?>
										<div class="item">
										<a href=""><img src="<?=ROOT .$ROW->image3?>" alt="" /></a>
										</div>
										<?php endif; ?>

										<?php if ($ROW->image4): ?>
										<div class="item">
										<a href=""><img src="<?=ROOT .$ROW->image4?>" alt="" /></a>
										</div>
										<?php endif; ?>
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
								<h2><?=$ROW->description?></h2>
								<p>Web ID: 1089772</p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span><?=$ROW->price?> ₫</span>
									<label>Quantity:</label>
									<input type="text" value=<?=$ROW->quantity?>  readonly/>
									<a href="<?=ROOT?>add_to_cart/<?= $ROW->id?>">
										<button type="button" class="btn btn-fefault cart">
											<i class="fa fa-shopping-cart"></i>
											Add to cart
										</button>
									</a>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b> Dolce & Banana</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
								<li><a href="#tag" data-toggle="tab">Tag</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >

							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								
							</div>
							
							<div class="tab-pane fade" id="tag" >

							</div>
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2021</a></li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="" ></textarea>
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
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
													<img src="<?php echo ROOT . $ROWS[$i]->image ?>" alt="" />
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
													<img src="<?php echo ROOT . $ROWS[$i]->image ?>" alt="" />
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
					
					<?php else: ?>
						<div style ="padding:1 em;background-color:grey;color:white;margin:1em;text-align:center"><h2>Không có sản phẩm này</h2></div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	
<?php $this->view("footer",$data); ?>
