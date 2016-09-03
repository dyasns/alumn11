<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap3-wysihtml5.min.css">
<div class="col-md-10">
 <h1>Buat Event Baru</h1>
 <div class="row">
 <form action='#' method='POST'>
   <div class="col-md-12">
   <div class="col-md-8">
   <label class="">Judul Event</label>
    <input type='text' class="form-control form-edit-text" placeholder="Judul event disini !">
	</div>
	</div>
	 <div class="col-md-12">
	  <div class="col-md-6">
 	  <div class="input-group">
 		<span class="input-group-addon">
 				<span class="fa fa-mail-forward"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="Pilih Tujuan Undangan">
       </div>
	  </div>
	  <div class="col-md-6">
 	  <div class="input-group">
 		<span class="input-group-addon">
 				<span class="fa fa-map-marker"></span>
 		</span>
 		<input type="text" class="form-control" Placeholder="Pilih Lokasi Undangan">
       </div>
	  </div>
 	  <div class="col-md-12 tujuan-label">
	   <label>Tujuan :</label>
	   <label class="alert alert-info alert-dismissable">   
                    <label>SMKN11 Bandung 1991/1992</label>&nbsp;<i data-dismiss="alert" aria-hidden="true">&times;</i>
       </label>
	   <label class="alert alert-info alert-dismissable">   
                    <label>SMKN11 Bandung 1992/1993</label>&nbsp;<i data-dismiss="alert" aria-hidden="true">&times;</i>
       </label>
	   <label class="alert alert-info alert-dismissable">   
                    <label>SMKN11 Bandung 1998/1999</label>&nbsp;<i data-dismiss="alert" aria-hidden="true">&times;</i>
       </label>
	   <label class="alert alert-info alert-dismissable">   
                    <label>SMKN11 Bandung 1994/1995</label>&nbsp;<i data-dismiss="alert" aria-hidden="true">&times;</i>
       </label>
	  </div>
    <div class="col-md-4">
 	  <div class="input-group">
 		<span class="input-group-addon">
 				<span class="fa fa-calendar"></span>
 		</span>
 		<input type="date" class="form-control" Placeholder="dd-mm-yy">
	 </div>
   </div>
	 <div class="col-md-4">
 	  <div class="input-group">
 		<span class="input-group-addon">
 				<span class="fa fa-clock-o"></span>
 		</span>
 		<input type="time" class="form-control" Placeholder="dd-mm-yy">
	 </div>
   </div>
   
   <!-- editor start -->
   <div class="col-md-12">
              <div class="box no-shadow">
                <div class="box-header">
                  <h3 class="box-title">Deskripsi<small> Speaker, acara dll</small></h3>
                </div><!-- /.box-header -->
                <div class="box-body pad">
                  <form>
                    <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </form>
                </div><button type="submit" class="btn btn-info pull-right">Buat</button>
              </div>
            </div><!-- /.col-->
          </div><!-- ./row -->
        </section><!-- /.content -->
      </div>
    <script src="<?= base_url();?>assets/js/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
      $(function () {
        $(".textarea").wysihtml5();
      });
    </script>
   </div>
 </form>
</div>