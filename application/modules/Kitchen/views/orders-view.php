
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
						</div>
					</div>
				</div>
				
				
				<!-- multiple select row Datatable End -->
				<!-- Export Datatable start -->
				<div class="pd-20 border-radius-4 box-shadow mb-30">
				
					<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p pos-reltive">
						<div class="project-info clearfix">
								<div class="project-info-left">
								<div class="icon box-shadow  text-white">
									<img src="../vendors/images/table.png">
								</div>
							</div>
							<div class="project-info-right" style="text-align:left;margin-top:20px; ">
								<span class="no text-blue weight-500 font-24">Table :4</span>
							
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
							<a href="" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#bd-example-modal-lg" >View</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p pos-reltive">
						<div class="project-info clearfix">
								<div class="project-info-left">
								<div class="icon box-shadow  text-white">
									<img src="../vendors/images/table.png">
								</div>
							</div>
							<div class="project-info-right" style="text-align:left;margin-top:20px; ">
								<span class="no text-blue weight-500 font-24">Table :4</span>
							
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
							<a href="" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#bd-example-modal-lg" >View</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p pos-reltive">
						<div class="project-info clearfix">
								<div class="project-info-left">
								<div class="icon box-shadow  text-white">
									<img src="../vendors/images/table.png">
								</div>
							</div>
							<div class="project-info-right" style="text-align:left;margin-top:20px; ">
								<span class="no text-blue weight-500 font-24">Table :4</span>
							
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
							<a href="" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#bd-example-modal-lg" >View</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p pos-reltive">
						<div class="project-info clearfix">
								<div class="project-info-left">
								<div class="icon box-shadow  text-white">
									<img src="../vendors/images/table.png">
								</div>
							</div>
							<div class="project-info-right" style="text-align:left;margin-top:20px; ">
								<span class="no text-blue weight-500 font-24">Table :4</span>
							
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
							<a href="" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#bd-example-modal-lg" >View</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p pos-reltive">
						<div class="project-info clearfix">
								<div class="project-info-left">
								<div class="icon box-shadow  text-white">
									<img src="../vendors/images/table.png">
								</div>
							</div>
							<div class="project-info-right" style="text-align:left;margin-top:20px; ">
								<span class="no text-blue weight-500 font-24">Table :4</span>
							
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
							<a href="" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#bd-example-modal-lg" >View</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p pos-reltive">
						<div class="project-info clearfix">
								<div class="project-info-left">
								<div class="icon box-shadow  text-white">
									<img src="../vendors/images/table.png">
								</div>
							</div>
							<div class="project-info-right" style="text-align:left;margin-top:20px; ">
								<span class="no text-blue weight-500 font-24">Table :4</span>
							
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
							<a href="" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#bd-example-modal-lg" >View</a>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 mb-30">
					<div class="bg-white pd-20 box-shadow border-radius-5 height-100-p pos-reltive">
						<div class="project-info clearfix">
								<div class="project-info-left">
								<div class="icon box-shadow  text-white">
									<img src="../vendors/images/table.png">
								</div>
							</div>
							<div class="project-info-right" style="text-align:left;margin-top:20px; ">
								<span class="no text-blue weight-500 font-24">Table :4</span>
							
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
							<a href="" class="btn btn-primary btn-sm pull-right" data-toggle="modal" data-target="#bd-example-modal-lg" >View</a>
						</div>
					</div>
				</div>
				
					
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
												  <th scope="col">#</th>
												  <th scope="col">Item Name</th>
												  <th scope="col">Item Type</th>
												  <th scope="col">Qty</th>
												  <th scope="col">Price</th>
												  <th scope="col">Status</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <td >1</td>
												  <td>Lollypup </td>
												  <td>Non Veg </td>
												  <td>2 </td>
												  <td>350  </td>
												  <td>
													<a href="" class="btn btn-success btn-sm"><i class="fa fa-check-circle-o" aria-hidden="true"></i> Delivered</a>
													
												   </td>
												  </td>
												</tr>
													<tr>
												  <td >2</td>
												  <td>Lollypup </td>
												  <td>Non Veg </td>
												  <td>2 </td>
												  <td>350  </td>
												  <td>
													<a href="" class="btn btn-primary btn-sm">Update</a>
													<a href="" class="btn btn-danger btn-sm">Cancel</a>
												   </td>
												  </td>
												</tr>
													<tr>
												  <td >3</td>
												  <td>Lollypup </td>
												  <td>Non Veg </td>
												  <td>2 </td>
												  <td>350  </td>
												  <td>
													<a href="" class="btn btn-primary btn-sm">Update</a>
													<a href="" class="btn btn-danger btn-sm">Cancel</a>
												   </td>
												  </td>
												</tr>
												<tr>
												  <td >4</td>
												  <td>Lollypup </td>
												  <td>Non Veg </td>
												  <td>2 </td>
												  <td>350  </td>
												  <td>
													<a href="" class="btn btn-primary btn-sm">Update</a>
													<a href="" class="btn btn-danger btn-sm">Cancel</a>
												   </td>
												  </td>
												</tr>
												<tr>
												  <td >4</td>
												  <td>Lollypup </td>
												  <td>Non Veg </td>
												  <td>2 </td>
												  <td>350  </td>
												  <td>
													<a href="" class="btn btn-primary btn-sm">Update</a>
													<a href="" class="btn btn-danger btn-sm">Cancel</a>
												   </td>
												  </td>
												</tr>
												<tr>
												  <td >4</td>
												  <td>Lollypup </td>
												  <td>Non Veg </td>
												  <td>2 </td>
												  <td>350  </td>
												  <td>
													<a href="" class="btn btn-primary btn-sm">Update</a>
													<a href="" class="btn btn-danger btn-sm">Cancel</a>
												   </td>
												  </td>
												</tr>
												<tr>
													<th colspan="2" >
														<div class="">Tax: 150</div>
													</th>
													<th colspan="2" >
														<div class="">GST: 150</div>
												
													</th>
													<th colspan="2" >
													
														<div class="">Grand Total: 1400</div>
													</th>
												</tr>
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