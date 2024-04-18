<?php 
 include("Layout/header.php");
?>
<?php
    include('config.php');
	if(isset($_POST['dangky'])) {
		$fullname= $_POST['hovaten'];
        $tendangnhap  = $_POST['tendangnhap'];
		$email = $_POST['email'];
        $diachi = $_POST['diachi'];
        $matkhau = $_POST['matkhau'];
		$dienthoai = $_POST['dienthoai'];
		$sql_dangky = mysqli_query($mysqli,"INSERT INTO user(fullname,tendangnhap,email,diachi,matkhau,dienthoai) VALUE('".$fullname."','".$tendangnhap."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
		if($sql_dangky){
			if($fullname!="" && $tendangnhap!="" && $email!="" && $diachi!="" && $dienthoai!="" && $matkhau!=""){
                echo '<script>alert("Đăng ký thành công.");
                window.location.href="login.php";
                </script>';
                
			} 
		
		}
	}
?>
<div class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="tb-login-form ">
                            <h5 class="tb-title">Đăng ký</h5>
                        
                         
                            <form action="#" method="POST">
                                <p class="checkout-coupon top log a-an">
                                    <label class="l-contact">
                                        Họ và tên
                                        <em>*</em>
                                    </label>
                                    <input type="text" name="hovaten" required>
                                </p>
                                <p class="checkout-coupon top-down log a-an">
                                    <label class="l-contact">
                                        Tên đăng nhập
                                        <em>*</em>
                                    </label>
                                    <input type="text" name="tendangnhap" required>
                                </p>
                                <p class="checkout-coupon top-down log a-an">
                                    <label class="l-contact">
                                        Email
                                        <em>*</em>
                                    </label>
                                    <input type="text" name="email" required>
                                </p>
                                <p class="checkout-coupon top-down log a-an">
                                    <label class="l-contact">
                                    Số điện thoại
                                        <em>*</em>
                                    </label>
                                    <input type="text" name="dienthoai" required>
                                </p>
                                <p class="checkout-coupon top-down log a-an">
                                    <label class="l-contact">
                                        Mật khẩu
                                        <em>*</em>
                                    </label>
                                    <input type="text" name="matkhau" required>
                                </p>
                                <p class="checkout-coupon top-down log a-an">
                                    <label class="l-contact">
                                        Địa chỉ
                                        <em>*</em>
                                    </label>
                                    <input type="text" name="diachi" required>
                                </p>
                               
                                <p class="login-submit5">
                                    <input class="button-primary" type="submit" name="dangky" value="Đăng ký">
                                </p>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
		
        <hr class="opacity-20">
<?php require_once('Layout/footer.php'); ?>