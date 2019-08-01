
<?php $this->load->view('../views/kitchen/head.php'); ?>
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asserts/src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/asserts/src/plugins/datatables/media/css/responsive.dataTables.css">
<?php $this->load->view('../views/kitchen/header.php'); ?>
<?php $this->load->view('../views/kitchen/sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Orders List</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Orders</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<!--<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>-->
						</div>
					</div>
				</div>
				
				
				<!-- multiple select row Datatable End -->
				<!-- Export Datatable start -->
				
				<div class="pd-20 border-radius-4 box-shadow mb-30">
				
					<div class="row">
					<?php foreach($table_data as $val){ ?>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p pos-reltive">
						<div class="project-info clearfix">
								<div class="project-info-left">
								<div class="icon box-shadow  text-white">
									<img src="../vendors/images/table.png">
								</div>
							</div>
							<div class="project-info-right" style="text-align:left;margin-top:20px; ">
								<span class="no text-blue weight-500 font-24">Table :<?php echo $val['table_name'];?></span>
							
							</div>
							<div style="position: absolute;right:-10px;top:-10px;">
								<div style="background:#fff;height:40px;width:40px;border-radius:50%;padding:5px;-webkit-box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.4);box-shadow: 0px 0px 6px rgba(0, 0, 0, 0.4);text-align:center">
									5
								</div>
							</div>
							
						</div>
						<hr style="margin:0px 0px 5px 0px;">
						<div class="">
							<a href="">Amt :3500</a> | 
							<a id="mts"  data-id="<?php echo $val['id']?>" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#bd-example-modal-lg" >View</a>
						</div>
					</div>
				</div>
				
				<?php } ?>
					
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			<div class="modal fade bs-example-modal-lg" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title" id="myLargeModalLabel">Table 4 Menu Details</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<table class="table table-bordered">
											  <thead>
												<tr>
												  <th scope="col">s.no</th>
												  <th scope="col">Item Name</th>
												  <th scope="col">Item Type</th>
												  <th scope="col">Qty</th>
												  <th scope="col">Price</th>
												  <th scope="col">Status</th>
												</tr>
											  </thead>
											  <tbody id="order_data">
												
											  </tbody>
											</table>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary">Close Order</button>
										</div>
									</div>
								</div>
							</div>
			<?php $this->load->view('../views/kitchen/footer.php'); ?>
		</div>
	</div>
	<?php $this->load->view('../views/kitchen/script.php'); ?>
	
</body>
</html>

<script type="text/javascript">
   $(document).ready(function () {
      $(document).on("click", "#mts", function () {
          var id = $(this).data('id');
		  
		      var baseurl = "<?php echo base_url();?>";
			    $('#order_data').html('');
		        $.get(baseurl+'/Kitchen/Orders/orderdetails/' + id, function (data) {
				var obj = JSON.parse(data);
				 var j=1;
				 var ordtotal = 0;
				    $.each(obj, function (i, k) {
						if(k.status ==0){
							var status = "<button class='btn btn-primary btn-sm updateorder' data-id="+k.id+">Update</button><button  class='btn btn-danger btn-sm cancelorder' data-id="+k.id+">Cancel</button>";
						}
						if(k.status ==1){
							var status = "<button class='btn btn-success btn-sm'><i class='fa fa-check-circle-o' aria-hidden='true'></i> Delivered</button>";
						}
						if(k.status ==2){
							var status = "<button  class='btn btn-danger btn-sm '>Canceled</button>";
						}
						$('#order_data').append("<tr><td>" + j+ "</td><td>" + k.item_name + "</td><td>" + k.item_type + "</td><td>" + k.quantity + "</td><td>" + k.prise + "</td><td>"+status+"</td></tr>");
						ordtotal += parseInt(k.prise);
						//ordtotal += k.prise;		
						j++;
            });
    	    $('#order_data').append("<tr><th colspan='2'><div class=''>Tax: 150</div></th><th colspan='2' ><div class=''>GST: 150</div></th><th colspan='2' ><div class=''>Grand Total:"+ ordtotal+"</div></th></tr>");
			});
		  
      });
    	$(document).on("click", ".updateorder", function () {
            var cnf = confirm("Are you you want to change status!");
            if(cnf == true){
			var id = $(this).data('id');
			var baseurl = "<?php echo base_url();?>";
				$.get(baseurl+'/Kitchen/Orders/updateorderdata/' + id, function (data) {
				});
			}
        });
		
		$(document).on("click", ".cancelorder", function () {
			var id = $(this).data('id');
			var baseurl = "<?php echo base_url();?>";
				$.get(baseurl+'/Kitchen/Orders/cancelorderdata/' + id, function (data) {
					alert(data);
				});
        });
   });    
</script>


