<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- online 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://s.mlcdn.co/animate.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  -->
<script src='<?php echo base_url();?>assets/js/jquery.min.js'></script>
<script src='<?php echo base_url();?>assets/js/bootstrap.min.js'></script>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">	
  <link href="<?php echo base_url();?>assets/font/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/user.css" rel="stylesheet">
</head>
<style>
</style>
<body>
<nav class="navbar">
    <div class="col-md-6 col-xs-6 black navbar-header">
      <a href="<?= base_url();?>index.php/user/">ALUMN<strong>11</strong></a>
	</div>
</nav>
<div class="container-fluid">
<!-- area collapse -->
 <div class="col-md-2 col-xs-2 sidebar-left">
   <div class="left-name text-left">
    <img src="<?php echo base_url();?>assets/img/user/img-small.jpg" class="img img-rounded img-responsive pull-left">
    <p><b><?php
	 foreach($data as $row)
	 $nama = $row->nama;
	 echo $nama;
	?></b><br><a href='<?= base_url();?>index.php/user/message/'><span class="small"><i class="fa fa-envelope"></i></a>&nbsp;<a href='#'><i class="fa fa-globe"></i></a></span>
	</p>
	</div>
   <div class="left-nav">
    <ul>
    <li class="h-nav"><strong>MENU</strong></li>
    <li><a href="<?php echo base_url();?>index.php/user/"><i class="fa fa-home"></i><span>Beranda</span></a></li>
    <li><a data-toggle="collapse" data-target="#event_profile" aria-expanded="false"><i class="fa fa-user"></i><span>Profile</span></a></li>
	<ul class="collapse tree" id="event_profile" aria-expanded="true">
					<li><span class="fa fa-circle-o small"></span> <a href="<?php echo base_url();?>index.php/user/profile/<?php $session=$this->session->userdata('logged_in'); echo $session['username'];?>">Profile Saya</a></li>
					<li><span class="fa fa-circle-o small"></span> <a href="<?php echo base_url();?>index.php/user/ganti_profile/">Edit Profile</a></li>
                    <li><span class="fa fa-circle-o small"></span> <a href="<?php echo base_url();?>index.php/user/ganti_password/">Ganti Password</li>
	</ul>
	<li><a data-toggle="collapse" data-target="#groups" aria-expanded="false"><i class="fa fa-users"></i><span>Groups</span></a></li>
	<ul class="collapse tree" id="groups" aria-expanded="true">
					<li><span class="fa fa-circle-o small"></span> <a href="<?php echo base_url();?>index.php/user/buat_event">Group Saya</a></li><li><span class="fa fa-circle-o small"></span> <a href="<?php echo base_url();?>index.php/user/">Request Groups</a></li>
	</ul>
    <li><a data-toggle="collapse" data-target="#event" aria-expanded="false"><i class="fa fa-calendar "></i><span>Event</span></a></li>
	<ul class="collapse tree" id="event" aria-expanded="true">
					<li><span class="fa fa-circle-o small"></span> <a href="<?php echo base_url();?>index.php/user/buat_event">Event Baru</a></li><li><span class="fa fa-circle-o small"></span> <a href="<?php echo base_url();?>index.php/user/">Event Saya</a></li>
                    <li><span class="fa fa-circle-o small"></span> <a href="<?php echo base_url();?>index.php/user/event">Jadwal Event</li>
	</ul>
	
	
    <li><a href="<?php echo base_url();?>index.php/user/logout"><i class="fa fa-sign-out"></i><span>Keluar</span></a></li>
    </ul>
   </div>
 </div>
 <?php $this->load->view("user/".$content);?>
   </div>
  <div class="col-md-2"></div>
  <div class="col-md-10	">
	<div class="container-fluid footer-user">
	  <span>&copy;2016 ALUMN<strong>11</strong>.</span><br><span>ALL RIGHTS RESERVED.</span>
  </div></div>
</body>
</html>