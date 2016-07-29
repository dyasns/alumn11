<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">	
  <link href="<?php echo base_url();?>assets/font/css/font-awesome.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
</head>
<body>
<div class="login-box">
 <div class="login-header text-center animate fadeInDown">
      <a href='<?php echo base_url();?>index.php/beranda'>ALUMN<strong>11</strong></a>
 </div>
 <div class="login-body">
 <form action='#' method='POST'>
  <div class="input-group">
  <span class="input-group-addon">
				<span class="glyphicon glyphicon-envelope"></span>
				</span>
				<input type="email" class="form-control" id="email" name="Nama Lengkap" placeholder="Email" alt="email" required>
  </div>
    <div class="input-group">
   <span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input type="password" class="form-control" id="password" name="password" Placeholder='Password' required>
  </div>
   <div class="checkbox">
                          <label>
                            <input type="checkbox"> Ingat Saya
                          </label>
                        </div>
 <input type=submit class='form-control' value='Masuk'>
 </form>
 <div class="tambahan-link">
 <label class='small'><a href="#" data-toggle="tooltip" title="Lupa password belum tersedia :)">Lupa Password</a></label> |
 <label class='small'><a href='<?php echo base_url();?>index.php/beranda/daftar'>Daftar Baru ?</a></label>
 </div>
 </div>
</div>
</body>
</html>
  <script src='<?php echo base_url();?>assets/js/jquery.min.js'></script>
  <script src='<?php echo base_url();?>assets/js/bootstrap.min.js'></script>
 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>