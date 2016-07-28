<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php  base_url();?>assets/css/bootstrap.min.css">	
  <link href="<?php  base_url();?>assets/font/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php  base_url();?>assets/css/custom.css" rel="stylesheet">
  <link href="<?php  base_url();?>assets/css/animate.css" rel="stylesheet">
   <!-- online <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://s.mlcdn.co/animate.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  -->
</head>
<body>
 <?php $this->load->view($content);?>
	<div class="container-fluid footer">
	 <div class="container">
	  <span>&copy;2016 ALUMN<strong>11</strong></span>&nbsp;<span>ALL RIGHTS RESERVED.</span><br>
	 </div>
	</div>
</body>
</html>
<script src='<?php base_url();?>assets/js/jquery.min.js'></script>
<script src='<?php base_url();?>assets/js/bootstrap.min.js'></script>
<script>
  var $animation_elements = $('.animate-fadeIn');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('fadeIn');
    } else {
      $element.removeClass('fadeIn');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
  </script>