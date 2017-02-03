<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teacher extends CI_Controller {

	function __construct()

	{

		parent:: __construct();

		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');

		$this->load->model(array('Login_model', 'Userdetails_model'));

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

			$this->load->view('login/loginView');

		}

	}

	

	public function redirectafterAuth()

	{

		$username = $this->input->post('email');

		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');

		$this->form_validation->set_rules('email', 'Username', 'trim|required|xss_clean|callback_validate');

		if($this->form_validation->run())

		{

			$data = array(

				'username' => $username,

				'logged_in' => 1

			);

			

			$this->session->set_userdata($data);

			$this->Login_model->updatelastlogin();

			redirect('Teacher/');

			

		}

		else

		{

			$this->load->view('login/loginView');

		}

	}

	

	//this method helps us to return an error message upon incorrect username/password entry

	public function validate()

	{

		$checkcredentials = $this->Login_model->auth();

		

		if($checkcredentials)

		{

			return true;

		}

		else

		{

			$this->form_validation->set_message('validate', 'Incorrect Email or Password');

			return false;

		}

	}

	

	public function updatepassword($rand)

	{

		$session = $this->session->userdata('logged_in');

		$validuser = $this->Userdetails_model->validuser();

		$data['username'] = $this->session->userdata('username');

	

		if($session==1 && $validuser==1)

		{				

			$update = $this->Userdetails_model->updatepassword($rand);

			if($update)

			{

				echo "Password successfully Updated";

			}

			else

			{

				echo "ERROR: Password NOT Updated";

			}

		}

		else

		{

			redirect('Teacher/logout');

		}

	}

	

	

	public function logout()

	{

		$this->session->sess_destroy();

		redirect('Welcome');

	}

	

}














