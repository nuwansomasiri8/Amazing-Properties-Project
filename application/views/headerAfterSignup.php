 <!DOCTYPE HTML>
<html lang="en-us">
<head>
	<title>Prperty Management pvt ltd</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/bootstrap.css">
	<link href="<?php echo base_url(); ?>resources/css/bootstyle.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/bootstrap-carousel.js"></script>
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="navbar navbar-fixed-top">	
				<div class="navbar-inner">
					<div class="container">			
						<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</a>			
						<a class="brand" style="color:white;" href="home.php">Amazing</a>
						<div class="nav-collapse collapse navigation-top pull-right">
							<ul class="nav">
								<li><a href="<?php echo base_url(); ?>index.php/Home/index"><h4 style="color:white; font-size:12px;">Home</h4></a></li>
								<li><a href="<?php echo base_url(); ?>index.php/Property/loadPropertyDetails"><h4 style="color:white; font-size:12px;">My Account</h4></a></li>
								<li><a href="<?php echo base_url(); ?>index.php/Landview/showlands"><h4 style="color:white; font-size:12px;">Lands</h4></a></li>
								<li><a href="<?php echo base_url(); ?>index.php/Landview/showcoms"> <h4 style="color:white; font-size:12px;">Buildings</h4></a></li>
								<li><a href="<?php echo base_url(); ?>index.php/Landview/showhouses"><h4 style="color:white; font-size:12px;">Houses</h4></a></li>
								<li><a href="<?php echo base_url(); ?>index.php/Users/userLogout"><h4 style="color:white; font-size:12px;">logout</h4></a></li>
								<li><a href="<?php echo base_url(); ?>index.php/Home/showAddProperty"><h4 style="color:white; font-size:12px;">AddProperty</h4></a></li>
								<li><b>You Are Logged In As:</b> <?php 
								$uname = $this->session->userdata('userName'); 
								echo $uname
								 ?>
									
								</li>
								
							</ul>
						</div>				
					</div>
				</div>
			</div><!-- end navbar -->