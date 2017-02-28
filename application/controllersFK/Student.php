<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {



	private $api_key = "boqALCaBPWk6cSfhOkth";
	private $apiendpoint = "https://api.braincert.com/v1";

	function __construct()
	{
		parent::__construct();
		
		// load library
		$this->load->library(array('table','form_validation'));
		$this->load->library('email');
		
		// load model
		$this->load->model('Student_model','',TRUE);
		
	}

	public function index($offset = 0)
	{
		// offset
		$uri_segment = 3;
		$offset = $this->uri->segment($uri_segment);

		if ($this->session->userdata('logged_in')) 
		{
			$details = $this->Student_model->getStudentDetails();
			$id = $details['id'];
			$email = $details['email'];
			$name = $details['name'];
			$type = $details['type'];

			$data = array('id' => $id,
					'email' => $email,
					'name' => $name,
					'type' => $type);

			if ($type == 2) 
			{


				$postdata = array('task' => 'listclass', 'limit' => 100);

				$result = $this->sendHttpRequest($postdata);

				$resultJson = json_decode($result);

				$total = $resultJson->total;

				$data['total'] = $total;

				$data['classes'] = $resultJson->classes;


				$this->load->view('constants/studentHeader', $data);
				$this->load->view('Students/Dashboard');
				$this->load->view('constants/Footer');
			}

			else
			{
				redirect('Welcome', 'refresh');
			}


		}
		else
		{
			redirect('Welcome', 'refresh');
		}

		
	}

	public function checkStudent()
	{
		$email = $this->input->post('email');

		$result = $this->Student_model->checkStudent($email);

		if ($result) 
		{
			  $sess_array = array();
		      foreach($result as $row)
		      {
		        $sess_array = array(
		          'id' => $row->id,
		          'name' => $row->name,
		          'type' => $row->type,
		          'email' => $row->email
		        );
		        $this->session->set_userdata('logged_in', $sess_array);
		      }

		      //redirect('Student/');
		      echo "success";
		}
		else
		{
			echo "Sorry, This E-Mail is not registered. Please register as a student to continue";
		}
	}

	

	public function endSession()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}

	public function lauchUrl($class_id, $userId, $userName, $isTeacher, $lessonName, $courseName)
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

			if ($type == 2) 
			{
				$data = array('task' => 'getclasslaunch',
				'class_id' => $class_id,
				'userId' => $userId,
				'userName' => $userName,
				'isTeacher' => $isTeacher,
				'lessonName' => $lessonName,
				'courseName' => $courseName
				 );

				$result = $this->sendHttpRequest($data);

				$resultJson = json_decode($result);

				$status = $resultJson->status;

				if ($status == "error") 
				{
					echo "Error: ".$resultJson->error;
				}
				else
				{
					$encryptedLauchUrl = $resultJson->encryptedlaunchurl;

					echo anchor($encryptedLauchUrl, 'Click here to join the live broadcast', array('target' => '_blank', 'class' => 'new_window'));
				}
			}

			else
			{
				redirect('Welcome', 'refresh');
			}


		}
		else
		{
			redirect('Welcome', 'refresh');
		}

		

	}
	
	public function book($class_id, $title, $date, $start_time, $end_time, $status)
	{
		$title = str_replace('%20', ' ', $title);
		$start_time = str_replace('%20', ' ', $start_time);
		$end_time = str_replace('%20', ' ', $end_time);

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

			if ($type == 2) 
			{
				$checkifbooked = $this->Student_model->checkifalreadybooked($class_id, $email);
				
				if($checkifbooked>=1)
				{
					echo "You have already booked this Lesson";
				}
				else
				{
					if($status=="Upcoming")
					{
						$book = $this->Student_model->booklesson($class_id, $title, $date, $start_time, $end_time, $status, $email);
						if($book)
						{
							$subject = "LESSON BOOKING";
							$message = 
							"Hello,\nYou have successfully booked a lesson with the following details:\n\nTitle: ".$title."\nDate: ".$date."\nTo START at: ".$start_time."\nTo END at: ".$end_time.".\n\nPlease be punctual.\n\nKind regards,\nLets Link Live Team.
							";
							
							//sending email
							$this->email->from('noreply@letslinklive.com', 'LETS LINK LIVE');
							$this->email->to($email);
							$this->email->subject($subject);
							$this->email->message($message);
						
							$this->email->send();
							
							echo "Lesson Booked Successfully. An email has been sent to you.";
						}
						else
						{
							echo "Booking Unsuccessful";
						}
					}
					else
					{
						echo "You cannot book this class";
					}
				}
			}

			else
			{
				redirect('Welcome', 'refresh');
			}


		}
		else
		{
			redirect('Welcome', 'refresh');
		}

		

	}

	public function search()
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

			$emptyData = array('id' => $id,
					'email' => $email,
					'name' => $name,
					'type' => $type);

			if ($type == 2) 
			{

				
				$searchvalue = $this->input->post('search');

				if (isset($searchvalue)) 
				{
					$postdata = array('task' => 'getclass', 'class_id' => $searchvalue);

					$result = $this -> sendHttpRequest($postdata);

					$resultJson = json_decode($result, true);

					if (empty($resultJson[0]))
					{
						$this->load->view('constants/studentHeader', $emptyData);
						$this->load->view('Students/SearchResults');
						$this->load->view('constants/Footer');

					}
					else
					{
						$data['class_id'] = $resultJson[0]['id'];
						$data['user_id'] = $resultJson[0]['user_id'];
						$data['title'] = $resultJson[0]['title'];
						$data['date'] = $resultJson[0]['date'];
						$data['start_time'] = $resultJson[0]['start_time'];
						$data['end_time'] = $resultJson[0]['end_time'];
						$data['status'] = $resultJson[0]['status'];

						$this->load->view('constants/studentHeader', $data);
						$this->load->view('Students/SearchResults');
						$this->load->view('constants/Footer');

					}

					
				}
				else
				{
					$this->load->view('constants/studentHeader', $emptyData);
					$this->load->view('Students/SearchResults');
					$this->load->view('constants/Footer');
				}
				
				
				

				
			}

			else
			{
				redirect('Welcome', 'refresh');
			}


		}
		else
		{
			redirect('Welcome', 'refresh');
		}
	}


	public function sendHttpRequest($data)
	{
		$data['apikey'] = $this -> api_key;
	    $data_string = http_build_query($data);
	 	$this -> apiendpoint = $this -> apiendpoint;//."/".$data['task'];
		$ch = curl_init($this -> apiendpoint);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); 
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		

		return $result;
	}

	
	public function bookings()
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

			if ($type == 2) 
			{
				$data['countbookings'] = $this->Student_model->countbookings($email);
				$data['bookings'] = $this->Student_model->bookings($email);
				
				$this->load->view('constants/studentHeader', $data);
				$this->load->view('Students/bookings');
				$this->load->view('constants/Footer');
			}

			else
			{
				redirect('Welcome', 'refresh');
			}
		}
	}
	
	public function sendreminder($to, $starttime, $starttimeAMorPM)
	{
		if($to!='' && $starttime!='' && $starttimeAMorPM!='')
		{
		$subject = "BROADCAST SESSION REMINDER";
		$message = "Hello, This is a reminder that you have an UPCOMING session at $starttime $starttimeAMorPM. http://www.letslinklive.com. \n\nKind Regards, \nLets Link Live Team
							";
							
							//sending email
							$this->email->from('noreply@letslinklive.com', 'LETS LINK LIVE');
							$this->email->to($to);
							$this->email->subject($subject);
							$this->email->message($message);
						
							$this->email->send();
							
		}					
	}
	
}



