<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation'));

		$this->load->helper('url');
		
		// load model
		$this->load->model('Sign_up_model','',TRUE);
		
	}

	public function index($offset = 0)
	{
		// offset
				$uri_segment = 3;
				$offset = $this->uri->segment($uri_segment);
		$data['get_broadcasts'] = $this->Sign_up_model->get_broadcasts();
		
		$this->load->view('constants/welcome', $data);
	}

	public function AddStudent()
	{
		$student = array('name' => $this->input->post('name'),
					'email' => $this->input->post('email'));

		//check if exists
		if ($this->Sign_up_model->checkStudent($this->input->post('email'))) 
		{
			echo "This E-Mail is already registered. Please LOG IN to access content.";
		}
		else
		{
			$insertId = $this->Sign_up_model->saveStudent($student);
			if ($insertId) 
			{
				//set session
				echo "Registration has been done Successfully";

				//$link = base_url('Student');

				//send mail

			 	 	/*$sess_array = array();
			      
			        $sess_array = array(
			          'id' => $insertId,
			          'email' => $this->input->post('email'),
			          'name' => $this->input->post('name')
			        );
			        $this->session->set_userdata('logged_in', $sess_array);*/
			        
			        //redirect($link);
			        
			      
			}
			else
			{
				echo "Sorry, student Could Not be Added. An Error Occurred";
			}
		}

	}

	public function AddTeacher()
	{
		$rand = md5(uniqid().uniqid()).md5(uniqid().uniqid());
		
		$teacher = array('name' => $this->input->post('name'),
					'email' => $this->input->post('email'),	
					'qualifications' => $this->input->post('qualifications'),
					'biography' => $this->input->post('biography'),
					'rand' => $rand,								
					'password' => md5($this->input->post('pass')));

		//check if exists
		if ($this->Sign_up_model->checkTeacher($this->input->post('email'))) 
		{
			echo "This E-Mail is already registered. Please LOG IN to start teaching.";
		}
		else
		{
			$insertIdTwo = $this->Sign_up_model->saveTeacher($teacher);
			if ($insertIdTwo) 
			{
				//set session
				echo "Registration has been done Successfully";

				//send mail

				$sess_array = array();
			      
			        $sess_array = array(
			          'id' => $insertIdTwo,
			          'email' => $this->input->post('email'),
			          'name' => $this->input->post('name')
			        );
			        $this->session->set_userdata('logged_in', $sess_array);
			        //redirect('Teacher', 'refresh');
			}
			else
			{
				echo "Sorry, teacher Could Not be Added. An Error Occurred";
			}
		}
	}
}