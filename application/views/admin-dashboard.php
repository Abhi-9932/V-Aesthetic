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

			<?php include('includes/admin/navbar.php'); ?>
			
		<!-- /.navbar End -->

		<!-- Sidebar Start -->

			<?php  $m="admindashboard"; include('includes/admin/sidebar.php'); ?>

		<!-- Sidebar End Start -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
					  <div class="col-sm-6">
					 <h1><b>Dashboard</b></h1>
					  </div>
					  <div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
						  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/dashboard">Home</a></li>
						  <li class="breadcrumb-item active"> Dashboard</li>
						</ol>
					  </div>
					</div>
				</div><!-- /.container-fluid -->
			</section>

			<!-- Main content -->
		<section class="content">
		  <div class="container-fluid">
			<div class="row">
			  <div class="col-12">
			  
			  <!--- Lead list start--->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title"><b>Lead List</b></h3>
				  </div>
				  
				  <div class="card-body">
					<table id="example2" class="table table-bordered table-hover leadTable">
					  <thead>
					   <tr>
							<th>Serial No</th>
							<!--<th>Unique Serial No</th>-->
							<!--<th>dand</th>-->
							<!--<th>Class Id</th>-->
							<th>Full Name</th>
							<th>Email</th>
							<th>Contact No</th>
							<th>Address</th>
							<th>Reference</th>
							<th>Location</th>
							<th>Id Card Type</th>
							<th>Id Card No</th>
							<th>Lead By</th>
							
						</tr>
					  </thead>
					  <tbody>
					  <?php $i=1;foreach ($leads as $r){?>
						<tr>
							
							<td><?=$i;?></td>
							<!--<td><?//=$r['classid'];?></td>-->
							<td><?=$r['name'];?></td>
							<td><?=$r['email'];?></td>
							<td><?=$r['phno'];?></td>
							<td><?=$r['address'];?></td>
							<td><?=$r['reference'];?></td>
							<td><?=$r['location'];?></td>
							<td><?=$r['uid_card_type'];?></td>
							<td><?=$r['uid_card_no'];?></td>
							<td><?=$r['lead_person'];?></td>
						</tr>
							<?php $i+=1; } ?>
					  </tbody>
					 
					</table>
				  </div>
				  
				</div>
				
				<!--- Lead list end--->
			   
				
				
				<!--- Sales list start--->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title"><b>Sales List</b></h3>
				  </div>
				 
				  <div class="card-body">
					<table id="example1" class="table table-bordered table-striped salesTable">
					  <thead>
						 <tr>
								<!--<th>ID</th> -->
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
					  <?php  $i=1; foreach ($sales as $r){?>
						<tr>		
								<td><?=$i;?></td>
								<!--<td><?=$r['id'];?></td> -->
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
							<?php  $i+=1;  } ?>
					  
					  </tbody>
					  
					</table>
				  </div>
				 
				</div>
				<!--- Sales list end--->
				
				<!--- Ticket list start--->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title"><b>Tickets List</b></h3>
				  </div>
				 
				  <div class="card-body">
					<table id="example3" class="table table-bordered table-striped ticketTable">
					  <thead>
						 <tr>
							<th>Serial No</th>
							<!--<th>S.NO</th>-->
							<!--<th>Class Id</th>-->
							<th>User Name</th>
							<th>Reference 1</th>
							<th>Reference 2</th>
							<th>Reference 3</th>
							<th>Date</th>
							<th>Time</th>
							<th>Issues</th>
							
						</tr>
					  </thead>
					  <?php  $i=1;foreach ($tickets as $r){?>
					<tr>
					
						<td><?=$i;?></td>
						<!--<td><?=$r['id'];?></td> -->
						
						<td><?=$r['username'];?></td>
						<td><?php if($r['file1']=="N/A"){echo "N/A";}else{ ?><a target="_blank" href="<?php echo base_url(); ?>tools/upload/user/<?=$r['file1'];?>">View</a><?php } ?> </td>
						<td><?php if($r['file2']=="N/A"){echo "N/A";}else{ ?><a target="_blank" href="<?php echo base_url(); ?>tools/upload/user/<?=$r['file2'];?>">View</a><?php } ?> </td>
						<td><?php if($r['file3']=="N/A"){echo "N/A";}else{ ?><a target="_blank" href="<?php echo base_url(); ?>tools/upload/user/<?=$r['file3'];?>">View</a><?php } ?> </td>
						<td><?=$r['date'];?></td>
						<td><?=$r['time'];?></td>
						<td><?=$r['issues'];?></td>
	
					</tr>
					<?php $i+=1; } ?>
					
					  </tbody>
					  
					</table>
				  </div>
				  
				</div>
				
				<!--- Ticket list end--->
				
				<!--- expense list start--->
				<div class="card card-primary">
				  <div class="card-header">
					<h3 class="card-title"><b>Expenses List</b></h3>
				  </div>
				  <!-- /.card-header -->
				  <div class="card-body">
					<table id="example4" class="table table-bordered table-striped expensesTable">
					  <thead>
							 <tr>
								<th>Serial No</th>
								<!--<th>S.No</th>-->
								<!--<th>Class Id</th>-->
								<th>Amount</th>
								<th>Purpose</th>
								<th>Date</th>
								<th>Remarks</th>
								<th>Expense By</th>
							 </tr>
					  </thead>
						 <tbody>
						  <?php  $i=1; foreach ($users as $r){?>
								<tr>
									<td><?=$i;?></td>
									<!--<td><?=$r['id'];?></td>-->
									<td><?=$r['amount'];?></td>
									<td><?=$r['purpose'];?></td>
									<td><?=$r['date'];?></td>
									<td><?=$r['remarks'];?></td>
									<td><?=$r['expence_person'];?></td>
									
									
								</tr>
						 <?php  $i+=1;} ?>
						  
						  </tbody>
					  
					</table>
				  </div>
				  
				</div>
				
				<!--- expense list end--->
			   
			  </div>  
			  <!-- /.col -->
			  
			</div>   
			<!-- /.row -->
			
		  </div>
		  <!-- /.container-fluid -->
		</section>
				
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
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>tools/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
	  "lengthChange": false,
	  "autoWidth": false,
	  
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
	$('#example3').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
	$('#example4').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
