<?php
class User_controller extends CI_Controller
   {
	   function __construct()
	{
	  	parent::__construct();	  
		//$this->load->helper('url');
		//$this->load->library('session');
		$this->load->database();
		$this->load->model('User_model');
		
	}
	 

	    function index()
		{
			$this->load->view('user/user-login');
     
		}
		
		
		
		function logindo()
		{
			$data=array("username"=>$this->input->post('username'),"password"=>$this->input->post('password'));
			$query=$this->db->get_where("user_info",$data);
			$res=$query->result_array();
			if($res)
			{
				$this->session->set_userdata('username',$this->input->post('username'));
				$this->session_values();
				redirect('user-dashboard');
				//echo "successfull";
			}else{
				$this->session->set_flashdata('error', "Invalid Details");
				redirect('User_controller/index');
			}
			//echo $this->input->post('username');
		
		}
		
		function session_values()
			{
				if($this->session->userdata('username'))
				{
					$e=$this->session->userdata('username');
					$vaar=$this->User_model->sess_values($e);
					
					if($vaar)
					{
						foreach($vaar as $sess){
							$this->session->set_userdata('id',$sess['id']);
							$this->session->set_userdata('fullname',$sess['name']);
							$this->session->set_userdata('phoneno',$sess['phno']);
					
						}
					}
					else
					{
						$this->load->view('user/user-login');
					}	
				}
			}
		
		function logout()
	    {
	 	$this->session->unset_userdata('username');
		$this->session->sess_destroy();
		redirect('user-login'); 
	    }
		
		
			function dashboard()
			{
				$id=$this->session->userdata('id');
			
				if($this->session->userdata('username')){
					$user=$this->User_model->fetch_expense($id);
					$data['users']=$user;
					
					$lead=$this->User_model->fetch_lead($id);
				    $data['leads']=$lead;
					
					$sales=$this->User_model->fetch_sales($id);
				    $data['sales']=$sales;
					
					$ticket=$this->User_model->fetch_ticket($id);
				    $data['tickets']=$ticket;
					
					$this->load->view('user/user-dashboard',$data);
					
					
				}else{
					redirect('User_controller/index');
				}
			}
		
		
		function userleadlist()
			{	
				if($this->session->userdata('username')){
					
					//$this->load->model('Admin_model');
					$id=$this->session->userdata('id');
					//echo $this->session->userdata('id');
					$lead=$this->User_model->fetch_lead($id);
					$data['leads']=$lead;
					
					$this->load->view('user/lead_list_user',$data);
				
				}else{
					redirect('User_controller/index');
				}
				
			}
			
			function addlead()
			{
				
				if($this->session->userdata('username')){
					
					$this->load->view('user/add_lead_user');
				
				}else{
					redirect('User_controller/index');
				}
			}
						
			public function leaddo()
			{
				$x=str_replace(' ', '', (strtolower($this->input->post('name')).'_'.$this->input->post('phone')));
				//echo $x;
				
					$data=array("classid"=>$x,"name"=>$this->input->post('name'),
					"email"=>$this->input->post('email'),
					"phno"=>$this->input->post('phone'),
					"address"=>$this->input->post('address'),
					"reference"=>$this->input->post('reference'),
					"location"=>strtolower($this->input->post('location')),
					"uid_card_type"=>$this->input->post('status'),
					"uid_card_no"=>$this->input->post('cardno'),
					"lead_person"=>$this->input->post('leadperson'),
					"user_uid"=>$this->input->post('user_uid'));
					//$this->load->model('Admin_model');
						
					$response=$this->User_model->add_lead($data);
					if($response)
					{
						//echo "sucess";
						$this->session->set_flashdata('success', "Added Successfully"); 
						redirect('User_controller/userleadlist');
					}
					else{
						echo "unsucess";
					}
				
			}
			
		
			  function usersaleslist()
				{	
					if($this->session->userdata('username')){
					
					//$this->load->model('Admin_model');
					$id=$this->session->userdata('id');
					//echo $this->session->userdata('id');
					$sales=$this->User_model->fetch_sales($id);
					$data['sales']=$sales;
					
					$this->load->view('user/sales_list_user',$data);
				
				}else{
					redirect('User_controller/index');
				}
				}
			
			function addsales()
			{
				if($this->session->userdata('username')){
					
					$this->load->view('user/add_sales_user');
				
				}else{
					redirect('User_controller/index');
				}
			}
			
			public function salesdo()
			{
					$data=array("serial_no"=>$this->input->post('serialno'),
					"customer_name"=>$this->input->post('name'),
					"phoneno"=>$this->input->post('phoneno'),
					"service"=>$this->input->post('service'),
					"total_amount"=>$this->input->post('totalamount'),
					"adv_amount"=>$this->input->post('advancedamount'),
					"due_amount"=>$this->input->post('dueamount'),
					"date"=>$this->input->post('date'),
					"remarks"=>$this->input->post('remarks'),
					"sales_person"=>$this->input->post('salesperson'),
					"lead_by"=>$this->input->post('leadsperson'),
					"user_uid"=>$this->input->post('user_uid'));
						//$this->load->model('Admin_model');
						
					$response=$this->User_model->add_sales($data);
					if($response)
					{
						//echo "sucess";
						$this->session->set_flashdata('success', "Added Successfully"); 
						redirect('User_controller/usersaleslist');
					}
					else{
						echo "unsucess";
					}
				
			}
			
			
			function addexpense()
			{
				if($this->session->userdata('username')){
					
					$this->load->view('user/add_expense');
				
				}else{
					redirect('User_controller/index');
				}
			}
			
			function userexpenselist()
			{	
				if($this->session->userdata('username')){
					
					//$this->load->model('Admin_model');
				$id=$this->session->userdata('id');
				//echo $this->session->userdata('id');
				$user=$this->User_model->fetch_expense($id);
				$data['users']=$user;
				
				$this->load->view('user/expense_list_user',$data);
				
				}else{
					redirect('User_controller/index');
				}
			}
			

			public function expensedo()
			{
					$data=array(
					"amount"=>$this->input->post('amount'),
					"purpose"=>$this->input->post('purpose'),
					"date"=>$this->input->post('date'),
					"remarks"=>$this->input->post('remarks'),
					"expence_person"=>$this->input->post('expence_person'),
					"user_uid"=>$this->input->post('user_uid'));
						//$this->load->model('Admin_model');
						
					$response=$this->User_model->add_expense($data);
					if($response)
					{
						//echo "sucess";
						$this->session->set_flashdata('success', "Added Successfully"); 
						redirect('User_controller/userexpenselist');
					}
					else{
						echo "unsucess";
					}
				
			}
			
			/*
			function getSerialNumber()
			{
				$postData = $this->input->post('key');
				$sid = $this->input->post('sid');
				//echo $sid;
				//echo $postData['key'];
				
				$sl=$this->User_model->fetch_SerialNumber($postData,$sid);
					//return($sl);
					//print_r($sl);
					//$data['sl']=$sl;
					//echo $sl;
				
				$str="";
				foreach($sl as $row){
					$a=$row['classid'];
					//echo $a;
					if($str==""){
						$str=$a;
					}else{
						$str=$str.','.$a;
					}
				}
				echo $str;
				
				//$result = explode(',', $str);
				//print_r ($result);
				
				//if($sl->num_rows() > 0)
				//{
				//foreach($sl->result() as $row)
				//{
				//	$a=$row->classid;
				//}
				//} 
			
			}
			*/
			
			function salesGetDetails()
			{	
				$srn=$this->input->post('key');
				$sales=$this->User_model->fetch_sales_ajax($srn);
				
				foreach($sales as $row){
					$a=$row['name'].','.$row['phno'].','.$row['lead_person'];
					
				}
				echo $a;
				//echo $srn;
				
			}
			
			function leadlocationreports()
			{
				if($this->session->userdata('username')){
					
					$id=$this->session->userdata('id');
				
				$location=$this->User_model->get_location($id);
				$data['location']=$location;
				
				$l=($this->input->post('searchlocation'));
				$vaar=$this->User_model->lead_location_search_values($l,$id);
				
				$data['searched_locations']=$vaar;
				
				$this->load->view('user/leadlocationreportslist',$data);
				
				}else{
					redirect('User_controller/index');
				}
			}
			
			function expensereportdate()
			{
				$id=$this->session->userdata('id');
				//$this->load->view('expensereportdate');
				
				$from_date=($this->input->post('fromdate'));
				$to_date=($this->input->post('todate'));
				$vaar=$this->User_model->expense_date_search_values($from_date,$to_date,$id);
				
				//print_r($vaar);
				
				$data['searched_date']=$vaar;
					
				$this->load->view('user/expensereportdate',$data);
			}
			
			function salesreportdate()
			{
				$id=$this->session->userdata('id');
				//$this->load->view('expensereportdate');
				
				$from_date=($this->input->post('fromdate'));
				$to_date=($this->input->post('todate'));
				$vaar=$this->User_model->sales_date_search_values($from_date,$to_date,$id);
				
				//print_r($vaar);
				
				$data['searched_date']=$vaar;
					
				$this->load->view('user/salesreportdate',$data);
			}
			
			function allleadreports()
			{
				if($this->session->userdata('username')){
					
					//$this->load->model('Admin_model');
					$id=$this->session->userdata('id');
					//echo $this->session->userdata('id');
					$lead=$this->User_model->fetch_lead($id);
					$data['leads']=$lead;
					$this->load->view('user/allleadreports',$data);
				
				}else{
					redirect('User_controller/index');
				}
			}
			
			
			
			
			function addticketuser()
			{
			
                 if($this->session->userdata('username')){
					 $this->load->view('user/user_ticket');	
				
				}else{
					redirect('User_controller/index');
				}		
			}
			
			function userticketlistk()
			{
			
                  if($this->session->userdata('username')){
					  
					 
					$this->load->view('user/ticket_list_user');	
				
				}else{
					redirect('User_controller/index');
				}		
			} 
			
			
			public function ticketdo()
			{
							
				$photo=array(
					'upload_path' => './tools/upload/user',
					'allowed_types' => 'jpeg|jpg|png|pdf',
					'encrypt_name' => TRUE
				);
				
				$proof_name1 = $_FILES['image1']['name'];
				$proof_name2 = $_FILES['image2']['name'];
				$proof_name3 = $_FILES['image3']['name'];
			
				$this->load->library('upload', $photo);
				$this->upload->initialize($photo);
				
				
				if($proof_name1==""){
					$proof_name1="N/A";
				}else{
					$this->upload->do_upload('image1');
					$proof_data1 =$this->upload->data();
					$proof_name1=$proof_data1['file_name'];
				}
				if($proof_name2==""){
					$proof_name2="N/A";
				}else{
					$this->upload->do_upload('image2');
					$proof_data2 =$this->upload->data();
					$proof_name2=$proof_data2['file_name'];
				}
				if($proof_name3==""){
					$proof_name3="N/A";
				}else{
					$this->upload->do_upload('image3');
					$proof_data3 =$this->upload->data();
					$proof_name3=$proof_data3['file_name'];
				}
				
							//$proof_data =$this->upload->data();
							
							
							$data=array("username"=>$this->input->post('username'),
							"issues"=>$this->input->post('issue'),
							"date"=>$this->input->post('currentDate'),
							"time"=>$this->input->post('currentTime'),
							"user_uid"=>$this->input->post('user_uid'),
							"file1"=>$proof_name1,
							"file2"=>$proof_name2,
							"file3"=>$proof_name3);
							
							$this->session->set_flashdata('success', "Added Successfully"); 
							
								
							$prof=$this->User_model->add_ticket($data);
							
							if($prof)
							{
								//echo "sucessfull";
								redirect('User_controller/userticketlist');
							}
							else
							{
								echo "unsucessfull";
							}									
			}
			
			
			function userticketlist()
			{	
				if($this->session->userdata('username')){
					
					$id=$this->session->userdata('id');
				//echo $this->session->userdata('id');
				$ticket=$this->User_model->fetch_ticket($id);
				$data['tickets']=$ticket;
				$this->load->view('user/ticket_list_user',$data);
				
				}else{
					redirect('User_controller/index');
				}
			}
			
			function ticket_delete()
			{
				$id=$this->uri->segment('3');
				$this->User_model->delete_ticket($id);
				$this->session->set_flashdata('success_delete', "Deleted Successfully");
				redirect("User_controller/userticketlist");

			} 
			
			
			function salesservicereportsUser()
			{
				if($this->session->userdata('username')){
					
					$id=$this->session->userdata('id');
				
				$service=$this->User_model->get_service($id);
				$data['service']=$service;
				
				$l=($this->input->post('searchservice'));
				$vaar=$this->User_model->sales_service_search_values($l,$id);
				
				$data['searched_service']=$vaar;
				
				$this->load->view('user/salesservicereportsUserlist',$data);
				
				}else{
					redirect('User_controller/index');
				}
			}
			
			
			
			function getAllSerialNumber()
			{
				$sl=$this->User_model->fetchAllSerialNumber();
				//print_r($sl);
				$arr=[];
				foreach($sl as $sl){
					$a=$sl['classid'];
					array_push($arr, $a);
				}
				//print_r($arr);
				echo json_encode($arr);
			}
    }
?>