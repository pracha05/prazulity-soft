<?php //include( "head.php"); ?>
<?php //include( "header.php"); ?>
<?php //include( "sidebar.php"); ?>
<?php echo $this->load->view('../views/subadmin/head.php'); ?>
  <?php echo $this->load->view('../views/subadmin/header.php',$sess_data); ?>
	<?php echo $this->load->view('../views/subadmin/sidebar.php'); ?>
	
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="bg-white pd-10 box-shadow border-radius-5 mb-10">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Change password</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Change password</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
			<form method="post">
				 <fieldset class="scheduler-border">
		<?php if($msg != ''){?>
			<div class="alert alert-danger">
				<button type="button" class="close" data-dismiss="alert"><i class="fa fa-times" aria-hidden="true"></i></button>
				<p><i class="fa fa-exclamation-circle" aria-hidden="true"> </i><?php echo $msg?$msg:'';?></p>
			</div>
				<?php } ?><?php if($this->session->flashdata('msg_succ') != ''){?>  
			<div class="alert alert-info alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-check-circle"></i>
				<?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?>
			</div>
		<?php } ?>	
						<legend class="scheduler-border">Change password</legend>
					
				<div class="row">
					<div class="form-group col-md-6">
						<label class="">Old Password</label>
						<div class="">
							<input type="text" class="form-control" name="old_pwd" value="<?php echo $this->input->post('old_pwd');?>" placeholder="Enter Restaurant Name" />
							<b><?php echo form_error('old_pwd'); ?></b>
						</div>
													

					</div>
					<div class="form-group col-md-6">
						<label class="">New Password</label>
						<div class="">
							<input type="text" class="form-control" name="new_pwd" value="<?php echo $this->input->post('new_pwd');?>" placeholder="Enter Restaurant Address" />
							<b><?php echo form_error('new_pwd'); ?></b>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label class="">Re-type Password</label>
						<div class="">
							<input type="text" class="form-control" name="conf_pwd" value="<?php echo $this->input->post('conf_pwd');?>" placeholder="Restaurant Mobile Number" />
							<b><?php echo form_error('conf_pwd'); ?></b>
						</div>
					</div>
					<div class="form-group col-md-12">
						<div class="col-lg-9 col-lg-offset-3">
							<button type="submit" name="submit" value="add" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</div>
				</fieldset>
			</form>
			<form id="defaultForm" method="post" action="form-validation.php">
				
			</form>
		</div>
		<?php echo $this->load->view('../views/subadmin/footer.php'); ?>
		<?php //include( "footer.php"); ?>
	</div>
</div>
	<?php echo $this->load->view('../views/subadmin/script.php'); ?>
<?php //include( "script.php"); ?>


</body>

</html>