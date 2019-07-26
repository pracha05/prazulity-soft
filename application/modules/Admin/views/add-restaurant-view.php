<?php //include( "head.php"); ?>
<?php //include( "header.php"); ?>
<?php //include( "sidebar.php"); ?>
<?php echo $this->load->view('../views/admin/head.php'); ?>
  <?php echo $this->load->view('../views/admin/header.php',$sess_data); ?>
	<?php echo $this->load->view('../views/admin/sidebar.php'); ?>
	
<div class="main-container">
	<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
		<div class="bg-white pd-10 box-shadow border-radius-5 mb-10">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Add Restaurant</h4>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add Restaurant</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-white pd-20 box-shadow border-radius-5 mb-30">
			<form method="post">
				 <fieldset class="scheduler-border">
		<?php if($this->session->flashdata('msg_error_register') != ''){?>
			<div class="alert alert-info alert-danger">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-exclamation-circle"></i>
				<?php echo $this->session->flashdata('msg_error_register')?$this->session->flashdata('msg_error_register'):'';?>
			</div>
		<?php } ?>
		<?php if($this->session->flashdata('msg_succ') != ''){?>  
			<div class="alert alert-info alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-check-circle"></i>
				<?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?>
			</div>
		<?php } ?>	
						<legend class="scheduler-border">Restaurant Information</legend>
					
					<div class="row">
					<div class="form-group col-md-6">
						<label class="">Restaurant Name</label>
						<div class="">
							<input type="text" class="form-control" name="name" value="<?php echo $this->input->post('name');?>" placeholder="Enter Restaurant Name" />
							<b><?php echo form_error('name'); ?></b>
						</div>
													

					</div>
					<div class="form-group col-md-6">
						<label class="">Restaurant Mobile</label>
						<div class="">
							<input type="text" class="form-control" name="mobile" value="<?php echo $this->input->post('mobile');?>" placeholder="Enter Restaurant Address" />
							<b><?php echo form_error('mobile'); ?></b>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label class="">Email</label>
						<div class="">
							<input type="text" class="form-control" name="email" value="<?php echo $this->input->post('email');?>" placeholder="Restaurant Mobile Number" />
							<b><?php echo form_error('email'); ?></b>
						</div>
					</div>
					<div class="form-group col-md-12">
						<div class="col-lg-9 col-lg-offset-3">
							<button type="submit" name="submit" value="add" class="btn btn-primary">Sign up</button>
						</div>
					</div>
				</div>
				</fieldset>
			</form>
			<form id="defaultForm" method="post" action="form-validation.php">
				
			</form>
		</div>
		<?php echo $this->load->view('../views/admin/footer.php'); ?>
		<?php //include( "footer.php"); ?>
	</div>
</div>
	<?php echo $this->load->view('../views/admin/script.php'); ?>
<?php //include( "script.php"); ?>
<script type="text/javascript">
	$(document).ready(function() {
	    // Generate a simple captcha
	    function randomNumber(min, max) {
	        return Math.floor(Math.random() * (max - min + 1) + min);
	    };
	    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
	
	    $('#defaultForm').bootstrapValidator({
	//        live: 'disabled',
	        message: 'This value is not valid',
	        feedbackIcons: {
	            valid: 'glyphicon glyphicon-ok',
	            invalid: 'glyphicon glyphicon-remove',
	            validating: 'glyphicon glyphicon-refresh'
	        },
	        fields: {
	            firstName: {
	                group: '.col-lg-4',
	                validators: {
	                    notEmpty: {
	                        message: 'The first name is required and cannot be empty'
	                    }
	                }
	            },
	            lastName: {
	                group: '.col-lg-4',
	                validators: {
	                    notEmpty: {
	                        message: 'The last name is required and cannot be empty'
	                    }
	                }
	            },
	            username: {
	                message: 'The username is not valid',
	                validators: {
	                    notEmpty: {
	                        message: 'The username is required and cannot be empty'
	                    },
	                    stringLength: {
	                        min: 6,
	                        max: 30,
	                        message: 'The username must be more than 6 and less than 30 characters long'
	                    },
	                    regexp: {
	                        regexp: /^[a-zA-Z0-9_\.]+$/,
	                        message: 'The username can only consist of alphabetical, number, dot and underscore'
	                    },
	                    remote: {
	                        type: 'POST',
	                        url: 'remote.php',
	                        message: 'The username is not available'
	                    },
	                    different: {
	                        field: 'password,confirmPassword',
	                        message: 'The username and password cannot be the same as each other'
	                    }
	                }
	            },
	            email: {
	                validators: {
	                    emailAddress: {
	                        message: 'The input is not a valid email address'
	                    }
	                }
	            },
	            password: {
	                validators: {
	                    notEmpty: {
	                        message: 'The password is required and cannot be empty'
	                    },
	                    identical: {
	                        field: 'confirmPassword',
	                        message: 'The password and its confirm are not the same'
	                    },
	                    different: {
	                        field: 'username',
	                        message: 'The password cannot be the same as username'
	                    }
	                }
	            },
	            confirmPassword: {
	                validators: {
	                    notEmpty: {
	                        message: 'The confirm password is required and cannot be empty'
	                    },
	                    identical: {
	                        field: 'password',
	                        message: 'The password and its confirm are not the same'
	                    },
	                    different: {
	                        field: 'username',
	                        message: 'The password cannot be the same as username'
	                    }
	                }
	            },
	            birthday: {
	                validators: {
	                    date: {
	                        format: 'YYYY/MM/DD',
	                        message: 'The birthday is not valid'
	                    }
	                }
	            },
	            gender: {
	                validators: {
	                    notEmpty: {
	                        message: 'The gender is required'
	                    }
	                }
	            },
	            'languages[]': {
	                validators: {
	                    notEmpty: {
	                        message: 'Please specify at least one language you can speak'
	                    }
	                }
	            },
	            'programs[]': {
	                validators: {
	                    choice: {
	                        min: 2,
	                        max: 4,
	                        message: 'Please choose 2 - 4 programming languages you are good at'
	                    }
	                }
	            },
	            captcha: {
	                validators: {
	                    callback: {
	                        message: 'Wrong answer',
	                        callback: function(value, validator) {
	                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
	                            return value == sum;
	                        }
	                    }
	                }
	            }
	        }
	    });
	
	    // Validate the form manually
	    $('#validateBtn').click(function() {
	        $('#defaultForm').bootstrapValidator('validate');
	    });
	
	    $('#resetBtn').click(function() {
	        $('#defaultForm').data('bootstrapValidator').resetForm(true);
	    });
	});
</script>
</body>

</html>