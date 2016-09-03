 <link href="<?PHP echo base_url();?>assets/css/datepicker.css" rel="stylesheet">
 <link rel="stylesheet" href="<?php echo base_url();?>assets/css/dataTables.bootstrap.css">
 <div class="col-md-10 content">
  <h1>Calendar Event</h1>
  <div class="row">
	<div class="col-md-4">
	<div id="dp6" data-date="<?php echo date("d-M-Y");?>" data-date-format="dd-mm-yyyy">
    <div class="date-picker date-picker-inline">
	</div>
	</div>
	</div>
	<div class="col-md-8">
	 <table class="table table-bordered">
	  <tr>
	   <th>Event Terdekat</th>
	   <th>Tanggal</th>
	   <th>Waktu</th>
	   <th>Lokasi</th>
	  </tr>
	  <tr>
	   <td>REUNI BERSAMA ANAK SMK
	   <td>31-Jul-2016
	   <td>07.00
	   <td>ALUN ALUN CIMAHI
	  </tr>
	 </table>
	</div>
	</div>
	<br>
	<hr>
	<br>
   <div class="col-md-12">
   <style>
    .box-body {
	 margin-bottom:30px;
	}
   </style>
    <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Event</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Penanggung jawab</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Reuni Akbar thn 2015</td>
                        <td>15-Aug-2016</td>
                        <td>Gedung Merdeka</td>
                        <td>Zaky</td>
                        <td><i class="fa fa-search"></i></td>
                      </tr>
                      <tr>
                        <td>Reuni Akbar 2015/2000</td>
                        <td>21-Feb-2020</td>
                        <td>Gg karya bakti 2 no 55 Bandung Jawa Barat</td>
                        <td>Setiabudi</td>
                        <td><i class="fa fa-search"></i></td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Event</th>
                        <th>Tanggal</th>
                        <th>Lokasi</th>
                        <th>Penanggung jawab</th>
                        <th>Aksi</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
   </div>
  </div>
</div>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script> 
<script src="<?php echo base_url();?>assets/js/prettify.js"></script> 
<script src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url();?>assets/js/dataTables.bootstrap.min.js"></script> 
<script>
		$(function(){
            //inline    
            $('#dp6').datepicker({
                todayBtn: 'linked'
            });
                
            $('#btn6').click(function(){
                $('#dp6').datepicker('update', '29-07-2016');
            });            
            
            $('#btn7').click(function(){
                $('#dp6').data('datepicker').date = null;
                $('#dp6').find('.active').removeClass('active');                
            });
		$("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": true
         });
        });
		
	</script>
  