

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="">
      <img src="<?php echo base_url(); ?>tools/dist/img/350x94.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8; height: 67px;">
     <!-- <span class="brand-text font-weight-light">V-Aesthetic</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>tools/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a><?=$this->session->userdata('username'); ?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
			<li class="nav-item">
				<a href="<?php echo base_url();?>index.php/user-dashboard" class="nav-link <?php if($m=="userdashboard"){echo 'active';}else{echo "";}?>">
				  <i class="nav-icon fas fa-tachometer-alt"></i>
				  <p>Dashboard</p>
				</a>
			</li>
			
			<li class="nav-item">
				<a href="<?php echo base_url();?>index.php/lead-list" class="nav-link <?php if($m=="lead"){echo 'active';}else{echo "";}?>">
				  <i class="nav-icon fas fa-edit"></i>
				  <p>Lead</p>
				</a>
			</li>
			
			<li class="nav-item">
				<a href="<?php echo base_url();?>index.php/sales-list" class="nav-link <?php if($m=="sales"){echo 'active';}else{echo "";}?>">
				  <i class="nav-icon fas fa-tree"></i>
				  <p>Sales</p>
				</a>
			</li>
		  
			<li class="nav-item"> 
				<a href="<?php echo base_url();?>index.php/expense-list" class="nav-link <?php if($m=="expense"){echo 'active';}else{echo "";}?>">
				  <i class="nav-icon fas fa-chart-pie"></i>
				  <p>Expense</p>
				</a>
			</li>
			
			<li class="nav-item">
				<a href="<?php echo base_url();?>index.php/user_controller/userticketlist" class="nav-link <?php if($m=="ticket"){echo 'active';}else{echo "";}?>">
				  <i class="nav-icon fas fa-book"></i>
				  <p>Tickets</p>
				</a>
			</li>
			
			<li class="nav-item <?php if($m=="alr"||$m=="llr"||$m=="dsr"||$m=="der"||$m=="ssr"){echo 'menu-open';}else{echo "";}?>">
				<a href="#" class="nav-link <?php if($m=="alr"||$m=="llr"||$m=="dsr"||$m=="der"||$m=="ssr"){echo 'active';}else{echo "";}?>">
				  <i class="nav-icon fas fa-copy"></i>
				  <p>Report
				  <i class="right fas fa-angle-left"></i>
				  </p>
				</a>
					<ul class="nav nav-treeview">
					  <li class="nav-item">
						<a href="<?php echo base_url();?>index.php/allleadreportsUser" class="nav-link <?php if($m=="alr"){echo 'active';}else{echo "";}?>">
						  <i class="far fa-circle nav-icon"></i>
						  <p style="font-size: 13px;">ALL LEAD REPORTS</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="<?php echo base_url();?>index.php/leadlocationreportsUser" class="nav-link <?php if($m=="llr"){echo 'active';}else{echo "";}?>">
						  <i class="far fa-circle nav-icon"></i>
						  <p style="font-size: 12px;">LOCATION WISE LEAD REPORT</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="<?php echo base_url();?>index.php/salesreportdateUser" class="nav-link <?php if($m=="dsr"){echo 'active';}else{echo "";}?>">
						  <i class="far fa-circle nav-icon"></i>
						  <p style="font-size: 13px;">DATE WISE SALES REPORT</p>
						</a>
					  </li>
					  <li class="nav-item">
						<a href="<?php echo base_url();?>index.php/expensereportdateUser" class="nav-link <?php if($m=="der"){echo 'active';}else{echo "";}?>">
						  <i class="far fa-circle nav-icon"></i>
						  <p style="font-size: 13px;">DATE WISE EXPENSE REPORT</p>
						</a>
					  </li>
					   <li class="nav-item">
						<a href="<?php echo base_url();?>index.php/salesservicereportsUser" class="nav-link <?php if($m=="ssr"){echo 'active';}else{echo "";}?>">
						  <i class="far fa-circle nav-icon"></i>
						  <p style="font-size: 13px;">SERVICE WISE SALES REPORT</p>
						</a>
					  </li>
					</ul>
			</li>
			
			<!--<li class="nav-item">
				<a href="<?php echo base_url();?>index.php/user_controller/userlist" class="nav-link">
				  <i class="nav-icon fas fa-th"></i>
				  <p>Add User</p>
				</a>
			</li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>