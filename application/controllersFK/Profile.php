<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	
	function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		$this->load->model(array('Userdetails_model'));
	}

	public function index()
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{				
			$data['userdetails'] = $this->Userdetails_model->userdetails();
			
			$this->load->view('constants/Header', $data);
			$this->load->view('teacher/profile');
			$this->load->view('constants/Footer');
		}
		else
		{
			redirect('Teacher/logout');
		}
	}
	
	public function update()
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{				
			$data['userdetails'] = $this->Userdetails_model->userdetails();
			
			$this->load->view('constants/Header', $data);
			$this->load->view('teacher/editprofile');
			$this->load->view('constants/Footer');
		}
		else
		{
			redirect('Teacher/logout');
		}
	}
	
	public function checkemail($rand)
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{				
			$check = $this->Userdetails_model->countcheckemail($rand);
			if($check==1)
			{
				echo "Exists";
			}
			else
			{
				echo "Ok";
			}
		}
		else
		{
			redirect('Teacher/logout');
		}
	}
	
	public function saveupdate($rand)
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{				
			$update = $this->Userdetails_model->saveupdate($rand);
			if($update)
			{
				echo "Profile Updated";
			}
			else
			{
				echo "ERROR: Profile NOT Updated";
			}
		}
		else
		{
			redirect('Teacher/logout');
		}
	}
	
	
	
}







