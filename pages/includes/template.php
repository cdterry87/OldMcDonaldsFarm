<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Farm Template"/>
		<meta property="og:locale" content="en_US"/>
		<meta property="og:type" content="article"/>
		<meta property="og:url" content=""/>
		<meta property="og:title" content="Farm Template"/>
		<meta property="og:site_name" content="Farm Template"/>
		<meta property="og:description" content="Farm Template"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<title>McDonald Farm</title>
		<!-- Styles -->
        <link href="<?php echo $base_url; ?>public/css/style.css" type="text/css" rel="stylesheet">
        <link href="<?php echo $base_url; ?>public/css/grid.css" type="text/css" rel="stylesheet">
		<link href="<?php echo $base_url; ?>public/js/jquery/ui/1.10.3/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
		<link href="<?php echo $base_url; ?>public/plugins/lightbox/2.6/css/lightbox.css" type="text/css" rel="stylesheet">
		<link href="<?php echo $base_url; ?>public/css/mobile.css" type="text/css" rel="stylesheet">
	</head>
	<body>
		<div id="header">
			<div id="banner">
				<div class="container_12">
						<div id="logo" class="grid_6">
							<h1><a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url; ?>public/images/horse.png" />McDonald Farm</a></h1>
						</div>
						<div id="navigation" class="grid_6">
							<ul class="float-right">
								<li><a href="<?php echo $base_url; ?>farm">Our Farm</a></li>
								<li><a href="<?php echo $base_url; ?>events">Events</a></li>
								<li><a href="<?php echo $base_url; ?>contact">Contact</a></li>
								<li><a href="<?php echo $base_url; ?>store">Store</a></li>
							</ul>
						</div>
						<div class="clear"></div>
						<div class="grid_6">&nbsp;</div>
						<div id="main" class="grid_6">
							<h3>About Us</h3>
							<p>
								Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
								Sed quis vestibulum dolor. Curabitur nec elit velit. Vestibulum tempor rhoncus sapien,
								id posuere justo viverra id. Phasellus vehicula mauris sit amet metus placerat,
								vel pretium orci ornare.
							</p>
							<br/>
							<p>
								Aenean ac dignissim ante, vitae rhoncus mauris. Aliquam euismod sed est quis faucibus.
								In et orci vulputate, pellentesque diam ac, imperdiet purus.
								Ut luctus sed nisl id molestie. Donec pharetra tellus at erat pellentesque,
								vel elementum felis iaculis. Fusce id faucibus nisl. 
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr/>
		<div class="clear"></div>
		<div id="content">
			<div class="container_12">
				<div class="clear"></div>
				<?php require($page_path); ?>
			</div>
		</div>
		<div class="clear"></div>
		<div id="footer">
			<div class="container_12">
				<div id="sitemap" class="grid_4">
					<h4>Site Map</h4>
					<div class="clear"></div>
					<ul>
						<li><a href="<?php echo $base_url; ?>">Home</a></li>
						<li><a href="<?php echo $base_url; ?>farm">Our Farm</a></li>
						<li><a href="<?php echo $base_url; ?>events">Events</a></li>
						<li><a href="<?php echo $base_url; ?>contact">Contact</a></li>
						<li><a href="<?php echo $base_url; ?>store">Store</a></li>
					</ul>
				</div>
				<div id="contact" class="grid_4">
					<h4>Contact Us</h4>
					<div class="clear"></div>
					<ul>
						<li>1234 Main Street</li>
						<li>Cityville, ST 12345</li>
						<li><Br/></li>
						<li>Phone: (111) 222-3333</li>
						<li>Email: chase.terry87@gmail.com</li>
					</ul>
				</div>
				<div id="social" class="grid_4">
					<h4>Stay Connected</h4>
					<div class="clear"></div>
					<ul>
						<li><a href="#"><img src="<?php echo $base_url; ?>public/images/icons/facebook3.png" /> Facebook</a></li>
						<li><a href="#"><img src="<?php echo $base_url; ?>public/images/icons/twitter3.png" /> Twitter</a></li>
						<li><a href="#"><img src="<?php echo $base_url; ?>public/images/icons/mail4.png" /> Contact</a></li>
					</ul>
				</div>
				<div class="clear"></div>
				<br/>
				<div class="grid_12">&copy; Chase Terry 2013 - <?php echo date('Y'); ?></div>
			</div>
		</div>
		
		<script src="<?php echo $base_url; ?>public/js/jquery/1.9.1/jquery-1.9.1.js"></script>
		<script src="<?php echo $base_url; ?>public/js/jquery/ui/1.10.3/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="<?php echo $base_url; ?>public/plugins/lightbox/2.6/js/lightbox-2.6.min.js"></script>
		<script src="<?php echo $base_url; ?>public/plugins/lightbox/2.6/js/modernizr.custom.js"></script>
		<script src="<?php echo $base_url; ?>public/js/functions.js"></script>
	</body>
</html>