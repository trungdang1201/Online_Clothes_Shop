<?php $this->view('header', $data); ?>

<section id="form" style="margin-top:5px;">
    <!--form-->
    <div class="container">
        <div class="row" style="text-align:center">
            <span style="font-size:20px;color:red"> <?php check_error() ?> </span>
                
            <div class="col-sm-4" style="float:none;display:inline-block">
                <div class="signup-form">
                    <!--sign up form-->
                    <h2>Người dùng đăng ký mới!</h2>
                    <form method="post">
                        <input name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '';?>" type="text" placeholder="tên"/>
						<input name="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '';?>" type="email" placeholder="Địa chỉ email"/>
                        <input name="password" type="password" placeholder="Mật khẩu" />
                        <input name="password_dup" type="password" placeholder="Nhập lại Mật khẩu" />
                        <button type="submit" class="btn btn-default">Đăng ký</button>
                    </form>
                </div>
                <!--/sign up form-->
            </div>
        </div>
    </div>
</section>
<!--/form-->

<?php $this->view('footer', $data); ?>