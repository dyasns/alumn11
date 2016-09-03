<style>
		html,
		body {
			height: 100%;
		}
		.jumbotron {
			margin-top: 30px;
		}
		#content,
		.sidebar {
			min-height: 650px;
		}
		#row-main {
			overflow-x: hidden; /* necessary to hide collapsed sidebars */
		}
		#content {
			background-color: lightyellow;
			
			-webkit-transition: width 0.3s ease;
			-moz-transition: width 0.3s ease;
			-o-transition: width 0.3s ease;
			transition: width 0.3s ease;
		}
		#content .btn-group {
			margin-bottom: 10px;
		}
		.sidebar {
			background-color: lightgrey;
			
			-webkit-transition: margin 0.3s ease;
			-moz-transition: margin 0.3s ease;
			-o-transition: margin 0.3s ease;
			transition: margin 0.3s ease;
		}
		.collapsed {
			display: none; /* hide it for small displays */
		}
		@media (min-width: 992px) {
			.collapsed {
				display: block;
			}
			#sidebar-right.collapsed {
				margin-right: -35%; /* same width as sidebar */
			}
		}
	</style>
	<div class="col-md-12">
	<div class="row" id="row-main">
		  <div class="col-md-9 col-xs-9" id="content">
			<div class="btn-group" role="group" aria-label="Controls">
					<span class="toggle-sidebar-right">Toggle right</span>
					<span class="toggle-sidebar-left">Toggle right</span>
			  </div>
			  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec mattis velit vel ipsum interdum, ac gravida urna faucibus. Vestibulum nec orci vel velit hendrerit egestas. Aenean vitae cursus nibh. Aliquam vel scelerisque nibh, non vestibulum velit. Integer non justo ac libero lobortis lobortis. Phasellus suscipit, augue vitae gravida aliquam, orci ante sodales urna, nec pretium sem risus vel odio. Sed enim tortor, vulputate eget consectetur vel, elementum ut nisi. Etiam malesuada nisi non tempor maximus.</p>
				<p>Vivamus blandit nunc eros, ac aliquet quam viverra at. Interdum et malesuada fames ac ante ipsum primis in faucibus. Etiam pretium ultricies velit. Cras viverra dignissim mollis. Vivamus cursus dolor vel efficitur imperdiet. Fusce quis nisi sed tellus fermentum accumsan. Praesent euismod enim a purus consectetur tempus. Duis ultrices, ligula at faucibus aliquet, turpis lorem lacinia nisi, non congue nisi elit ut elit. In orci justo, commodo vitae volutpat vulputate, ultricies a dolor. Suspendisse potenti. Nam ac sagittis orci, in aliquam arcu.</p>
			</div>
			<div class="col-md-3 sidebar col-xs-3 hidden" id="sidebar-left">
				
				<p>Fusce malesuada, ipsum ut pharetra fringilla, dui diam porta nibh, malesuada feugiat sapien ipsum nec sapien. Proin sodales tellus non arcu tincidunt, quis aliquam neque pulvinar. Suspendisse sed risus odio. Phasellus laoreet nulla eget gravida ullamcorper. Donec porta turpis ac euismod semper. Nullam vel felis suscipit, tincidunt metus non, accumsan justo. Mauris molestie vestibulum sem ac venenatis. Nam tempor, erat et vehicula aliquam, nibh justo pretium nisl, eget hendrerit velit sem ac ligula. Phasellus eu ipsum vitae sapien consequat condimentum. Nam sodales nisl non enim finibus aliquet at a ipsum.</p>
				
			</div>
			<div class="col-md-3 sidebar col-xs-3" id="sidebar-right">
				
				<p>Fusce malesuada, ipsum ut pharetra fringilla, dui diam porta nibh, malesuada feugiat sapien ipsum nec sapien. Proin sodales tellus non arcu tincidunt, quis aliquam neque pulvinar. Suspendisse sed risus odio. Phasellus laoreet nulla eget gravida ullamcorper. Donec porta turpis ac euismod semper. Nullam vel felis suscipit, tincidunt metus non, accumsan justo. Mauris molestie vestibulum sem ac venenatis. Nam tempor, erat et vehicula aliquam, nibh justo pretium nisl, eget hendrerit velit sem ac ligula. Phasellus eu ipsum vitae sapien consequat condimentum. Nam sodales nisl non enim finibus aliquet at a ipsum.</p>
				
			</div>
		</div>
	</div>
	</div>
<script src='<?php echo base_url();?>assets/js/jquery.min.js'></script>
<script src='<?php echo base_url();?>assets/js/bootstrap.min.js'></script>
	<script>
		$(document).ready(function () {
			function toggleSidebar(side) {
				if (side !== "right") {
					return false;
				}
				var right = $("#sidebar-right"),
					content = $("#content"),
					openSidebarsCount = 0,
					contentClass = "";
				
				// toggle sidebar
				if (side === "right") {
					right.toggleClass("collapsed");
				}
				
				// determine number of open sidebars
				if (!right.hasClass("collapsed")) {
					openSidebarsCount += 1;
				}
				
				// determine appropriate content class
				if (openSidebarsCount === 0) {
					contentClass = "col-md-12 col-xs-12";
				} else if (openSidebarsCount === 1) {
					contentClass = "col-md-9 col-xs-9";
				} else {
					contentClass = "col-md-6 col-xs-6";
				}
			
				
				// apply class to content
				content.removeClass("col-md-12 col-md-9 col-md-6 col-xs-12 col-xs-9 col-xs-6")
					   .addClass(contentClass);
			}
			$(".toggle-sidebar-left").click(function () {
				showe("left");
				
				return false;
			});
			$(".toggle-sidebar-right").click(function () {
				toggleSidebar("right");
				
				return false;
			});
		});
	</script>