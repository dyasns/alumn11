<?php 
  foreach($data as $row)
    {
?>
<form action="<?=base_url()?>index.php/user/upic_profile" method="post" enctype="multipart/form-data">
 <div class="col-md-10">
 <div class="profile">
  <div class="top-profile">
  <div class="row">
   <div class="col-md-3">
    <div class="img-profile pull-left"> 
     <img src="<?php echo base_url();?>assets/uploads/img/<?php echo $row->profile_picture?>" class="img img-rounded img-responsive">
     
    </div>
      <div class="col-md-4">
          <input type="file" name="filefoto">
      </div>
    </div>
    <div class="name-profile">
      <div class="col-md-8">
  	   <p class="main-name">
  	     <b><input type='text' class="form-control form-edit-text" value="<?php echo $row->nama?>"></b></p>
       <p><textarea class="form-control form-edit"><?php echo $row->bio?></textarea></p>
     </div>
   </div>
  </div>
 </div>
 <hr>
 <div class="body-profile">
  <div class="row">
   <div class="col-md-6">
   <h3>Contact</h3>
    <div class="input-group col-md-12">
   <span class="input-group-addon">
				<span class="fa fa-phone"></span>
				</span>
				<input type="text" class="form-control" id="text" name="text" Placeholder='Contact' value="<?php echo $row->hp?>"required>
  </div>
    <div class="input-group col-md-12">
   <span class="input-group-addon">
				<span class="fa fa-location-arrow"></span>
				</span>
				<textarea class="form-control form-edit-height-textare" id="password" name="password" required> <?php echo $row->alamat?></textarea>
  </div>
    <div class="input-group col-md-12">
   <span class="input-group-addon">
				<span class="fa fa-envelope"></span>
				</span>
				<input type="text" class="form-control" value="<?php echo $row->email?> ">
				</div>
	<div class="col-md-5 no-padding-left">
	 <input type="submit" class="btn btn-primary input-group btn-block" value="Simpan">
	</div>
   </div>
   <div class="row">
    <div class="col-md-6">
	
<style>
 .form-edit {
  min-height:130px;
 }
 .form-edit-height-textare{
  min-height: 120px;
 }
 .no-padding-left {
  padding-left:0;
 }
</style>
    <h3>Sosial Media</h3>

 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-facebook"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-twitter"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-instagram"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-snapchat"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-pinterest"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-google-plus"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-linkedin"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-github"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-steam"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
 	  <div class="input-group col-md-10">
 		<span class="input-group-addon">
 				<span class="fa fa-youtube"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="ALUMN11">
       </div>
    </div>
   </div>
  </div>
 </div>
 </div>
 </div>
</div>
<?php 

 }?>