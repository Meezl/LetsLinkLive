<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewBroadcast extends CI_Controller {

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
		
		
		// load model
		$this->load->model('Student_model','',TRUE);
		
	}

	function _remap($param) {
        $this->index($param);
    }

	public function index($rand)
	{
		

		if ($this->session->userdata('logged_in')) 
		{
			$login=$this->session->userdata('logged_in');
			$id = $login['id'];
			$email = $login['email'];
			$name = $login['name'];
			$type = $login['type'];

			$data = array('id' => $id,
					'email' => $email,
					'name' => $name,
					'type' => $type);

			

		$result = $this->Student_model->checkBroadcastStatus($rand);

			if ($result) 
			{
			      foreach($result as $row)
			      {		        
			          $status = $row->status;		        
			      }

			      //redirect('Student/');

			      if ($status == "CREATED") 
			      {
			      	$broadcastRand = array('rand' =>  $rand, 'message' =>  "This session has not yet been broadcasted");

			      	$this->load->view('constants/studentHeader', $data);
					$this->load->view('Broadcasts/waiting', $broadcastRand);
					$this->load->view('constants/Footer');
			      }
			      else if ($status == "BROADCASTING") 
			      {

			      	$broadcastRand = array('rand' =>  $rand, 'message' =>  "This session is broadcasting");

			      	$this->load->view('constants/studentHeader', $data);
					$this->load->view('Broadcasts/broadcasting', $broadcastRand);
					$this->load->view('constants/Footer');

			      }
			      else if ($status == "BROADCASTED") 
			      {
			      	$broadcastRand = array('rand' =>  $rand, 'message' =>  "This session has already been broadcasted");

			      	$this->load->view('constants/studentHeader', $data);
					$this->load->view('Broadcasts/broadcasted', $broadcastRand);
					$this->load->view('constants/Footer');

			      	
			      }

			      else
			      {
			      	$broadcastRand = array('rand' =>  $rand, 'message' =>  "An error occurred. Please try again.");

			      	$this->load->view('constants/studentHeader', $data);
					$this->load->view('Broadcasts/errorBroadcast', $broadcastRand);
					$this->load->view('constants/Footer');
			      }
			      
			}
			else
			{
				$broadcastRand = array('rand' =>  $rand, 'message' =>  "Sorry, This Broadcast Could Not be found. The teacher might have deleted it");

			    $this->load->view('constants/studentHeader', $data);
				$this->load->view('Broadcasts/errorBroadcast', $broadcastRand);
				$this->load->view('constants/Footer');
			}

			/*$this->load->view('constants/studentHeader', $data);
			$this->load->view('Broadcasts/waiting', $broadcast);
			$this->load->view('constants/Footer');*/


		}
		else
		{
			redirect('Welcome', 'refresh');
		}

		
	}

	
}







