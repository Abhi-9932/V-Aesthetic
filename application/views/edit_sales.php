<?php 
//ini_set('display_errors', 1); 
//error_reporting(E_ALL);
?>


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
  
	<style>
		.option{
			display:none;
		}
	</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

	<!-- Navbar Start -->

		<?php include('includes/admin/navbar.php'); ?>
		
	<!-- /.navbar End -->

	<!-- Sidebar Start -->

		<?php $m="sales"; include('includes/admin/sidebar.php'); ?>

	<!-- Sidebar End  -->

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1>Sales List</h1>
			  </div>
			  <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
				  <li class="breadcrumb-item active">Sales</li>
				  <li class="breadcrumb-item active">Edit Sale</li>
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
							<h3 class="card-title">Edit Sales</h3>
						  </div>
						  <!-- /.card-header -->
						  <!-- form start -->
							<form action="<?php echo base_url();?>index.php/admin_controller/sales_edit_do" method="POST">
								<?php foreach($edit_sales as $r){?>
								<div class="card-body">
									<input type="text" class="form-control" id="id" name="id"  value="<?=$r['id'];?>" hidden>
									<div class="form-group" id="serialNumber">
										<label for="exampleInputEmail1">Serial No</label>
										<input type="text" class="form-control" id="serialno" name="serialno" value="<?=$r['serial_no'];?>" readonly>
										
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Customer Name</label>
										<input type="text" class="form-control" id="customer_name" name="name" value="<?=$r['customer_name'];?>" readonly>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Phone No</label>
										<input type="number" class="form-control" id="phoneno" name="phoneno" value="<?=$r['phoneno'];?>" readonly>
									</div>
									<div class="form-group">
										<label for="exampleInputService">Service Type</label>
										<input type="text" class="form-control" id="exampleInputService" name="service" value="<?=$r['service'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Total Amount</label>
										<input type="text" class="form-control" id="total_amount" name="totalamount" value="<?=$r['total_amount'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Advanced Amount</label>
										<input type="text" class="form-control" id="adv_amount" name="advancedamount" value="<?=$r['adv_amount'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Due Amount</label>
										<input type="text" class="form-control" id="due_amount" name="dueamount" value="<?=$r['due_amount'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputDate">Date</label>
										<input type="Date" class="form-control" id="date" name="date" value="<?=$r['date'];?>" required>
									</div>
									<div class="form-group">
										<label for="exampleInputEmail1">Remarks</label>
										<textarea type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter Your Remarks" required><?=$r['remarks'];?></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputPassword1">Sales By</label>
										<input type="text" class="form-control" id="exampleInputsales" name="salesperson" placeholder="<?=$this->session->userdata('firstname'),'&nbsp;',$this->session->userdata('lastname'); ?>" value="<?=$this->session->userdata('firstname'),'&nbsp;',$this->session->userdata('lastname'); ?>" readonly>
									</div>
								 
								 
								</div>
								<!-- /.card-body -->
									<?php } ?>
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

<!--<script>document.getElementById("classid").value = 'VA_' + Date.now();</script>-->



</body>
</html>
