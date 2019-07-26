<!DOCTYPE html>
<html>
<head>
	<?php //include('head.php'); ?>
</head>
<body style="background-image: url('<?php echo base_url();?>/asserts/vendors/images/login-bac.png');background-position: center;background-repeat: no-repeat;background-size: cover;">

	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-ffffff6e box-shadow pd-30 border-radius-5">
			<img src="<?php echo base_url();?>/asserts/vendors/images/deskapp-logo.png" alt="login" class="login-img">
				<h2 class="text-center mb-30">Forgot Password</h2>
			<form>
				<p>Enter your email address to reset your password</p>
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" placeholder="Email">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-primary btn-lg btn-block" type="submit" value="Submit">
							-->
							<a class="btn btn-warning btn-lg btn-block text-white" href="index.php">Submit</a>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="forgot-password"><a href="<?php echo base_url();?>" class="btn btn-outline-warning btn-lg btn-block text-white">Sign In</a></div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>