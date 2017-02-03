<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Photo extends CI_Controller {

	

	function __construct()

	{

		parent:: __construct();

		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');

		$this->load->model(array('Userdetails_model', 'Photo_model'));

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

			$this->load->view('teacher/updateprofilephoto');

			$this->load->view('constants/Footer');

		}

		else

		{

			redirect('Teacher/logout');

		}

	}
	
	public function do_upload()
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
		
		if($session==1 && $validuser==1)
		{				
			$email = $this->input->post('email');
			$rand = $this->input->post('rand');
			
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 8000;
			$config['max_width'] = 1000;
			$config['max_height'] = 1200;
			$config['file_name'] = $rand;
			$config['overwrite'] = TRUE;
						
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('userfile'))
			{
				echo $this->upload->display_errors();
				echo "Photo Not Uploaded";
			}
			else
			{
				$photoname = $this->upload->data('file_name');
				$photoname = base_url()."assets/uploads/".$photoname;
				$this->Photo_model->savephoto($rand, $photoname);
								
				redirect('Teacher/');
			}

		}

		else

		{

			redirect('Teacher/logout');

		}
	}


}















