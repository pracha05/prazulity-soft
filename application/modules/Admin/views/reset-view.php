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
			<h2 class="text-center mb-30">Reset Password</h2>
			<?php if($this->session->flashdata('msg_error') != ''){?>
					<div class="alert alert-info alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="fa fa-exclamation-circle"></i>
						<?php echo $this->session->flashdata('msg_error')?$this->session->flashdata('msg_error'):'';?>
					</div>
				<?php } ?>
				
			<form method="post">
				<div class="input-group custom input-group-lg">
					<input type="password" name="password" value="<?php echo $this->input->post('password');?>" class="form-control" placeholder="Enter password">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div> <?php echo form_error('password'); ?>
				<div class="input-group custom input-group-lg">
					<input type="password" name="cpassword" value="<?php echo $this->input->post('cpassword');?>" class="form-control" placeholder="Retype Password">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div> 
				</div><?php echo form_error('cpassword'); ?>
				<div class="row">
					<div class="col-sm-6">
						<div class="input-group">
							<!--
								use code for form submit
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
							-->
							<button  type="submit" name="submit" value="Login" class="btn btn-warning btn-lg btn-block text-white" >Submit</button>
						</div>
					</div>
					<div class="col-sm-6">
						
					</div>
				</div>
			</form>
			
		</div>
	</div>
</body>
</html>