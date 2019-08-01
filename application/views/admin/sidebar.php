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
						<a href="<?php echo base_url();?>admin/dashboard" class="dropdown-toggle">
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
						<a href="<?php echo base_url();?>admin/Payment-details" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Payments Details</span>
						</a>
						
					</li>
					
					
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Banners </span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>admin/add-banner">Add Banner</a></li>
							<li><a href="<?php echo base_url();?>admin/banner-list">Banner List</a></li>
						</ul>
					</li>
				    <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Packages Details</span>
						</a>
						<ul class="submenu">
							<li><a href="<?php echo base_url();?>admin/add-package">Add Package</a></li>
							<li><a href="<?php echo base_url();?>admin/package-list">Package List</a></li>
						</ul>
					</li>
					
					<li class="dropdown">
						<a href="<?php echo base_url();?>admin/chat" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Chat</span>
						</a>
						
					</li>
					<li class="dropdown">
						<a href="<?php echo base_url();?>admin/change-password" class="dropdown-toggle">
							<span class="fa fa-home"></span><span class="mtext">Changepassword</span>
						</a>
						
					</li>
				</ul>
			</div>
		</div>
	</div>