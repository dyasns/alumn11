<style>
 .btn-info{
  margin-top: 10px;
 }
</style> 
 <div class="col-md-10 content" >
  <h1>Ganti Password</h1>
   <div class='col-md-5'>
 <?php
if($this->session->flashdata('item')) {
$message = $this->session->flashdata('item');
?>
   <div class='alert <?= $message['class'];?>'><?= $message['icon'];?>&nbsp;<?= $message['message'];?><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a></div>
<?php } ?>
<div class="middle">
	<form action='<?= base_url();?>index.php/user/act_password' method='POST'>
    <div class="input-group">
	<span class="input-group-addon">
				<span class="fa fa-lock"></span>
				</span>
				<input type="password" class="form-control" id="password" name="oldpassword" Placeholder='Password Lama' required>
	</div>
    <div class="input-group">
	<span class="input-group-addon">
				<span class="fa fa-lock"></span>
				</span>
				<input type="password" class="form-control" id="passwordbaru" name="newpassword" Placeholder='Password Baru' required>
	</div>
    <div class="input-group">
	<span class="input-group-addon">
				<span class="fa fa-lock"></span>
				</span>
				<input type="password" class="form-control" id="passwordbarut" name="repassword" Placeholder='Tulis Ulang Password' required>
	</div>
	<div class="checkbox pull-right">
                          <label >
                            <input type="checkbox"> Saya Bukan Robot
                          </label>
                        </div>
	<button type="submit" name='submit' value='submit' class='btn btn-info'>Simpan</button>
<script>
//on progress
	var password = document.getElementById("passwordbaru"),confirm_password = document.getElementById("passwordbarut");
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
</script>
 </form>
 </div>
 </div>
</div>