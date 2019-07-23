<!DOCTYPE html>
<html>
<head>
	<?php //include('head.php'); ?>
</head>
<style>

</style>
<body style="background-image: url('<?php echo base_url();?>/asserts/vendors/images/login-bac.png');background-position: center;background-repeat: no-repeat;background-size: cover;">

	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-ffffff6e box-shadow pd-30 border-radius-5">
			<img src="<?php echo base_url();?>/asserts/vendors/images/deskapp-logo.png" alt="login" class="login-img">
			<h2 class="text-center mb-30">Login</h2>
			<form method="post">
				<div class="input-group custom input-group-lg">
					<input type="text" name="email" class="form-control" placeholder="Username">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" name="pwd" class="form-control" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<button  type="submit" name="submit" value="Login" class="btn btn-warning btn-lg btn-block text-white" >Sign In</button>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password?</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>