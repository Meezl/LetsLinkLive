<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Broadcasts extends CI_Controller {

	private $api_key = "boqALCaBPWk6cSfhOkth";
	private $apiendpoint = "https://api.braincert.com/v1";
	
	function __construct()
	{
		parent:: __construct();
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->model(array('Userdetails_model', 'Broadcasts_model'));
	}

	public function index()
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{				
			$data['userdetails'] = $this->Userdetails_model->userdetails();
			/*$data['countallbroadcasts'] = $this->Broadcasts_model->countallbroadcasts();
			$data['allbroadcasts'] = $this->Broadcasts_model->allbroadcasts();
			
			
			$this->load->view('constants/Header', $data);
			$this->load->view('teacher/allbroadcasts');
			$this->load->view('constants/Footer');*/

			$postdata = array('task' => 'listclass', 'limit' => 100);

			$result = $this -> sendHttpRequest($postdata);

			$resultJson = json_decode($result);

			$total = $resultJson->total;

			$data['total'] = $total;
			
			
			
			$username = $this->session->userdata('username');
			
			

			$data['braincerts'] = $resultJson->classes;
			$data['classes'] = $this->Broadcasts_model->teacherBroadcasts($username);
			/*$data['user_id'] = $resultJson->classes[1]['user_id'];
			$data['title'] = $resultJson->classes[1]['title'];*/


			$this->load->view('constants/Header', $data);
			$this->load->view('teacher/allbroadcasts');
			$this->load->view('constants/Footer');
			/*$classId = $resultArray->total;

			if ($status == "error") 
			{
				echo "Error: ".$resultArray->error;
			}
			else
			{
				echo $result;
			}*/

		}
		else
		{
			redirect('Teacher/logout');
		}
	}
	
	
	function reschedule($id = null)
	
	{
		if($id == null)
		
		{

			
			
				$old_class_id= $this->input->post('class_id');
				$old_title= $this->input->post('title');
				$old_date= $this->input->post('date');
				$starttime= $this->input->post('starttime');
				$endtime= $this->input->post('endtime');
				$timezone= $this->input->post('timezone');
				
				
				
				//schedule new class
				$newdata = array('task' => 'schedule',
				'title' => $old_title,
				'timezone' => $timezone,
				'start_time' => $starttime,
				'end_time' => $endtime,
				'record' => 1,
				'date' => $old_date);
	
				
				
				$newResult = $this -> sendHttpRequest($newdata);
	
				$newResultJson = json_decode($newResult);
	
				$newStatus = $newResultJson ->status;
				
				if ($newStatus == "error") 
				{
					echo "Error: ".$newResultJson ->error;
				}
				else
				{
					$deletedata = array('task' => 'removeclass',
					'cid' => $old_class_id);
					
					$deleteResult = $this -> sendHttpRequest($deletedata);
				
				
				
					$new_class_id= $newResultJson ->class_id;
				
					$email = $this->session->userdata('username');
					
					$rand = md5(uniqid().uniqid()).md5(uniqid().uniqid());
					
					$newclass= array(
						'class_id' => $new_class_id,
						'title' => $old_title,
						'teacheremail' => $email,
						'classdate' => $old_date,
						'starttime' => $starttime,
						'endtime' => $endtime,
						'timezone' => $timezone,
						'rand' => $rand);
					
					if ($this->Broadcasts_model->savebroadcast($newclass))
					{
						$subject = "LESSON RE-SCHEDULING";
						$message = 
						"Hello,\n\nYou have successfully re-scheduled a lesson with the following details:\nTitle: ".$title."\nDate: ".$old_date."\nTo START at: ".$starttime."\nTime Zone: ".$timezone."\nTo END at: ".$endtime.".\n\nKind regards,\nLets Link Live Team.
						";
						
						//sending email
						$this->email->from('noreply@letslinklive.com', 'LETS LINK LIVE');
						$this->email->to($email);
						$this->email->subject($subject);
						$this->email->message($message);
					
						$this->email->send();
						
						//echo "Class Re-Scheduled Successfully";
					}
					
					
					//delete from local db
					
					if ($this->Broadcasts_model->removeLocalBroadCast($old_class_id))
					{
						echo "Class Re-Scheduled Successfully";
					}
					
					//update bookings
				}
			

				 
				
			
				
			
			
		}
		
		else
		
		{
			$data['class_details'] = $this->Broadcasts_model ->get_class_details($id);
			$this->load->view('teacher/editBroadCast', $data);
		}
	
	}
	
	
	public function add()
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{				
			$data['userdetails'] = $this->Userdetails_model->userdetails();
			
			$this->load->view('constants/Header', $data);
			$this->load->view('teacher/newbroadcast');
			$this->load->view('constants/Footer');
		}
		else
		{
			redirect('Teacher/logout');
		}
	}
	
	public function savebroadcast()
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{	
			/*date_default_timezone_set('Africa/Nairobi');     
			$datevariable = new DateTime();
			$date = date_format($datevariable, 'Y-m-d H:i:s');
			
			$datetoORIGY = $this->input->post('dateto');
			$dateto = substr($datetoORIGY, 0, 16);
			
			$datefromORIGY = $this->input->post('datefrom');
			$datefrom = substr($datefromORIGY, 0, 16);
					
			$save = $this->Broadcasts_model->savebroadcast();
			if($save)
			{
				echo "Broadcast Created Successfully!";
			}
			else
			{
				echo "ERROR: Broadcast not created";
			}*/
			
			date_default_timezone_set('Africa/Nairobi');     
			$datevariable = new DateTime();
			$today = date_format($datevariable, 'Y-m-d');
			$time = date_format($datevariable, 'H:i');
			
			$starttime = $this->input->post('start_time');
			$starttimeFirstpart = substr($starttime, 0, 5);
			$starttimeSecondpart = substr($starttime, 6, 2);
			$start_time = $starttimeFirstpart.$starttimeSecondpart;
			
			$endtime = $this->input->post('end_time');
			$endtimeFirstpart = substr($endtime, 0, 5);
			$endtimeSecondpart = substr($endtime, 6, 2);
			$end_time = $endtimeFirstpart.$endtimeSecondpart;
			
			
			
			
			
			//CONVERT TO 24HR SYSTEM by adding 12hrs if it is PM

$starttimeInDBlessAmOrPm = $starttimeFirstpart .':00';

//convert to seconds
//class time to seconds
list($h, $m, $s) = explode(':', $starttimeInDBlessAmOrPm);//explode removes :
$seconds = ($h*3600)+($m*60)+$s;

$twelvehoursSECONDS = 12*3600;

if($starttimeSecondpart=="PM")
{
	$seconds = $seconds+$twelvehoursSECONDS;
}
else
{
	$seconds = $seconds;
}

//.....so far we have a 24hr clock system


//get CURRENT TIME in seconds
list($h, $m, $s) = explode(':', $time);//explode removes :
$CURRENTTIMEseconds = ($h*3600)+($m*60)+$s;

//FOR END TIME
$endtimeInDBlessAmOrPm = $endtimeFirstpart .':00';

//convert to seconds
//class time to seconds
list($h, $m, $s) = explode(':', $endtimeInDBlessAmOrPm);//explode removes :
$endseconds = ($h*3600)+($m*60)+$s;

$twelvehoursSECONDS = 12*3600;

if($endtimeSecondpart=="PM")
{
	$endseconds = $endseconds+$twelvehoursSECONDS;
}
else
{
	$endseconds = $endseconds;
}
			
			$check = $this->Broadcasts_model->checkbroadcast($title, $email, $date, $start_time, $end_time, $timezone);
				
				
				if($check>=1)//|| ($seconds<=$CURRENTTIMEseconds) || ($endseconds<=$seconds)
				{
					echo "Error: You cannot schedule this class. Invalid Times: ".$starttimeFirstpart." to ".$endtimeFirstpart;
				}
				else
				{
			
			$data = array('task' => 'schedule',
			'title' => $this->input->post('title'),
			'timezone' => $this->input->post('timezone'),
			'start_time' => $start_time,
			'end_time' => $end_time,
			'record' => 1,
			'date' => $this->input->post('date'),
			'seat_attendees' => $this->input->post('seat_attendees'));

			$result = $this -> sendHttpRequest($data);

			$resultJson = json_decode($result);

			$status = $resultJson->status;

			if ($status == "error") 
			{
				echo "Error: ".$resultJson->error;
			}
			else
			{
				$class_id= $resultJson->class_id;			
				$title = $this->input->post('title');
				$timezone = $this->input->post('timezone');
				$date = $this->input->post('date');
				$starttime= $this->input->post('start_time');
				$endtime= $this->input->post('end_time');
				$seat_attendees = $this->input->post('seat_attendees');
				
				$email = $this->session->userdata('username');
				
				$rand = md5(uniqid().uniqid()).md5(uniqid().uniqid());
				
				$class= array(
					'class_id' => $class_id,
					'title' => $title,
					'teacheremail' => $email,
					'classdate' => $date,
					'starttime' => $start_time,
					'endtime' => $end_time,
					'timezone' => $timezone,
					'rand' => $rand);
				
				if ($this->Broadcasts_model->savebroadcast($class))
				{
					$subject = "LESSON SCHEDULING";
					$message = 
					"Hello,\n\nYou have successfully scheduled a lesson with the following details:\nTitle: ".$title."\nDate: ".$date."\nTo START at: ".$start_time."\nTime Zone: ".$timezone."\nTo END at: ".$end_time.".\n\nKind regards,\nLets Link Live Team.
					";
					
					//sending email
					$this->email->from('noreply@letslinklive.com', 'LETS LINK LIVE');
					$this->email->to($email);
					$this->email->subject($subject);
					$this->email->message($message);
				
					$this->email->send();
					
					echo "Class scheduled Successfully";
				}
				
				
				//save in db
				//$save = $this->Broadcasts_model->savebroadcast($class_id, $title, $email, $date, $start_time, $end_time, $timezone);
				//$save = $this->Broadcasts_model->savebroadcast($title, $email, $date, $start_time, $end_time, $timezone);
				
				
				
				
			}
			}

			
		}
		else
		{
			redirect('Teacher/logout');
		}
	}
	
	
	

	
	
	

	public function lauchUrl($class_id, $userId, $userName, $isTeacher, $lessonName, $courseName)
	{

		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{	

			$data = array('task' => 'getclasslaunch',
				'class_id' => $class_id,
				'userId' => $userId,
				'userName' => $userName,
				'isTeacher' => $isTeacher,
				'lessonName' => $lessonName,
				'courseName' => $courseName
			 );

			$result = $this -> sendHttpRequest($data);

			$resultJson = json_decode($result);

			$status = $resultJson->status;

			if ($status == "error") 
			{
				echo "Error: ".$resultJson->error;
			}
			else
			{
				$encryptedLauchUrl = $resultJson->encryptedlaunchurl;

				echo anchor($encryptedLauchUrl, 'Click here to start the live broadcast', array('target' => '_blank', 'class' => 'new_window'));
			}

		}
		else
		{
			redirect('Teacher/logout');
		}


	}


	public function remove($class_id)
	{
		$data = array('task' => 'removeclass',
			'cid' => $class_id
		 );

		$result = $this -> sendHttpRequest($data);

		$resultJson = json_decode($result);

		$status = $resultJson->status;

		if ($status == "error") 
		{
			echo "Error: ".$resultJson->error;
		}
		else if($this->Broadcasts_model->removeLocalBroadCast($class_id) && $status == "ok")
		{
			echo "Class removed Successfully";
		}
		else
		{
			echo "A Fatal Error Occured";
		}


	}
	
	public function studentsbooked()
	{
		$session = $this->session->userdata('logged_in');
		$validuser = $this->Userdetails_model->validuser();
		$data['username'] = $this->session->userdata('username');
	
		if($session==1 && $validuser==1)
		{	
			$data['userdetails'] = $this->Userdetails_model->userdetails();

			$data['countstudentsbooked'] = $this->Broadcasts_model->countstudentsbooked();
			$data['studentsbooked'] = $this->Broadcasts_model->studentsbooked();
			
			$data['countstudentsbookedOthers'] = $this->Broadcasts_model->countstudentsbookedOthers();
			$data['studentsbookedOthers'] = $this->Broadcasts_model->studentsbookedOthers();
			
			$this->load->view('constants/Header', $data);
			$this->load->view('teacher/studentsbooked', $data);
			$this->load->view('constants/Footer');
		}
		else
		{
			redirect('Teacher/logout');
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
	
	public function events()
	{
		
		$this->load->view('constants/events.xml');
	}
	
}