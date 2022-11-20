<?php
class User_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	
	function sess_values($e)
	{
		return $this->db->get_where("user_info",array("username"=>$e))->result_array();
	}
	
	function add_lead($data)
	{			
  		if($this->db->insert("lead_info",$data))
		return true;

	}
	
	function fetch_lead($id)
	{
		return $lead=$this->db->get_where("lead_info",array("user_uid"=>$id))->result_array();
	}
	
	function add_sales($data)
	{			
  		if($this->db->insert("sales_info",$data))
		return true;

	}
	
	function fetch_sales($id)
	{
		return $sales=$this->db->get_where("sales_info",array("user_uid"=>$id))->result_array();
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
	
	
	function fetch_expense($id)
	{
		return $expense=$this->db->get_where("expences_info",array("user_uid"=>$id))->result_array();
	}
	
	function add_expense($data)
	{			
  		if($this->db->insert("expences_info",$data))
		return true;

	}
	
	/*
	function fetch_SerialNumber($key,$sid)
	{
		
		//$this->db->select('*');
		//$this->db->from('lead_info');
		//$this->db->like('classid', $key);
		//return $this->db->get();
		
		
		//$this->db->or_like('surname', $surname);

		//return $this->db->get();
		//return $key;
		
		//$this->db->order_by('classid', 'DESC');
		
		$sql="SELECT classid FROM lead_info WHERE classid LIKE '$key%' AND user_uid='".$sid."'";    
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	*/
	
	function fetch_sales_ajax($srn){
		return $this->db->get_where("lead_info",array("classid"=>$srn))->result_array();
		//echo "test";
	}
	
	function get_location($id)
	{
		$this->db->select('location');
		$this->db->distinct();
		return $query = $this->db->get_where("lead_info",array("user_uid"=>$id))->result_array();
	}
	
	function lead_location_search_values($l,$id)
	{
		/*
		$array = array('location' => $l, 'user_uid' => $id);
		return $this->db->where($array)->result_array();
		*/
		//return $this->db->get_where("lead_info",array("location",$l,"user_uid",$id))->result_array();

		$sql="SELECT * FROM lead_info WHERE user_uid=$id AND location='$l'" ;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function expense_date_search_values($from_date,$to_date,$id)
	{
		//$this->db->select('date');
		//$this->db->where('date >=', $from_date);
		//$this->db->where('date <=', $to_date);
		
		//$this->db->where('date BETWEEN "'. date('Y-m-d', strtotime($from_date)). '" and "'. date('Y-m-d', strtotime($to_date)).'"');
		
		
		
		$sql="SELECT * FROM expences_info WHERE user_uid=$id AND date BETWEEN '$from_date' AND '$to_date'";    
		$query = $this->db->query($sql);
		return $query->result_array();
		
		//return $this->db->get("expences_info");
		
		
	}
	
	function sales_date_search_values($from_date,$to_date,$id){
		
		$sql="SELECT * FROM sales_info WHERE user_uid=$id AND date BETWEEN '$from_date' AND '$to_date'";    
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	function get_service($id)
	{
		$this->db->select('service');
		$this->db->distinct();
		return $query = $this->db->get_where("sales_info",array("user_uid"=>$id))->result_array();
	}
	
	function sales_service_search_values($l,$id)
	{
		$sql="SELECT * FROM sales_info WHERE user_uid=$id AND service='$l'" ;
		$query = $this->db->query($sql);
		return $query->result_array();
	}
	
	
	
	
	
	function add_ticket($data)
	{			
  		if($this->db->insert("tickets_info",$data))
		return true;

	}
	
	function fetch_ticket($id)
	{
		return $ticket=$this->db->get_where("tickets_info",array("user_uid"=>$id))->result_array();
	}
	
	function delete_ticket($id) 
 	{
	 $this->db->delete("tickets_info","id=".$id);
	 
 	}
	
	
	function fetchAllSerialNumber()
	{
		$this->db->select('classid');
		$this->db->from('lead_info');
		return $this->db->get()->result_array();
	}
	
	
}
?>