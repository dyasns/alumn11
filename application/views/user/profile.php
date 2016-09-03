 <div class="col-md-10">
 <div class="profile">
  <div class="top-profile">
  <div class="row">
  <div class="col-md-3">
  <div class="img-profile pull-left"> 
  <img src="<?php echo base_url();?>assets/img/user/img.jpg" class="img img-rounded img-responsive">
  </div>
  </div>
  <?php
	foreach($profile as $row){
	 $nama = $row->nama;
	 $email = $row->email;
	 $bio = $row->bio;
	 $alamat = $row->alamat;
	 $hp = $row->hp;
	 $tgl = $row->tanggal_lahir;
	}
  ?>
  <div class="col-md-8">
  <div class="name-profile">
   <p class="main-name"><b><?= $nama;?></b>&nbsp;</span><a class="small" href='<?php echo base_url();?>index.php/user/ganti_profile'><span class="fa fa-pencil"></span></a></p>
   <p class="text-muted"><?= $bio;?></p>
  </div>
  </div>
  <div class="col-md-3"><strong>Participate</strong><br><span class="fa fa-check" aria-hidden="true">&nbsp;99</span>
  </div>
  <div class="col-md-3"><strong>Event</strong><br><span class="fa fa-calendar" aria-hidden="true"> 0</span>
  </div>
 </div>
 </div>
 <hr>
 <div class="body-profile">
  <div class="row">
   <div class="col-md-6">
   <h3>Contact <a class="small" href='<?php echo base_url();?>index.php/user/ganti_profile'><span class="fa fa-pencil"></span></a></h3>
   <p><span class="fa fa-phone" aria-hidden="true">&nbsp;</span><?= $hp;?><p>
   <p><span class="fa fa-location-arrow" aria-hidden="true">&nbsp;</span><?= $alamat;?><p>
   <p><span class="fa fa-envelope" aria-hidden="true">&nbsp;</span><?= $email;?><p>
   </div>
   <div class="col-md-6">
   <h3>Sosial Media <a class="small" href='<?php echo base_url();?>index.php/user/ganti_profile'><span class="fa fa-pencil"></span></a></h3>
    <div class="col-md-6">
   <p><span class="fa fa-facebook-square" aria-hidden="true"> <a href='#'>ALUMN11</a><p>
   <p><span class="fa fa-twitter-square" aria-hidden="true"> <a href='#'>ALUMN11</a><p>
   <p><span class="fa fa-instagram" aria-hidden="true"> <a href='#'>ALUMN11</a><p>
   <p><span class="fa fa-snapchat-square" aria-hidden="true"> <a href='#'>ALUMN11</a><p>
   <p><span class="fa fa-pinterest-square" aria-hidden="true">  <a href='#'>ALUMN11</a><p>
   <p><span class="fa fa-google-plus-square" aria-hidden="true">  <a href='#'>ALUMN11</a><p>
   </div><div class="col-md-6">
   <p><span class="fa fa-steam-square" aria-hidden="true">  <a href='#'>ALUMN11</a><p>
   <p><span class="fa fa-github-square" aria-hidden="true">  <a href='#'>ALUMN11</a><p>
   <p><span class="fa fa-linkedin-square" aria-hidden="true">  <a href='#'>ALUMN11</a><p>
   <p><span class="fa fa-youtube" aria-hidden="true">  <a href='#'>ALUMN11</a><p>
   </div>
   </div>
  </div>
 </div>
 </div>
 </div>