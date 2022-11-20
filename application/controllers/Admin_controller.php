<?php
class Admin_controller extends CI_Controller
   {
		    function __construct()
			{
				parent::__construct();	  
				//$this->load->helper('url');
				//$this->load->library('session');
				$this->load->database();
				$this->load->model('Admin_model');
			
			}
		 
			function index()
			{
				$this->load->view('admin-login');
		 
			}		
			
			function logindo()
			{
				$data=array("email"=> trim($this->input->post('email')),"password"=>$this->input->post('password'));
				$query=$this->db->get_where("admin_info",$data);
				$res=$query->result_array();
				if($res)
				{
					$this->session->set_userdata('username',$this->input->post('email'));
					$this->session_values();
					redirect('admin-dashboard');
					//echo "successfull";
				}else{
					$this->session->set_flashdata('error', "Invalid Details");
					redirect('Admin_controller/index');
				}
			}
			
			function session_values()
			{
				if($this->session->userdata('username'))
				{
					$e=$this->session->userdata('username');
					$vaar=$this->Admin_model->sess_values($e);
					
					if($vaar)
					{
						foreach($vaar as $sess){
							$this->session->set_userdata('id',$sess['id']);
							$this->session->set_userdata('firstname',$sess['firstname']);
							$this->session->set_userdata('lastname',$sess['lastname']);
							$this->session->set_userdata('phoneno',$sess['phno']);
						}
					}
					else
					{
						$this->load->view('admin-login');
					}	
				}
			}
			
			function logout()
			{
			$this->session->unset_userdata('username');
			$this->session->sess_destroy();
			redirect('Admin_controller/index'); 
			}	

			function dashboard()
			{
				if($this->session->userdata('username')){
					
					$s=$this->session->userdata('username');
				if($s){
					$user=$this->Admin_model->fetch_expences();
					$data['users']=$user;
					
					$lead=$this->Admin_model->fetch_lead();
				    $data['leads']=$lead;
					
					$sales=$this->Admin_model->fetch_sales();
				    $data['sales']=$sales;
					
					$ticket=$this->Admin_model->fetch_ticket();
				    $data['tickets']=$ticket;
					$this->load->view('admin-dashboard',$data);
					
					
				}else{
					redirect('Admin_controller/index');
				}
				
				}else{
					redirect('Admin_controller/index');
				}
			}
			
			function leadlist()
			{	
				if($this->session->userdata('username')){
					
					
				//$this->load->model('Admin_model');
				$lead=$this->Admin_model->fetch_lead();
				$data['leads']=$lead;
				$this->load->view('lead_list',$data);
				
				}else{
					redirect('Admin_controller/index');
				}
				
			}
			
			function addlead()
			{
				if($this->session->userdata('username')){
					
					
				$this->load->view('add_lead');
				
				}else{
					redirect('Admin_controller/index');
				}
			}
						
			public function leaddo()
			{
				$x=str_replace(' ', '', (strtolower($this->input->post('name')).'_'.$this->input->post('phone')));
				//echo $x;
				
				$query=$this->db->get_where("lead_info",array("classid"=>$x));
				$res=$query->result_array();
				if($res){
					$this->session->set_flashdata('leadError', "Sorry, This Lead is allready exists.");
					redirect('Admin_controller/leadlist');
				}else{
				
					$data=array("classid"=>$x,
					"name"=>$this->input->post('name'),
					"email"=>$this->input->post('email'),
					"phno"=>$this->input->post('phone'),
					"address"=>$this->input->post('address'),
					"reference"=>$this->input->post('reference'),
					"location"=>strtolower($this->input->post('location')),
					"uid_card_type"=>$this->input->post('status'),
					"uid_card_no"=>$this->input->post('cardno'),
					"lead_person"=>$this->input->post('leadperson'));
					//$this->load->model('Admin_model');
						
					$response=$this->Admin_model->add_lead($data);
					if($response)
					{
						 if($response==true)
						{
							
							$this->session->set_flashdata('success', "Added Successfully"); 
						}
				          redirect('Admin_controller/leadlist');
					}
					else{
						//echo "unsucess";
						$this->session->set_flashdata('error', "Sorry, contact Adding Failed.");
						redirect('Admin_controller/leadlist');
					}
				}
				
			}
			
			function saleslist()
			{	
				if($this->session->userdata('username')){
					
					
				//$this->load->model('Admin_model');
				$sales=$this->Admin_model->fetch_sales();
				$data['sales']=$sales;
				$this->load->view('sales_list',$data);	
				
				}else{
					redirect('Admin_controller/index');
				}
			}
			
			function addsales()
			{
				if($this->session->userdata('username')){
					
				$this->load->view('add_sales');
				
				}else{
					redirect('Admin_controller/index');
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
					"lead_by"=>$this->input->post('leadsperson'));
					//$this->load->model('Admin_model');
						
					$response=$this->Admin_model->add_sales($data);
					if($response)
					{
					  if($response==true)
						{
							
							$this->session->set_flashdata('success', "Added Successfully"); 
						}
				       redirect('Admin_controller/saleslist');
					}
					else{
						//echo "unsucess";
						 $this->session->set_flashdata('error', "Sorry, contact Adding Failed.");
						 redirect('Admin_controller/saleslist');
					}
			}
			
				function userlist()
			   {
				if($this->session->userdata('username')){
					
					//$this->load->model('Admin_model');
					$user=$this->Admin_model->fetch_user();
					$data['users']=$user;
					$this->load->view('user_list',$data);
				
				}else{
					redirect('Admin_controller/index');
				}
				
		    	}
		
		function adduser()
		{
			if($this->session->userdata('username')){
					
						$this->load->view('add_user');
				
				}else{
					redirect('Admin_controller/index');
				}
		}
		
		function add_userdo()
	    {   
		    $copy=array("username"=>$this->input->post('username'));
			$query=$this->db->get_where("user_info",$copy);
			$res=$query->result_array();
		    if($res){ 
				//echo "match found";
				if($res==true)
				{
					
					$this->session->set_flashdata('error', "Username allready exist"); 
				}
				redirect('Admin_controller/adduser');
			   }
			  
		  else{
			  
			  $data=array("name"=>$this->input->post('name'),
				"username"=>$this->input->post('username'),
				"email"=>$this->input->post('email'),
				"phno"=>$this->input->post('phone'),
				"password"=>$this->input->post('password'));
				//$this->load->model('Admin_model');
					
				$response=$this->Admin_model->add_user($data);
				if($response)
				{
				if($response==true)
				{
					$this->session->set_flashdata('success', "Added Successfully"); 
				}
				redirect('Admin_controller/userlist');
				}
			  }
        }
		

		function addexpence()
		{
			if($this->session->userdata('username'))
			{
				
					$this->load->view('add_expence');
			}
			else
			{
				$this->load->view('admin-login');
			}	
			
		}
		
		
	    function expence()
	    
		{
				$data=array("amount"=>$this->input->post('amount'),
				"purpose"=>$this->input->post('purpose'),
				"date"=>$this->input->post('date'),
				"remarks"=>$this->input->post('remarks'),
				"expence_person"=>$this->input->post('expence_person'));
				//$this->load->model('Admin_model');
					
				$response=$this->Admin_model->add_expences($data);
				if($response)
				{
						
						$this->session->set_flashdata('success', "Added Successfully"); 
					
				  redirect('Admin_controller/expencelist');
				}else{
					 $this->session->set_flashdata('error', "Sorry, contact Adding Failed.");
					 redirect('Admin_controller/expencelist');
				}
        }
		
		
		function expencelist()
		{
			if($this->session->userdata('username')){
					
						
			//$this->load->model('Admin_model');
			$user=$this->Admin_model->fetch_expences();
			$data['users']=$user;
			$this->load->view('expence_list',$data);
				
				}else{
					redirect('Admin_controller/index');
				}
		}
		
		
		function getSerialNumber()
		{
			$postData = $this->input->post();
			
			//echo $postData['key'];
			
			$sl=$this->Admin_model->fetch_SerialNumber($postData['key']);
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
			/*
			if($sl->num_rows() > 0)
		{
			foreach($sl->result() as $row)
			{
				$a=$row->classid;
			}
		} */
		
		}
		
		function salesGetDetails()
		{	
			$srn=$this->input->post('key');
			$sales=$this->Admin_model->fetch_sales_ajax($srn);
			
			foreach($sales as $row){
				//$a=$row['name'].','.$row['phno'];
				$a=$row['name'].','.$row['phno'].','.$row['lead_person'];
				
			}
			echo $a;
			//echo $srn;
			
		}
		
		function leadlocationreports()
		{
			if($this->session->userdata('username')){
					
						
			$location=$this->Admin_model->get_location();
			$data['location']=$location;
			
			//$this->leadlocationreportsaction();
			$l=($this->input->post('searchlocation'));
			$vaar=$this->Admin_model->lead_location_search_values($l);
			
				$data['searched_locations']=$vaar;
				//$this->leadlocationreports();
			
			
			$this->load->view('leadlocationreportslist',$data);
				
				}else{
					redirect('Admin_controller/index');
				}
		}
		
		function expensereportdate()
		{
			if($this->session->userdata('username')){
					
						
				//$this->load->view('expensereportdate');
			
			$from_date=($this->input->post('fromdate'));
			$to_date=($this->input->post('todate'));
			$vaar=$this->Admin_model->expense_date_search_values($from_date,$to_date);
			
			//print_r($vaar);
			
			$data['searched_date']=$vaar;
				
			$this->load->view('expensereportdate',$data);
				
				}else{
					redirect('Admin_controller/index');
				}
		}
		
		function salesreportdate()
		{
			
			if($this->session->userdata('username')){
					
						
			//$this->load->view('expensereportdate');
			
			$from_date=($this->input->post('fromdate'));
			$to_date=($this->input->post('todate'));
			$vaar=$this->Admin_model->sales_date_search_values($from_date,$to_date);
			
			//print_r($vaar);
			
			$data['searched_date']=$vaar;
				
			$this->load->view('salesreportdate',$data);
				
				}else{
					redirect('Admin_controller/index');
				}
		}
		
		function allleadreports()
		{
			if($this->session->userdata('username')){
					
						
			$lead=$this->Admin_model->fetch_lead();
			$data['leads']=$lead;
			$this->load->view('allleadreports',$data);
				
				}else{
					redirect('Admin_controller/index');
				}
		}
		
		
		function salesservicereports()
		{
			if($this->session->userdata('username')){
					
						
			$service=$this->Admin_model->get_service();
			$data['service']=$service;
			
			$s=($this->input->post('searchservice'));
			$vaar=$this->Admin_model->sales_service_search_values($s);
			
			$data['searched_service']=$vaar;
			
			
			$this->load->view('salesservicereportslist',$data);
				
			}else{
				redirect('Admin_controller/index');
			}
		}
		
		
		
		
		
		function lead_edit()
			{
				if($this->session->userdata('username')){
					
						
			
			$id=$this->uri->segment(3);
				$query=$this->db->get_where("lead_info",array("id"=>$id));
				$res=$query->result_array();
				if($res)
			{
				//echo "working";
	 			$data['edit_lead']=$res;
				$this->load->view('edit_lead',$data);
			}
			else
			{  
		       //echo "unsucess";
				redirect("Admin_controller/leadlist");
			}
				
				//$this->load->view('edit_lead');
				
				}else{
					redirect('Admin_controller/index');
				}
				
			}
			
			function edit_lead_do()
			{
				$id=$this->input->post('id');
				$x=str_replace(' ', '', (strtolower($this->input->post('name')).'_'.$this->input->post('phone')));
				$data=array("classid"=>$x,
					"name"=>$this->input->post('name'),
					"email"=>$this->input->post('email'),
					"phno"=>$this->input->post('phone'),
					"address"=>$this->input->post('address'),
					"reference"=>$this->input->post('reference'),
					"location"=>strtolower($this->input->post('location')),
					"uid_card_type"=>$this->input->post('status'),
					"uid_card_no"=>$this->input->post('cardno'),
					"lead_person"=>$this->input->post('leadperson')
					);
					
					$this->Admin_model->edit_lead($data,$id);
					$this->session->set_flashdata('success_edit', "Edited Successfully");
					redirect("Admin_controller/leadlist"); 
							
			}
					
			function lead_delete()
			{
				$id=$this->uri->segment('3');
				$this->Admin_model->delete_lead($id);
				$this->session->set_flashdata('success_delete', "Deleted Successfully");
				redirect("Admin_controller/leadlist");

			}
			
			
			
			
			
			function sales_edit()
		{
				if($this->session->userdata('username')){
					
						
			$id=$this->uri->segment(3);
				$query=$this->db->get_where("sales_info",array("id"=>$id));
				$res=$query->result_array();
				if($res)
			{
				//echo "working";
	 			$data['edit_sales']=$res;
				$this->load->view('edit_sales',$data);
			}
			else
			{  
		       //echo "unsucess";
				redirect("Admin_controller/saleslist");
			}
				
				}else{
					redirect('Admin_controller/index');
				}
				
		}
			
			function sales_edit_do()
			{
				$id=$this->input->post('id');
				
					$data=array(
					"serial_no"=>$this->input->post('serialno'),
					"customer_name"=>$this->input->post('name'),
					"phoneno"=>$this->input->post('phoneno'),
					"service"=>$this->input->post('service'),
					"total_amount"=>$this->input->post('totalamount'),
					"adv_amount"=>$this->input->post('advancedamount'),
					"due_amount"=>$this->input->post('dueamount'),
					"date"=>$this->input->post('date'),
					"remarks"=>$this->input->post('remarks'),
					"sales_person"=>$this->input->post('salesperson')
					);
					
					$this->Admin_model->edit_sales($data,$id);
					$this->session->set_flashdata('success_edit', "Edited Successfully");
					redirect("Admin_controller/saleslist"); 
							
			}
			
			function sales_delete()
			{
				$id=$this->uri->segment('3');
				$this->Admin_model->delete_sales($id);
				$this->session->set_flashdata('success_delete', "Deleted Successfully");
				redirect("Admin_controller/saleslist");

			}
			
			
			
			
			function user_edit()
				{
					if($this->session->userdata('username')){
							
								
					    $id=$this->uri->segment(3);
						$query=$this->db->get_where("user_info",array("id"=>$id));
						$res=$query->result_array();
							if($res)
						{
							//echo "working";
							$data['edit_user']=$res;
							$this->load->view('edit_user',$data);
						}
						else
						{  
						   //echo "unsucess";
							redirect("Admin_controller/userlist");
						}
						
						}else{
							redirect('Admin_controller/index');
						}
						
				}
			
			function edit_user_do()
			{
				$id=$this->input->post('id');
				$data=array("name"=>$this->input->post('name'),
				"username"=>$this->input->post('username'),
				"email"=>$this->input->post('email'),
				"phno"=>$this->input->post('phone'),
				"password"=>$this->input->post('password')
				);
					
					$this->Admin_model->edit_user($data,$id);
					$this->session->set_flashdata('success_edit', "Edited Successfully");
					redirect("Admin_controller/userlist"); 
							
			}
			
			function user_delete()
			{
				$id=$this->uri->segment('3');
				$this->Admin_model->delete_user($id);
				$this->session->set_flashdata('success_delete', "Deleted Successfully");
				redirect("Admin_controller/userlist");

			}
			
			
			
			function expence_edit()
		     {
					if($this->session->userdata('username')){
						
							
				    $id=$this->uri->segment(3);
					$query=$this->db->get_where("expences_info",array("id"=>$id));
					$res=$query->result_array();
					if($res)
					{
						//echo "working";
						$data['edit_expence']=$res;
						$this->load->view('edit_expence',$data);
					}
					else
					{  
					   //echo "unsucess";
						redirect("Admin_controller/expencelist");
					}
					
					}else{
						redirect('Admin_controller/index');
					}
				
		      }
			
			function edit_expence_do()
			{
				$id=$this->input->post('id');
				$data=array(
				"amount"=>$this->input->post('amount'),
				"purpose"=>$this->input->post('purpose'),
				"date"=>$this->input->post('date'),
				"remarks"=>$this->input->post('remarks'),
				"expence_person"=>$this->input->post('expence_person')
				);
					
					$this->Admin_model->edit_expence($data,$id);
					$this->session->set_flashdata('success_edit', "Edited Successfully");
					redirect("Admin_controller/expencelist"); 
							
			}
			
			function expence_delete()
			{
				$id=$this->uri->segment('3');
				$this->Admin_model->delete_expence($id);
				$this->session->set_flashdata('success_delete', "Deleted Successfully");
				redirect("Admin_controller/expencelist");

			}
			
			
			function ticketslist()
			{	
				if($this->session->userdata('username')){
					
				$ticket=$this->Admin_model->fetch_ticket();
				$data['users']=$ticket;
				$this->load->view('admin_ticket_list',$data);	
				
				}else{
					redirect('Admin_controller/index');
				}
			}
			
			/*function ticket_delete()
			{
				$id=$this->uri->segment('3');
				$this->Admin_model->delete_ticket($id);
				$this->session->set_flashdata('success_delete', "Deleted Successfully");
				redirect("Admin_controller/ticketslist");

			} */
		
		
    }
?>