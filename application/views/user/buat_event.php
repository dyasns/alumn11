<link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap3-wysihtml5.min.css">
<div class="col-md-9">
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
   <form>
	<h3 class="box-title">Masukan Deskripsi Mu Disini <small>speaker, acara, dll</small></h3>
                    <ul class="wysihtml5-toolbar"><li class="dropdown">
  <a class="btn btn-default dropdown-toggle " data-toggle="dropdown" aria-expanded="false">
    
      <span class="glyphicon glyphicon-font"></span>
    
    <span class="current-font">Normal text</span>
    <b class="caret"></b>
  </a>
  <ul class="dropdown-menu">
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="p" tabindex="-1" href="javascript:;" unselectable="on" class="">Normal text</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1" tabindex="-1" href="javascript:;" unselectable="on" class="wysihtml5-command-active">Heading 1</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" tabindex="-1" href="javascript:;" unselectable="on">Heading 2</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h3" tabindex="-1" href="javascript:;" unselectable="on">Heading 3</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h4" tabindex="-1" href="javascript:;" unselectable="on">Heading 4</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h5" tabindex="-1" href="javascript:;" unselectable="on">Heading 5</a></li>
    <li><a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h6" tabindex="-1" href="javascript:;" unselectable="on">Heading 6</a></li>
  </ul>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="bold" title="CTRL+B" tabindex="-1" href="javascript:;" unselectable="on">Bold</a>
    <a class="btn  btn-default" data-wysihtml5-command="italic" title="CTRL+I" tabindex="-1" href="javascript:;" unselectable="on">Italic</a>
    <a class="btn  btn-default" data-wysihtml5-command="underline" title="CTRL+U" tabindex="-1" href="javascript:;" unselectable="on">Underline</a>
    
    <a class="btn  btn-default" data-wysihtml5-command="small" title="CTRL+S" tabindex="-1" href="javascript:;" unselectable="on">Small</a>
    
  </div>
</li>
<li>
  <a class="btn  btn-default" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" data-wysihtml5-display-format-name="false" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-quote"></span>
    
  </a>
</li>
<li>
  <div class="btn-group">
    <a class="btn  btn-default" data-wysihtml5-command="insertUnorderedList" title="Unordered list" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-list"></span>
    
    </a>
    <a class="btn  btn-default" data-wysihtml5-command="insertOrderedList" title="Ordered list" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-th-list"></span>
    
    </a>
    <a class="btn  btn-default" data-wysihtml5-command="Outdent" title="Outdent" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-indent-right"></span>
    
    </a>
    <a class="btn  btn-default" data-wysihtml5-command="Indent" title="Indent" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-indent-left"></span>
    
    </a>
  </div>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-link-modal modal fade" data-wysihtml5-dialog="createLink">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert link</h3>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input value="http://" class="bootstrap-wysihtml5-insert-link-url form-control" data-wysihtml5-dialog-field="href">
          </div> 
          <div class="checkbox">
            <label> 
              <input type="checkbox" class="bootstrap-wysihtml5-insert-link-target" checked="">Open link in new window
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
          <a href="#" class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save">Insert link</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="createLink" title="Insert link" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-share"></span>
    
  </a>
</li>
<li>
  <div class="bootstrap-wysihtml5-insert-image-modal modal fade" data-wysihtml5-dialog="insertImage">
    <div class="modal-dialog ">
      <div class="modal-content">
        <div class="modal-header">
          <a class="close" data-dismiss="modal">×</a>
          <h3>Insert image</h3>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <input value="http://" class="bootstrap-wysihtml5-insert-image-url form-control" data-wysihtml5-dialog-field="src">
          </div> 
        </div>
        <div class="modal-footer">
          <a class="btn btn-default" data-dismiss="modal" data-wysihtml5-dialog-action="cancel" href="#">Cancel</a>
          <a class="btn btn-primary" data-dismiss="modal" data-wysihtml5-dialog-action="save" href="#">Insert image</a>
        </div>
      </div>
    </div>
  </div>
  <a class="btn  btn-default" data-wysihtml5-command="insertImage" title="Insert image" tabindex="-1" href="javascript:;" unselectable="on">
    
      <span class="glyphicon glyphicon-picture"></span>
    
  </a>
</li>
</ul><textarea class="textarea" id="editor1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;" placeholder="Place some text here"></textarea><input type="hidden" name="_wysihtml5_mode" value="1"><iframe class="wysihtml5-sandbox" security="restricted" allowtransparency="true" frameborder="0" width="0" height="0" marginwidth="0" marginheight="0" style="display: inline-block; border-collapse: separate; border: 1px solid rgb(221, 221, 221); clear: none; float: none; margin: 0px; outline: rgb(51, 51, 51) none 0px; outline-offset: 0px; padding: 10px; position: static; top: auto; left: auto; right: auto; bottom: auto; z-index: auto; vertical-align: baseline; text-align: start; box-sizing: border-box; box-shadow: none; border-radius: 0px; width: 100%; height: 200px; background-color: rgb(255, 255, 255);"></iframe>
                  
<script src="<?php echo base_url();?>assets/js/prettify.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap3-wysihtml5.all.min.js"></script>
    <script>
      $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        //bootstrap WYSIHTML5 - text editor
		var editor = new wysihtml5.Editor("editor1", { // id of textarea element
		toolbar:      "wysihtml5-toolbar", // id of toolbar element
		parserRules:  wysihtml5ParserRules // defined in parser rules set 
		});
        $(".textarea").wysihtml5();
      });
    </script>
<!-- editor end -->
   </div>
   </div>
 </form>
</div>