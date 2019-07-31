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
					<div class="form-group col-md-6">
						<label class="">Billing</label>
						<div class="">
							<select class="form-control" name="billing" id="billing_id">
								<option>Select</option>
								<option value="1">Half Yearly</option>
								<option value="2">Yearly</option>
							</select>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label class="">Packages</label>
						<div class="">
							<select class="form-control" name="packge_id" id="package_id" >
								<option value="">Select billing first</option>
							</select>
						</div>
					</div>
					<div class="form-group col-md-6">
						<label class="">prise (monthly)</label>
						<div class="">
							<input type="text" class="form-control" readonly id="package_cost" placeholder="enter ammount" />
						</div>
					</div>
					<div class="form-group col-md-12">
						<div class="col-lg-9 col-lg-offset-3">
							<button type="submit" name="submit" value="add" class="btn btn-primary">Add</button>
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


<script>

$(document).ready(function(){
    $('#billing_id').on('change', function(){
        var billing_id = $(this).val();
			if(billing_id){
            $.ajax({
                type:'POST',
                url:'<?php echo base_url('Admin/Restaurant/getpackage'); ?>',
                data:'billing_id='+billing_id,
                success:function(data){
                    $('#package_id').html('<option value="">Select Package</option>'); 
                    var dataObj = jQuery.parseJSON(data);
                    if(dataObj){
                        $(dataObj).each(function(){
                            var option = $('<option />');
							
                            option.attr('value', this.id).text(this.package_name);           
                            $('#package_id').append(option);
                        });
                    }else{
                        $('#package_id').html('<option value="">package not available</option>');
                    }
                }
            }); 
        }else{
            $('#package_id').html('<option value="">Select billing first</option>');
        }
    });
	
	
}); 

    $(document).ready(function(){
	
	$('#package_id').on('change', function(){
		var package_id = $(this).val();
		if(package_id){
            $.ajax({
                type:'POST',
                url:'<?php echo base_url('Admin/Restaurant/getprise'); ?>',
                data:'package_id='+package_id,
                success:function(data){
                    $('#package_cost').val(data);
                    //alert(data);
                }
            }); 
        }
	});

    });

</script>
</body>

</html>