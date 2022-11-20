<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<title>AdminLTE 3 | General Form Elements</title>-->
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

	<!-- Navbar Start -->

		<?php include('includes/user/navbar.php'); ?>
		
	<!-- /.navbar End -->

	<!-- Sidebar Start -->

		<?php $m="lead"; include('includes/user/sidebar.php'); ?>

	<!-- Sidebar End  -->

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
				  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/user-dashboard">Home</a></li>
				 <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/lead-list">Lead</a></li>
				  <li class="breadcrumb-item active"> Add Lead</li>
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
							<h3 class="card-title">Add Lead</h3>
						  </div>
						  <!-- /.card-header -->
						  <!-- form start -->
							<form action="<?php echo base_url();?>index.php/user_controller/leaddo" method="POST">
								<div class="card-body">
								<!--
									<div class="form-group">
										<label for="exampleInputEmail1">Serial No</label>
										<input type="text" class="form-control" id="classid" name="classid" placeholder="Enter Your Class Id" readonly>
									</div>
								-->
								
									<div class="form-group">
										<label>Full Name</label>
										<input type="text" class="form-control" id="exampleInputname" name="name" placeholder="Enter Your Name" required>
									</div>
									<div class="form-group">
										<label>Email address</label>
										<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter Your email">
									</div>
									<div class="form-group">
										<label>Contact No</label>
										<input type="number" class="form-control" id="exampleInputcontact" name="phone" placeholder="Enter your Contact"  required>
									</div>
									<div class="form-group">
										<label>Address</label>
										<textarea type="text" class="form-control" id="exampleInputaddress" name="address" placeholder="Enter Your Address"></textarea>
									</div>
									<div class="form-group">
										<label>Reference</label>
										<input type="text" class="form-control" id="exampleInputreference" name="reference" placeholder="Enter Your Reference">
									</div>
									<div class="form-group">
										<label>Location</label>
										<input type="text" class="form-control" id="exampleInputlocation" name="location" placeholder="Enter Your Location" required>
									</div>
									<div class="form-group">
										<label>ID Card Type</label>
										<select class="form-control" name="status" id="status">
										  <option>Select</option>
										  <option>Adhar Card</option>
										  <option>PAN Card</option>
										  <option>Voter ID</option>
										  <option>Driving License</option>
										  <option>Passport</option>
										</select>
									</div>
									<div class="form-group">
										<label>ID Card No</label>
										<input type="text" class="form-control" id="exampleInputcard" name="cardno" placeholder="Enter Your Card No">
									</div>
									<div class="form-group">
										<label>Lead By</label>
										<input type="text" class="form-control" id="exampleInputlead" name="leadperson" placeholder="<?=$this->session->userdata('username'); ?>" value="<?=$this->session->userdata('username'); ?>" readonly>
									</div>
									<input type="text" class="form-control" id="user_uid" name="user_uid" value="<?php echo $this->session->userdata('id'); ?>" hidden>
								 
								 
								</div>
								<!-- /.card-body -->

								<div class="card-footer">
								  <button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</form>
						</div>
						<!-- /.card -->
					</div>
				  <!--/.col (left) -->
				</div>
				<!-- /.row -->
			</div><!-- /.container-fluid -->
		</section>
    <!-- /.content -->
	</div>
  <!-- /.content-wrapper -->
  
  
	<!-- Footer Start -->

	<?php include('includes/user/footer.php'); ?>

	<!-- Footer End -->
	
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
<!--<script  src="<?php echo base_url();?>tools/dist/js/demo.js"></script> -->
<!-- Page specific script -->

<!--
	<script>
		document.getElementById("classid").value = 'VA_' + Date.now();
	</script>
-->
</body>
</html>
