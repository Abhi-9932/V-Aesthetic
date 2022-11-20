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

		<?php include('includes/admin/navbar.php'); ?>
		
	<!-- /.navbar End -->

	<!-- Sidebar Start -->

		<?php $m="lead"; include('includes/admin/sidebar.php'); ?>

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
				  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
				  <li class="breadcrumb-item active">Lead</li>
				  <li class="breadcrumb-item active"> Edit Lead</li>
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
							<h3 class="card-title">Edit Lead</h3>
						  </div>
						  <!-- /.card-header -->
						  <!-- form start -->
							<form action="<?php echo base_url();?>index.php/admin_controller/edit_lead_do" method="POST">
								<?php foreach($edit_lead as $r){?>
								<div class="card-body">
									<input type="text" class="form-control" id="id" name="id"  value="<?=$r['id'];?>" hidden>
								<!--
									<div class="form-group">
										<label for="exampleInputEmail1">Serial No</label>
										<input type="text" class="form-control" id="classid" name="classid" placeholder="Enter Your Class Id" readonly>
									</div>
								-->
									<div class="form-group">
										<label for="exampleInputEmail1">Full Name</label>
										<input type="text" class="form-control" id="name" name="name"  value="<?=$r['name'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Email address</label>
										<input type="email" class="form-control" id="email" name="email"  value="<?=$r['email'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Contact No</label>
										<input type="phone" class="form-control" id="phno" name="phone"  value="<?=$r['phno'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Address</label>
										<textarea type="text" class="form-control" id="address" name="address" required><?=$r['address'];?></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Reference</label>
										<input type="text" class="form-control" id="reference" name="reference"  value="<?=$r['reference'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Location</label>
										<input type="text" class="form-control" id="location" name="location"  value="<?=$r['location'];?>" required>
									</div>
									<div class="form-group">
										<label>ID Card Type</label>
										<select class="form-control" name="status" id="uid_card_type">
										  <option  value="<?=$r['uid_card_type'];?>" selected="selected"><?=$r['uid_card_type'];?></option>
										  <option>Adhar Card</option>
										  <option>PAN Card</option>
										  <option>Voter ID</option>
										  <option>Driving License</option>
										  <option>Passport</option>
										</select>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">ID Card No</label>
										<input type="text" class="form-control" id="uid_card_no" name="cardno"  value="<?=$r['uid_card_no'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Lead By</label>
										<input type="text" class="form-control" id="exampleInputlead" name="leadperson" placeholder="<?=$this->session->userdata('firstname'),'&nbsp;',$this->session->userdata('lastname'); ?>" value="<?=$this->session->userdata('firstname'),'&nbsp;',$this->session->userdata('lastname'); ?>" readonly>
									</div>
								 
								 
								</div>
								<!-- /.card-body -->
									<?php } ?>
								<div class="card-footer">
								  <button type="submit" class="btn btn-primary">Edit</button>
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

	<?php include('includes/admin/footer.php'); ?>

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
