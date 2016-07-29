<nav class="navbar white navbar-inverse">
    <div class="col-md-6 col-xs-6 navbar-header">
      <a href="#">ALUMN<strong>11</strong></a>
	</div>
</nav>
<div class="container-fluid">
 <div class="col-md-3">
  <div data-spy="affix" data-offset-top="70">
   <div class="left-name text-left">
    <img src="<?php echo base_url();?>assets/img/user/img-small.jpg" class="img img-rounded img-responsive pull-left">
    <p><b>Zaky Muhammad Yopi Rusyana</b><br><span class="small">online</span></p>
   </div>
   <div class="left-nav">
    <ul>
    <li class="h-nav"><strong>MENU</strong></li>
    <li><span class="fa fa-user"></span>  <a href="<?php echo base_url();?>index.php/user/">Profile</a></li>
    <li><span class="fa fa-lock"></span> <a href="#">Ganti Password</a></li>
    <li><span class="fa fa-calendar"></span> <a href="#">Event</a></li>
    <li><span class="fa fa-sign-out"></span> <a href="#">Keluar</a></li>
    </ul>
   </div>
  </div>
 </div>
 <div class="col-md-9">
 <div class="profile">
 <div class="body-profile">
  <h1>Ganti Password -</h1>
   <div class='col-md-7'>
	<form action='#' method='POST'>
    <div class="input-group">
	<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input type="password" class="form-control" id="password" name="password" Placeholder='Password Lama' required>
	</div>
    <div class="input-group">
	<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input type="password" class="form-control" id="password" name="password" Placeholder='Password Baru' required>
	</div>
    <div class="input-group">
	<span class="input-group-addon">
				<span class="glyphicon glyphicon-lock"></span>
				</span>
				<input type="password" class="form-control" id="password" name="password" Placeholder='Tulis Ulang Password' required>
	</div>
	<div class="checkbox pull-right">
                          <label >
                            <input type="checkbox"> Saya Bukan Robot
                          </label>
                        </div>
	<input type="submit" class='form-control resize-width-submit input-group' value='Ganti'>
<style>
 .resize-width-submit{
  width: 100px;
 }
</style>
 </form>
  </div>
 </div>
 </div>
</div>
</div>