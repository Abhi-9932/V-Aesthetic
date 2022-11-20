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
	   <?php include('includes/user/navbar.php'); ?>
	   
	  <!-- /.navbar -->

	  <!-- Main Sidebar -->
	  <?php $m="ticket"; include('includes/user/sidebar.php'); ?>
      
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
						  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/user-dashboard">Home</a></li>
						  <li class="breadcrumb-item"><a href="<?php echo base_url();?>index.php/user_controller/userticketlist">Tickets</a></li>
						  <li class="breadcrumb-item active">Add Ticket</li>
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
												<h3 class="card-title">Add Ticket</h3>
											  </div>
												  <!-- /.card-header -->
												  <!-- form start -->
												  <form action="<?php echo base_url();?>index.php/user_controller/ticketdo" method="POST" enctype="multipart/form-data">
													<div class="card-body">
													
														<div class="form-group">
															<label>User Name</label>
															<input type="text" class="form-control" id="username" name="username" placeholder="<?=$this->session->userdata('username'); ?>" value="<?=$this->session->userdata('username'); ?>" readonly>
														</div>

														<div class="form-group">
															<label for="exampleInputDate">Date</label>
															<input type="text" class="form-control" id="currentDate" name="currentDate" placeholder="Enter Date" readonly>
														</div>

														<div class="form-group">
															<label for="exampleInputDate">Time</label>
															<input type="text" class="form-control" id="currentTime" name="currentTime" placeholder="Enter Time" readonly>
														</div>
														
														<div>
														   <label> Reference 1</label>
														   <div class="input-group">
														    <div class="custom-file">
															<input type="file" class="custom-file-input" id="image1" name="image1">
															<label class="custom-file-label" for="exampleInputFile">Choose file</label>
														    </div>
														</div>
														</div>
														
														<div>
														<label> Reference 2</label>
														<div class="input-group">
														    <div class="custom-file">
															<input type="file" class="custom-file-input" id="image2" name="image2">
															<label class="custom-file-label" for="exampleInputFile">Choose file</label>
														    </div>
														</div>
														</div>
														
														<div>
														<label> Reference 3</label>
														<div class="input-group">
														    <div class="custom-file">
															<input type="file" class="custom-file-input" id="image3" name="image3">
															<label class="custom-file-label" for="exampleInputFile">Choose file</label>
														    </div>
														</div>
														</div>
																				
														<div class="form-group">
															<label>Issues</label>
															<textarea type="text" class="form-control" id="issue" name="issue" required ></textarea>
														</div>
													  
													</div>
													<input type="text" class="form-control" id="user_uid" name="user_uid" value="<?php echo $this->session->userdata('id'); ?>" hidden>

													<div class="card-footer">
													  <button type="submit" class="btn btn-primary">Submit</button>
													</div>
												  </form>
										  </div>
								   </div>
						   </div>
					</div>
			</section>
			
	  </div>
	  <!-- /.content-wrapper -->
	   <?php include('includes/user/footer.php'); ?>

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
	
	//for date -->
	var today = new Date();
    var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
    document.getElementById("currentDate").value = date;
	
	
	//for time -->
	const formatAMPM = (date) => {
		var hours = date.getHours();
		var minutes = date.getMinutes();
		var ampm = hours >= 12 ? 'pm' : 'am';
		hours = hours % 12;
		hours = hours ? hours : 12; // the hour '0' should be '12'
		hours = hours < 10 ? '0'+hours : hours;
		minutes = minutes < 10 ? '0'+minutes : minutes;
		var strTime = hours + ':' + minutes + ' ' + ampm;
		return strTime;
	}
	//console.log(formatAMPM(new Date));
	document.getElementById("currentTime").value = formatAMPM(new Date);
	
	
	
	
	
	$(function () {
	  bsCustomFileInput.init();
	});
	</script>
	</body>
	</html>
