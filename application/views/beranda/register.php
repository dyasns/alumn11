<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">	
  <link href="<?php echo base_url();?>assets/font/css/font-awesome.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
 <style>
  .div-btn-register {
  padding: 10px 0px 0 0;
   }
 .no-padding-left {
 padding-left:0;
 }
 .no-border-radius {
 border-radius:0;
 }
</style>
</head>
<body>
  <?php
	if($this->session->flashdata('item')) {
	$message = $this->session->flashdata('item');
	?>
	<div class="text-center no-border-radius alert alert-danger fade in affix"><?php echo $message['message']; ?>
	</div>
	<?php } ?>
<div class="login-box">
 <div class="login-header text-center">
      <a href='<?php echo base_url();?>index.php/beranda'>ALUMN<strong>11</strong></a>
 </div>
 <div class="login-body">
 <form id="register" action='<?=base_url();?>index.php/register/submit/' method='POST'>
 
					 <div class="input-group">
						<span class="input-group-addon">
						<span class="fa fa-user"></span>
						</span>
						<input type="text" class="form-control" id="nama" title="Masukan nama anda disini" name="nama" placeholder="Nama Lengkap" alt="Nama Lengkap" required>
					</div>
						<div class="input-group">
							<span class="input-group-addon">
							@</span>
							<input type="email" class="form-control" id="email" title="Masukan email anda disini" name="email" required placeholder="Email">
						</div>
					<div class="input-group">
						<span class="input-group-addon">
						<span class="fa fa-map-marker"></span>
						</span>
					<input type="text" class="form-control" id="tempat" title="Masukan Tempat Lahir" name="tempat" required placeholder="Tempat Lahir">
					</div>
					<div class="input-group">
						<span class="input-group-addon">
						<span class="fa fa-calendar"></span>
						</span>
					<input type="date" class="form-control" id="date" title="Masukan Tanggal Lahir" name="tanggal" required placeholder="Tempat Lahir">
					</div>
				  <div class="input-group">
						<span class="input-group-addon">
						<span class="fa fa-user"></span>
						</span>
						<input type="text" class="form-control" id="email" title="Masukan username anda disini" name="username" placeholder="Username" alt="Username" required>
					</div>
						<div class="input-group">
							<span class="input-group-addon">
							<span class="fa fa-lock"></span>
							</span>
							<input type="password" class="form-control" id="password" title="Masukan password anda disini" name="password" required placeholder="Password Anda">
						</div>
					<div class="input-group">
						<span class="input-group-addon">
						<span class="fa fa-lock"></span>
						</span>
					<input type="password" class="form-control" id="repassword" title="Tulis ulang password anda disini" name="repassword" required placeholder="Tulis Lagi Password Anda">
					</div>
					<div class="col-md-3 col-xs-3 div-btn-register pull-right">
                            <button type='submit' class="btn btn-danger" name='submit' value='daftar'>Register</button>
					</div>
					<div class="col-md-9 no-padding-left col-xs-9">
					<div class="checkbox">
                          <label>
                            <input type="checkbox" required> Setuju dengan semua ketentuan dari alumn11.
                          </label>
                        </div>
						</div>
						<div class="tambahan-link">
							<label class='small'><a href='<?php echo base_url();?>index.php/beranda/login'>Sudah punya akun ?</a></label>
						</div>
</div>
</body>
</form> 
</html>
  <script src='<?php echo base_url();?>assets/js/jquery.min.js'></script>
  <script src='<?php echo base_url();?>assets/js/bootstrap.min.js'></script>
  
<script>

	$(window).bind("load", function() {
	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
	}, 7000);
	});
	
	var password = document.getElementById("password"),confirm_password = document.getElementById("repassword");

	function validatePassword(){
	if(password.value.length < 6){
	password.setCustomValidity("Password tidak boleh kurang dari 6 digit !");
	}
	else {
	    password.setCustomValidity('');
	}
	if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Password yang anda masukan tidak sama !");
	} 
	else {
		confirm_password.setCustomValidity('');
	}
	}
	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
	password.onkeyup = validatePassword;
	$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
	});
	</script>