	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="<?php echo base_url();?>/asserts/vendors/images/deskapp-logo.png" alt="">
			</a>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="dashboard.php" class="dropdown-toggle">
							<span class="fa fa-dashboard"></span><span class="mtext">Dashboard </span>
						</a>
						
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Restaurant </span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>admin/add-restaurant">Add Restaurant</a></li>
							<li><a href="<?php echo base_url();?>admin/Restaurant">Restaurants List</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Payments</span>
						</a>
						<ul class="submenu">
							<li><a href="payment-details.php">Add Payments</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Running Client Status</span>
						</a>
						<ul class="submenu">
							<li><a href="running-client-status.php">Add Running Client Status</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="chat.php" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Chat</span>
						</a>
						
					</li>
				</ul>
			</div>
		</div>
	</div>