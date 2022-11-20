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
  
  <link rel="stylesheet" href="<?php echo base_url();?>tools/dist/css/select2.min.css">
	<!--
		<style>
			.option{
				display:none;
			}
		</style>
	-->
  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

	<!-- Navbar Start -->

		<?php include('includes/user/navbar.php'); ?>
		
	<!-- /.navbar End -->

	<!-- Sidebar Start -->

		<?php $m="sales"; include('includes/user/sidebar.php'); ?>

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
				  <li class="breadcrumb-item active"><a href="<?php echo base_url();?>index.php/sales-list">sales</a></li>
				  <li class="breadcrumb-item active">Add Sales</li>
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
							<h3 class="card-title">Add Sales</h3>
						  </div>
						  <!-- /.card-header -->
						  <!-- form start -->
							<form action="<?php echo base_url();?>index.php/user_controller/salesdo" method="POST">
								<div class="card-body">
									<div class="form-group" id="serialNumber">
										<label for="">Serial No</label>
										<!--<input type="text" class="form-control" id="serialno" name="serialno" placeholder="Search Serial No" onkeyup="getSerialNumber($(this).val());" onfocusin='getSerialNumber();' onfocusout='hideOptions()'>-->
										
										<select class="form-control js-example-tags" name="serialno" id="selectList" onChange="getDetails($(this).val())">
											<option>Search Serial no </option>
										</select>
										
										<!--
										<input type="text" class="form-control" list="selectList" />
											<datalist class="form-control js-example-tags" id="selectList">
											  <option></option>
											</datalist>
											-->
									</div>
									<div class="form-group">
										<label for="">Customer Name</label>
										<input type="text" class="form-control" id="exampleInputname" name="name" placeholder="Enter Your Name" readonly>
									</div>
									<div class="form-group">
										<label for="">Phone No</label>
										<input type="number" class="form-control" id="exampleInputphoneno" name="phoneno" placeholder="Enter Your Phone No" readonly>
									</div>
									<div class="form-group">
										<label for="exampleInputService">Service Type</label>
										<input type="text" class="form-control" id="exampleInputService" name="service" placeholder="Enter Your Service"  required>
									</div>
									<div class="form-group">
										<label for="">Total Amount</label>
										<input type="text" class="form-control" id="exampleInputamount" name="totalamount" placeholder="Enter your Total Amount" oninput="add_number()" required>
									</div>
									<div class="form-group">
										<label for="">Advanced Amount</label>
										<input type="text" class="form-control" id="exampleInputadvance" name="advancedamount" placeholder="Enter Your Advanced Amount" oninput="add_number()" required>
									</div>
									<div class="form-group">
										<label for="">Due Amount</label>
										<input type="text" class="form-control" id="exampleInputdue" name="dueamount" placeholder="Due Amount" readonly required>
									</div>
									<div class="form-group">
										<label for="exampleInputDate">Date</label>
										<input type="Date" class="form-control" id="exampleInputDate" name="date" placeholder="Enter Date"  required>
									</div>
									<div class="form-group">
										<label for="">Remarks</label>
										<textarea type="text" class="form-control" id="exampleInputremarks" name="remarks" placeholder="Enter Your Remarks"  required></textarea>
									</div>
									<div class="form-group">
										<label for="exampleInputSales">Sales By</label>
										<input type="text" class="form-control" id="exampleInputsales" name="salesperson" placeholder="<?=$this->session->userdata('username'); ?>" value="<?=$this->session->userdata('username'); ?>" readonly>
									</div>
									<div class="form-group">
										<label for="exampleInputLeads">lead By</label>
										<input type="text" class="form-control" id="exampleInputleads" name="leadsperson" readonly>
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
<script  src="<?php echo base_url();?>tools/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script  src="<?php echo base_url();?>tools/dist/js/demo.js"></script> -->
<!-- Page specific script -->

<!--<script>document.getElementById("classid").value = 'VA_' + Date.now();</script>-->

<script  src="<?php echo base_url();?>tools/dist/js/select2.min.js"></script>

<?php //$sessionId=$this->session->userdata('id'); ?>

<script>
	
		var total = document.getElementById("exampleInputamount");
		var advance = document.getElementById("exampleInputadvance");

		function add_number() {
		   var first_number = parseFloat(total.value);
		   if (isNaN(first_number)) first_number = 0;
		   var second_number = parseFloat(advance.value);
		   if (isNaN(second_number)) second_number = 0;
		   var result = first_number - second_number;
		   document.getElementById("exampleInputdue").value = result;
		}
	
	
	 <?php //echo "var sessionId =$sessionId;" ?>
	//alert(sessionId);
		
		/*
		function getSerialNumber(key,$sessionId){
			//console.log(key);
			//console.log(sessionId);
			//console.log('<?php echo base_url();?>index.php/admin_controller/getSerialNumber');
			$('#serialNumber').find('option').remove();
			$.ajax({
				url: '<?php echo base_url();?>index.php/user_controller/getSerialNumber',
				data: {key: key, sid:sessionId},
				//dataType: 'json',
				method: 'POST',
				success: function(result){
					//console.log(result);
					var arr = result.split(',');
					//console.log(arr);
					//console.log(result.length);
					//var arr = $.parseJSON(result); //convert to javascript array
					$.each(arr,function(key,value){
						//console.log(value);
						//console.log(key);
						$("#serialNumber").append('<option class="option" id="option'+key+'" onmousedown = "pasteSerialNumber(option'+key+'.text)">'+value+'</option>');
					});
					showOptions();
	
		
				}
			});	
		}
		*/
		
		$(document).ready(function(){
			$.ajax({
				url: '<?php echo base_url();?>index.php/user_controller/getAllSerialNumber',
				//data: {key: key},
				dataType: 'json',
				//method: 'POST',
				success: function(result){
					result.forEach(function(key, value){
						//console.log(key);
						var o = new Option(key, key);
						$(o).html(key);
						$("#selectList").append(o);
					})
					//showOptions();
					//console.log(result);
		
				}
			});
		});
		
		$(".js-example-tags").select2({
		tags: true
		});
		/*
		function getSerialNumber(){
			$("#selectList").show();
		}
		
		showOptions = function (){
			$('.option').show();
		}

		hideOptions = function (){
			$('.option').hide();
		}
		
		function pasteSerialNumber(srVal){
			$("#serialno").val(srVal);
			getDetails(srVal);
		}
		*/
		function getDetails(key){
			console.log(key);
			$.ajax({
				url: '<?php echo base_url();?>index.php/user_controller/salesGetDetails',
				data: {key: key},
				//dataType: 'json',
				method: 'POST',
				success: function(result){
					//console.log(result);
						var arr = result.split(',');
						$("#exampleInputname").val(arr[0]);
						$("#exampleInputphoneno").val(arr[1]);
						$("#exampleInputleads").val(arr[2]);
					//var custName = "";
					//var custPhone = "";
					/*$.each(arr,function(key,value){
						console.log(value);
						console.log(key);
						$("#exampleInputname").val(value);
						$("#exampleInputphoneno").val(value);
					});*/
				}
			});	
			
		}
	
</script>

</body>
</html>
