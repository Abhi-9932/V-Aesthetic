	<!DOCTYPE html>
	<html lang="en">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>V-Aesthetic</title>
      <link rel=icon href="<?php echo base_url();?>/tools/dist/img/LargeLogo.png" sizes="20x20" type="image/png">

	  <!-- Google Font: Source Sans Pro -->
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	  <!-- Font Awesome -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/fontawesome-free/css/all.min.css">
	  <!-- Theme style -->
	  <link rel="stylesheet" href="<?php echo base_url();?>tools/dist/css/adminlte.min.css">
	</head>
	<body class="hold-transition sidebar-mini">
	<div class="wrapper">

	  <!-- Navbar -->
	   <?php include('includes/admin/navbar.php'); ?>
	   
	  <!-- /.navbar -->

	  <!-- Main Sidebar -->
	  <?php $m="expense"; include('includes/admin/sidebar.php'); ?>
      
	  <!-- Main Sidebar end -->
	  
	  <!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				  <div class="container-fluid">
					<div class="row mb-2">
					  <div class="col-sm-6">
					   
					  </div>
					  <div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
						  <li class="breadcrumb-item active">Expense</li>
						  <li class="breadcrumb-item active"> Edit Expense</li>
						</ol>
					  </div>
					</div>
				  </div>
			</section>

			<!-- Main content -->
			<section class="content">
				  <div class="container-fluid">
							<div class="row">
							  <!-- left column -->
									<div class="col-md-12">
										<!-- general form elements -->
										 <div class="card card-primary">
											  <div class="card-header">
												<h3 class="card-title">Edit Expense</h3>
											  </div>
												  <!-- /.card-header -->
												  <!-- form start -->
												  <form action="<?php echo base_url();?>index.php/admin_controller/edit_expence_do" method="POST">
													<?php foreach($edit_expence as $r){?>
													<div class="card-body">
														<input type="text" class="form-control" id="id" name="id"  value="<?=$r['id'];?>" hidden>
													  <div class="form-group">
														<label>Amount</label>
														<input type="text" class="form-control" id="amount" name="amount" value="<?=$r['amount'];?>" required >
													  </div>
													  <div class="form-group">
														<label>Purpose</label>
														<input type="text" class="form-control" id="purpose"  name="purpose" value="<?=$r['purpose'];?>" required >
													  </div>
													  <div class="form-group">
														<label>Date</label>
														<input type="date" class="form-control" id="date" name="date" value="<?=$r['date'];?>" required >
													  </div>
													  <div class="form-group">
														<label>Remarks</label>
														<textarea type="text" class="form-control" id="remarks" name="remarks" required ><?=$r['remarks'];?></textarea>
													  </div>
													  <div class="form-group">
														<label>Expense By</label>
														<input type="text" class="form-control" id="expence" name="expence_person" placeholder="<?=$this->session->userdata('firstname'),'&nbsp;',$this->session->userdata('lastname'); ?>" value="<?=$this->session->userdata('firstname'),'&nbsp;',$this->session->userdata('lastname'); ?>" readonly>
													  </div>
													</div>
													
														<?php } ?>
													<div class="card-footer">
													  <button type="submit" class="btn btn-primary">Edit</button>
													</div>
												  </form>
										  </div>
								   </div>
						   </div>
					</div>
			</section>
			
	  </div>
	  <!-- /.content-wrapper -->
	   <?php include('includes/admin/footer.php'); ?>

	  <!-- Control Sidebar -->
	  <aside class="control-sidebar control-sidebar-dark">
		<!-- Control sidebar content goes here -->
	  </aside>
	  <!-- /.control-sidebar -->
	</div>
	<!-- ./wrapper -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>tools/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url();?>tools/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- bs-custom-file-input -->
	<script src="<?php echo base_url();?>tools/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	<!-- AdminLTE App -->
	<script  src="<?php echo base_url();?>tools/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<!--<script  src="<?php echo base_url();?>tools/dist/js/demo.js"></script>-->
	<!-- Page specific script -->
	<script>
	$(function () {
	  bsCustomFileInput.init();
	});
	</script>
	</body>
	</html>
