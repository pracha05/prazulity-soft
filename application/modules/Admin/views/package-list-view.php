  <?php echo $this->load->view('../views/admin/head.php'); ?>

	<?php //include('head.php'); ?>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asserts/src/plugins/datatables/media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asserts/src/plugins/datatables/media/css/dataTables.bootstrap4.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>asserts/src/plugins/datatables/media/css/responsive.dataTables.css">
	
    <?php echo $this->load->view('../views/admin/header.php'); ?>
	<?php echo $this->load->view('../views/admin/sidebar.php'); ?>
	<?php //include('header.php'); ?>
	<?php //include('sidebar.php'); ?>
	<div class="main-container">
		<div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header pd-20 bg-white border-radius-4 box-shadow mb-30">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Package List</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Package List</li>
								</ol>
							</nav>
						</div>
						<!--<div class="col-md-6 col-sm-12 text-right">
							<div class="dropdown">
								<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
									January 2018
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="#">Export List</a>
									<a class="dropdown-item" href="#">Policies</a>
									<a class="dropdown-item" href="#">View Assets</a>
								</div>
							</div>
						</div>-->
					</div>
				</div>
				
				
				<!-- multiple select row Datatable End -->
				<!-- Export Datatable start -->
				<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
				
				<?php if($this->session->flashdata('msg_succ') != ''){?>  
			<div class="alert alert-info alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				<i class="fa fa-check-circle"></i>
				<?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?>
			</div>
		<?php } ?>
				
					<div class="row">
						<table class="stripe hover multiple-select-row data-table-export nowrap">
							<thead>
								<tr>
									<th class="">Sr.no</th>
									<th class="table-plus datatable-nosort">Package Name</th>
									<th>Prise</th>
									<th>Billing</th>
									<th>Created</th>
									
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
							
							<?php  $i=1;foreach($record as $key => $row){ ?>
								<tr>
									<td class="1"><?php echo $i;?></td>
									<td class="table-plus"><?php echo  $row['package_name'];?></td>
									<td><?php echo  $row['cost_package'];?></td>
									<td><?php if($row['billing'] ==1){ echo "Half Yearly"; }else{ echo  "Yearly";}?></td>
									<td><?php echo  date('d-m-Y',strtotime($row['created']));?></td>
									<td>
										<div class="dropdown">
											<a class="btn btn-outline-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
												<i class="fa fa-ellipsis-h"></i>
											</a>
											<div class="dropdown-menu dropdown-menu-right">
												<!--<a class="dropdown-item" href="#"><i class="fa fa-eye"></i> View</a>-->
												<a class="dropdown-item" href="<?php echo base_url();?>admin/edit-package/<?php echo  $row['id'];?>"><i class="fa fa-pencil"></i> Edit</a>
												<a class="dropdown-item" href="<?php echo base_url();?>admin/Packages/delete/<?php echo  $row['id'];?>"><i class="fa fa-trash"></i> Delete</a>
											</div>
										</div>
									</td>
								</tr>
								
								
							<?php $i++;}?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- Export Datatable End -->
			</div>
			    <?php echo $this->load->view('../views/admin/footer.php'); ?>

			<?php //include('footer.php'); ?>
		</div>
	</div>
	<?php echo $this->load->view('../views/admin/script.php'); ?>
	<?php //include('script.php'); ?>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/dataTables.bootstrap4.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/dataTables.responsive.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/responsive.bootstrap4.js"></script>
	<!-- buttons for Export datatable -->
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/button/dataTables.buttons.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/button/buttons.bootstrap4.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/button/buttons.print.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/button/buttons.html5.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/button/buttons.flash.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/button/pdfmake.min.js"></script>
	<script src="<?php echo base_url();?>asserts/src/plugins/datatables/media/js/button/vfs_fonts.js"></script>
	<script>
		$('document').ready(function(){
			$('.data-table').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
			});
			$('.data-table-export').DataTable({
				scrollCollapse: true,
				autoWidth: false,
				responsive: true,
				columnDefs: [{
					targets: "datatable-nosort",
					orderable: false,
				}],
				"lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"language": {
					"info": "_START_-_END_ of _TOTAL_ entries",
					searchPlaceholder: "Search"
				},
				dom: 'Bfrtip',
				buttons: [
				    {
					   extend: 'copy',
					   footer: false,
					   exportOptions: {
							columns: [0,1,2,3,4]
						}
				   },
				   
				   {
					   extend: 'csv',
					   footer: false,
					   exportOptions: {
							columns: [0,1,2,3,4]
						}
					  
				   },
				   {
					   extend: 'pdf',
					   footer: true,
						exportOptions: {
							columns: [0,1,2,3,4]
						}
					   
					  
				   },
				   
				   {
					   extend: 'print',
					   footer: false,
					   exportOptions: {
							columns: [0,1,2,3,4]
						}
				   }         
				]
			});
			var table = $('.select-row').DataTable();
			$('.select-row tbody').on('click', 'tr', function () {
				if ($(this).hasClass('selected')) {
					$(this).removeClass('selected');
				}
				else {
					table.$('tr.selected').removeClass('selected');
					$(this).addClass('selected');
				}
			});
			var multipletable = $('.multiple-select-row').DataTable();
			$('.multiple-select-row tbody').on('click', 'tr', function () {
				$(this).toggleClass('selected');
			});
		});
	</script>
</body>
</html>