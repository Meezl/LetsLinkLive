<?php
class Login_model extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function auth()
	{
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		$password = md5($password);
		
		$this->db->where('email', $username);
		$this->db->where('password', $password);
		$sql = $this->db->get('teachers');
		$count = $sql->num_rows();
		//get userlevel
		$userlevel = $sql->result();
		
		if($count==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	//check existence of user in db
	public function validuser()
	{
		$user = $this->session->userdata('username');
		
		$this->db->where('email', $user);
		$query = $this->db->get('teachers');
		$count  = $query->num_rows();
		
		return $count;
	}
	
	
	public function updatelastlogin()
	{
		date_default_timezone_set('Africa/Nairobi');     
		$datevariable = new DateTime();
		$date = date_format($datevariable, 'Y-m-d H:i:s');
		$ip = $this->input->ip_address();
		
		$username = $this->session->userdata('username');
		$this->db->set('lastlogin', $date);
		$this->db->set('lastIp', $ip);
		$this->db->where('email', $username);
		$query = $this->db->update('teachers');
	}
}
?>