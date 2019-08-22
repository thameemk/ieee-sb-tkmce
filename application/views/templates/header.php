<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Official website of IEEE Student Branch, TKM College of Engineering.">
	<meta name="keywords" content="IEEE,IEEE SB TKMCE,IEEEorg,IEEER10,TKMCE,TKM College of engineering,IEEE Kerala,">
	<link rel="icon" href="<?=base_url();?>/assets/front/img/ieee_mb_blue.png" type="image/png">
	<title><?php echo $page_title; ?> - IEEE SB TKMCE</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138758491-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138758491-1');
</script>

	<link rel="stylesheet" href="<?=base_url();?>/assets/front/css/bootstrap.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/css/magnific-popup.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?=base_url();?>/assets/front/css/style.css">
	<!-- <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/bebas" type="text/css"/> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style>
	
	.head-font{
		font-family: 'BebasNeueRegular';font-weight: normal;font-style: normal;
	}
	.carousel-item {
		/* height: 100vh; */
		min-height: 350px;
		background: no-repeat center center scroll;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		width:100%;
  		height:500px;
	}	
	.team-font{
		font-family: 'Lato';
	}
	@media only screen and (max-width: 1000px) {
	.navbar-custom{
		background:#00629B;
	}
	.menu-text{
		color:#ffffff;
	}
	.nav-link{
		color:#ffffff;
	}
  }
  @media only screen and (min-width: 1000px) {
	.menu-text{
		color:#00629B;
	}
  }
	</style>


</head>

<body>

	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light" style="background:#FFFFFF;">
				<div class="container">
					<a class="navbar-brand logo_h" href="<?=base_url()?>home"><img src="<?=base_url();?>/assets/front/img/ieee_1.gif"  alt=""></a>
					<button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background:#FFFFFF;">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="collapse navbar-collapse offset navbar-custom" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-end">
							<li class="nav-item"><a class="nav-link menu-text" style="text-align: center;" href="<?=base_url()?>home">Home</a></li>
							<li class="nav-item"><a class="nav-link menu-text" style="text-align: center;" href="<?=base_url()?>about">About</a></li>
							<li class="nav-item"><a class="nav-link menu-text" style="text-align: center;" href="<?=base_url()?>stories">Stories</a></li>
							<li class="nav-item"><a class="nav-link menu-text" style="text-align: center;" href="<?=base_url()?>updates">Updates</a></li>
							<li class="nav-item"><a class="nav-link menu-text" style="text-align: center;" href="<?=base_url()?>team">Team</a></li>
							<li class="nav-item"><a class="nav-link menu-text" style="text-align: center;" href="<?=base_url()?>contact">Contact</a></li>

							<?php if ($this->session->userdata('user_email') == TRUE) {?>
								<li class="nav-item"><a class="nav-link menu-text" style="text-align: center;" href="<?=base_url()?>Login/logout">Logout</a></li>
							<?php } else { ?>
								<li class="nav-item"><a class="nav-link menu-text" style="text-align: center;" href="<?=base_url()?>admin_login">Login</a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
