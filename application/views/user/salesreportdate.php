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
    <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>tools/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>tools/dist/css/adminlte.min.css">
	
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

	<!-- Navbar Start -->

		<?php include('includes/user/navbar.php'); ?>
		
	<!-- /.navbar End -->

	<!-- Sidebar Start -->

		<?php $m="dsr"; include('includes/user/sidebar.php'); ?>

	<!-- Sidebar End  -->

  <!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
		  <div class="container-fluid">
			<div class="row mb-2">
			  <div class="col-sm-6">
				<h1><b>Sales Reports</b></h1>
			  </div>
			  <div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/user-dashboard">Home</a></li>
				  <li class="breadcrumb-item active"> Reports</li>
				  <li class="breadcrumb-item active"> Date wise Sales Reports</li>
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
							<h3 class="card-title">Sales Reports Search Date Wise</h3>
						  </div>
						  <!-- /.card-header -->
						  <!-- form start -->
							<form action="<?php echo base_url();?>index.php/user_controller/salesreportdate" method="POST">
								<div class="card-body">
									 <div class="row">
										<div class="col-12 col-sm-6">
											<div class="form-group">
												<label for="exampleInputDate">From Date</label>
												<input type="Date" class="form-control" id="fromexampleInputDate" name="fromdate" placeholder="Enter Date"  required>
											</div>
										</div>
										
										<div class="col-12 col-sm-6">
											<div class="form-group">
												<label for="exampleInputDate">To Date</label>
												<input type="Date" class="form-control" id="toexampleInputDate" name="todate" placeholder="Enter Date"  required>
											</div>
										</div>
									</div>
								
								</div>
								<!-- /.card-body -->

								<div class="card-footer">
								  <button type="submit" class="btn btn-primary">Search</button>
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
		
		
		<section class="content">
			<div class="container-fluid">
				<div class="row">
				  <!-- left column -->
					<div class="col-md-12">
						<!-- general form elements -->
						<div class="card card-primary">
						  <div class="card-header">
							<h3 class="card-title">Search Results</h3>
						  </div>
						  <!-- /.card-header -->
							
								<div class="card-body">
								
									<table id="example1" class="table table-bordered table-striped">
										<thead>
										  <tr>
											
											<th>Serial No</th>
											<th>Unique Serial No</th>
											<th>Customer Name</th>
											<th>Phone No</th>
											<th>Service Type</th>
											<th>Total Amount</th>
											<th>Advanced Amount</th>
											<th>Due Amount</th>
											<th>Date</th>
											<th>Remarks</th>
											<th>Sales By</th>
										  </tr>
										  </thead>
										  <tbody>
									
										<?php $i=1; if($searched_date){ foreach ($searched_date as $r){ ?>
											<tr>
												<td><?=$i;?></td>
												<td><?=$r['serial_no'];?></td>
												<td><?=$r['customer_name'];?></td>
												<td><?=$r['phoneno'];?></td>
												<td><?=$r['service'];?></td>
												<td><?=$r['total_amount'];?></td>
												<td><?=$r['adv_amount'];?></td>
												<td><?=$r['due_amount'];?></td>
												<td><?=$r['date'];?></td>
												<td><?=$r['remarks'];?></td>
												<td><?=$r['sales_person'];?></td>
											</tr>
										<?php  $i+=1;}} ?>
											
										</tbody>
									</table>
								
								</div>
								<!-- /.card-body -->
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

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url();?>tools/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>tools/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["csv", "excel",  "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
</body>
</html>
