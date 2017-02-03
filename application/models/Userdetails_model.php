<?php
class Userdetails_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	
	public function validuser()
	{
		$username = $this->session->userdata('username');
		$this->db->where('email', $username);
		$query = $this->db->get('teachers');
		$count = $query->num_rows();
		
		return $count;
	}
	
	public function userdetails()
	{
		$username = $this->session->userdata('username');
		$this->db->where('email', $username);
		$query = $this->db->get('teachers');
		$res = $query->result();
		
		return $res;
	}
	
	public function updatepassword($key)
	{
		$password = md5($this->input->post('newpass'));
		$oldpass = md5($this->input->post('oldpass'));
		
		$this->db->set('password', $password);
		$this->db->where('rand', $key);
		$this->db->where('password', $oldpass);
		$query = $this->db->update('teachers');
		
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function countcheckemail($rand)
	{
		$email = $this->input->post('email');
		$email = strtolower($email);
		
		$this->db->where('email', $email);
		$this->db->where('rand!=', $rand);
		$query = $this->db->get('teachers');
		$count = $query->num_rows();
		
		return $count;
	}
	
	public function saveupdate($rand)
	{
		$email = $this->input->post('email');
		$email = strtolower($email);
		$name = $this->input->post('name');
		$name = strtoupper($name);
		$qualifications = $this->input->post('qualifications');
		$biography = $this->input->post('biography');
		
		$data = array(
				'email' => $email,
				'name' => $name,
				'qualifications' => $qualifications,
				'biography' => $biography
		);
		
		$this->db->where('rand', $rand);
		$query = $this->db->update('teachers', $data);
		
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>