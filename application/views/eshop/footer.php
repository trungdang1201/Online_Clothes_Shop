<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-3">
						<div class="footer-info">
							<h2>DOLCE & BANANA</h2>
							<p>Always committing to quality and prestige, we brings you a minimalism lifestyle with our fashionate products.</p>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="col-sm-6">
							<div class="footer-info">
								<h2>ADDRESS</h2>
								<p>Dai Co Viet, Hai Ba Trung, Ha Noi</p>
								<h2>POLICY</h2>
								<p>No Return</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="footer-info">
								<h2>CONTACT</h2>
								<p>Hotline: 098 999 9999</p>
								<p>Email: info@group4.com</p>
							</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="<?php echo ASSETS . THEME?>images/home/map.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<?php if(isset($data['user_data']) && $data['user_data']->rank == 'admin'): ?>
									<li><a href="<?=ROOT?>admin">Admin</a></li>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2></h2>
							<ul class="nav nav-pills nav-stacked">
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2></h2>
							<ul class="nav nav-pills nav-stacked">
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2></h2>
							<ul class="nav nav-pills nav-stacked">
							</ul>
						</div>
					</div>
					
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2021 Dolce-Banana. All rights reserved.</p>
					<p class="pull-right">Designed by Group 4</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	
    <script src="<?php echo ASSETS . THEME?>js/jquery.js"></script>
	<script src="<?php echo ASSETS . THEME?>js/bootstrap.min.js"></script>
	<script src="<?php echo ASSETS . THEME?>js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo ASSETS . THEME?>js/price-range.js"></script>
    <script src="<?php echo ASSETS . THEME?>js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo ASSETS . THEME?>js/main.js"></script>
</body>
</html>
