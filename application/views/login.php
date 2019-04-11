<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin Login | IEEE SB TKMCE</title>

  <!-- for-mobile-apps -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="icon" href="<?=base_url();?>/assets/front/img/logo_title.png" type="image/png">

  <!-- css files -->
  <link href="<?=base_url();?>assets/login/bootstrap.css" rel='stylesheet' type='text/css' /><!-- bootstrap css -->
  <link href="<?=base_url();?>assets/login/style.css" rel='stylesheet' type='text/css' /><!-- custom css -->
  <link href="<?=base_url();?>assets/login/font-awesome.min.css" rel="stylesheet"><!-- fontawesome css -->
  <!-- //css files -->

  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
  <!-- //google fonts -->

</head>

<body>
	<div class="popup">
		<div class="login px-sm-4 mx-auto mw-100">
			<h5 class="text-center mb-4">Login to cPanel<h5>
			<form action="<?=base_url("Login/process")?>" method="post">
				<div class="form-group">
					<label class="mb-2">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" name="user_email" aria-describedby="emailHelp" placeholder="" required="">
				</div>
				<div class="form-group">
					<label class="mb-2">Password</label>
					<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
				</div>
				<button type="submit" class="btn btn-primary submit mt-2">Login</button>
				<p class="text-center mt-2">
          <a class="ml-3" href="<?=base_url()?>home">Home</a>

				</p>
			</form>
		</div>

	</div>
</body>
</html>
