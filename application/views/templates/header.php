<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?=base_url();?>/assets/front/img/logo_title.png" type="image/png">
	<title>IEEE SB TKMCE</title>
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/css/style.css">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
	.myslides {display:none;}
	</style>


</head>

<body>

	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light" style="background:#FFFFFF;">
				<div class="container">
					<a class="navbar-brand logo_h" href="<?=base_url()?>home"><img src="<?=base_url();?>/assets/front/img/ieee_1.gif"  alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background:#00629B;">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item"><a class="nav-link" style="color:#00629B;" href="<?=base_url()?>home">Home</a></li>
							<li class="nav-item"><a class="nav-link" style="color:#00629B;" href="<?=base_url()?>about">About</a></li>
							<li class="nav-item"><a class="nav-link" style="color:#00629B;" href="<?=base_url()?>stories">Stories</a></li>
							<li class="nav-item"><a class="nav-link" style="color:#00629B;" href="<?=base_url()?>join-ieee">Join IEEE</a></li>
							<li class="nav-item"><a class="nav-link" style="color:#00629B;" href="<?=base_url()?>execom">Execom</a></li>
							<?php if ($this->session->userdata('user_email') == TRUE) {?>
								<li class="nav-item"><a class="nav-link" style="color:#00629B;" href="<?=base_url()?>Login/logout">Logout</a></li>
							<?php } else { ?>
								<li class="nav-item"><a class="nav-link" style="color:#00629B;" href="<?=base_url()?>admin_login">Login</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
