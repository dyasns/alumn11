<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  base_url();?>assets/css/bootstrap.min.css">	
  <link href="<?php  base_url();?>assets/font/css/font-awesome.min.css" rel="stylesheet">

  <link href="<?php  base_url();?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php  base_url();?>assets/css/animate.css" rel="stylesheet">
</head>
<body>
<div class="login-box">
 <div class="login-header text-center animate fadeInDown">
      <a href='<?php  base_url();?>index.php/beranda'>ALUMN<strong>11</strong></a>
 </div>
 <div class="login-body">
 <form action='#' method='POST'>
   <div class="input-group">
   <span class="input-group-addon">
				<span class="glyphicon glyphicon-user"></span>
				</span>
				<input type="text" class="form-control" id="email" title="Masukan nama anda disini" name="email" placeholder="Nama Lengkap" alt="Nama Lengkap" required>
  </div>
  <div class="input-group">
   <span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
				</span>
				<input type="email" class="form-control" id="email" name="Nama Lengkap" placeholder="aaaaaa@xxxxx.yyyy" alt="email" required>
  </div>
  <div class="input-group">
   <span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input type="password" class="form-control" id="password" name="password" Placeholder='Password' required>
  </div>
  <div class="input-group">
   <span class="input-group-addon">
				<span class="glyphicon glyphicon-log-in"></span>
				</span>
				<input type="password" class="form-control" id="password2" alt="Tulis ulang password" Placeholder='Re-Password' name="password" required>
  </div>
  <div class="input-group">
   <span class="input-group-addon">
				<span class="glyphicon glyphicon-calendar"></span>
				</span>
		<select class="form-control">
                      <option> - Pilih Tahun Lulus - </option>
                       <?php
						 $year = DATE('Y');
						 for($year;$year>=1950;$year--){
						 echo "<option value=$year>$year</option>";
						 }
						?> 
                      </select>
  </div>
  <div class="checkbox">
                          <label>
                            <input type="checkbox"> Setuju dengan semua ketentuan dari alumn11.
                          </label>
                        </div>
 <input type=submit class='form-control' value='Daftar'>		
 </form> 
 <div class="tambahan-link">
 <label class='small'><a href='<?php  base_url();?>index.php/beranda/login'>Sudah punya akun ?</a></label>
 </div>
</div>
</div>
</body>
</html>
  <script src='<?php  base_url();?>assets/js/jquery.min.js'></script>
  <script src='<?php  base_url();?>assets/js/bootstrap.min.js'></script>