<?php
class Admin_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	
	function sess_values($e)
	{
		return $this->db->get_where("admin_info",array("email"=>$e))->result_array();
	}
	
	function add_lead($data)
	{			
  		if($this->db->insert("lead_info",$data))
		return true;

	}
	
	function fetch_lead()
	{
		return $lead=$this->db->order_by('id', 'desc')->get('lead_info')->result_array();
	}
	
	function add_sales($data)
	{			
  		if($this->db->insert("sales_info",$data))
		return true;

	}
	
	function fetch_sales()
	{
		return $sales=$this->db->order_by('id', 'desc')->get('sales_info')->result_array();
	}
	
	function add_user($data)
	{			
  		if($this->db->insert("user_info",$data))
		return true;

	}
	
	function fetch_user()
	{
		return $user=$this->db->order_by('id', 'desc')->get('user_info')->result_array();
	}
	
	function add_expences($data)
	{			
  		if($this->db->insert("expences_info",$data))
		return true;

	}
	
	function fetch_expences()
	{
		return $user=$this->db->order_by('id', 'desc')->get('expences_info')->result_array();
	}
	
	function fetch_SerialNumber($key)
	{
		/*
		$this->db->select('*');
		$this->db->from('lead_info');
		$this->db->like('classid', $key);
		return $this->db->get();
		*/
		//$this->db->or_like('surname', $surname);

		//return $this->db->get();
		//return $key;
		
		//$this->db->order_by('classid', 'DESC');
		
		// $sql="SELECT classid FROM lead_info WHERE classid LIKE `$key.'%'";    
		$this->db->select('*')
		->from('lead_info')
		->like('classid', '%'.$key.'%');
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function fetch_sales_ajax($srn){
		return $this->db->get_where("lead_info",array("classid"=>$srn))->result_array();
		//echo "test";
	}
	
	function get_location()
	{
		$this->db->select('location');
		$this->db->distinct();
		return $query = $this->db->get('lead_info')->result_array();
	}
	
	function lead_location_search_values($l)
	{
		return $this->db->get_where("lead_info",array("location"=>$l))->result_array();
	}
	
	function expense_date_search_values($from_date,$to_date)
	{
		//$this->db->select('date');
		//$this->db->where('date >=', $from_date);
		//$this->db->where('date <=', $to_date);
		
		//$this->db->where('date BETWEEN "'. date('Y-m-d', strtotime($from_date)). '" and "'. date('Y-m-d', strtotime($to_date)).'"');
		
		
		
		$sql="SELECT * FROM expences_info WHERE date BETWEEN '$from_date' AND '$to_date'";    
		$query = $this->db->query($sql);
		return $query->result_array();
		
		//return $this->db->get("expences_info");
		
		
	}
	
	function sales_date_search_values($from_date,$to_date){
		
		$sql="SELECT * FROM sales_info WHERE date BETWEEN '$from_date' AND '$to_date'";    
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function get_service(){
		$this->db->select('service');
		$this->db->distinct();
		return $query = $this->db->get('sales_info')->result_array();
	}
	
	function sales_service_search_values($s){
		return $this->db->get_where("sales_info",array("service"=>$s))->result_array();
	}
	
	
	
	
	function edit_lead($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("lead_info",$data);
	}
	
	function delete_lead($id) 
 	{
	 $this->db->delete("lead_info","id=".$id);
	 
 	}
	
	
	function edit_sales($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("sales_info",$data);
	}
	
	function delete_sales($id) 
 	{
	 $this->db->delete("sales_info","id=".$id);
	 
 	}
	
	
	function edit_user($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("user_info",$data);
	}
	
	function delete_user($id) 
 	{
	 $this->db->delete("user_info","id=".$id);
	 
 	}
	
	
	function edit_expence($data,$id)
	{
		$this->db->set($data);
  		$this->db->where("id",$id);
  		$this->db->update("expences_info",$data);
	}
	
	function delete_expence($id) 
 	{
	 $this->db->delete("expences_info","id=".$id);
	 
 	}
	
	
	
	function fetch_ticket()
	{
		return $user=$this->db->order_by('id', 'desc')->get('tickets_info')->result_array();
	}
	
	/*function delete_ticket($id) 
 	{
	 $this->db->delete("tickets_info","id=".$id);
	 
 	}*/
	
	
}
?>