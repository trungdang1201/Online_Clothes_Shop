<?php $this->view("header",$data); ?>

	<section id="form" style="margin-top: 5px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align: center;">

				<span style="font-size:18px;color:red;"><?php check_error() ?></span>
				
				<div class="col-sm-4 col-sm-offset-1" style="float: none;display: inline-block;">
					<div class="login-form"><!--login form-->
						<h2>Đăng nhập vào tài khoản của bạn</h2>
						<form method="post">
							<input type="email" name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>" placeholder="Email Address" />
							<input type="password" name="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '';?>" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Giữ cho tôi đăng nhập

							</span>
							<button type="submit" class="btn btn-default">Đăng Nhập</button>
						</form>
						<br>
						<a href="<?=ROOT?>signup">Không có tài khoản ? Đăng ký ở đây</a>
					</div><!--/login form-->
				</div>
			 
			</div>
		</div>
	</section><!--/form-->
	
<?php $this->view("footer",$data); ?>
