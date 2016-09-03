<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">	
  <link href="<?php echo base_url();?>assets/font/css/font-awesome.min.css" rel="stylesheet">

  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  
<style>
 .no-border-radius {
  border-radius : 0;
 }
 .box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px 0 0 0;
    background-color: #fff
 }
</style>
</head>
<body>
<?php
if($this->session->flashdata('item')) {
$message = $this->session->flashdata('item');
?>
<div class="container-fluid text-center no-border-radius alert <?= $message['class'];?> fade in affix"><?php echo $message['message']; ?>
</div>
<?php } ?>
<div class="login-box">
 <div class="login-header text-center">
      <a href='<?php echo base_url();?>index.php/beranda'>ALUMN<strong>11</strong></a>
 </div>
 <div class="login-body">
 <form action='<?= base_url();?>index.php/login/submit/' method='POST'>
  <div class="input-group">
  <span class="input-group-addon">
				<span class="fa fa-user"></span>
				</span>
				<input type="text" name="username" class="form-control" id="username" name="Nama Lengkap" placeholder="Username/Email" alt="username" required>
  </div>
    <div class="input-group">
   <span class="input-group-addon">
				<span class="fa fa-lock"></span>
				</span>
				<input type="password" name="password" class="form-control" id="password" name="password" Placeholder='Password' required>
  </div>
<div class="box-footer">
                    <button type="submit" class="btn btn-primary" name='submit' value='masuk'>Submit</button>
                  </div>
  
 </form>
 <div class="tambahan-link">
 <label class='small'><a href="#" data-toggle="tooltip" title="Lupa password belum tersedia :)">Lupa Password</a></label> |
 <label class='small'><a href='<?php echo base_url();?>index.php/beranda/register'>Daftar Baru ?</a></label>
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
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 7000);
});
</script>