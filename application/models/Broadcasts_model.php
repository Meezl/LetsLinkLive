<?php
class Broadcasts_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	
	public function checkbroadcast($title, $email, $date, $start_time, $end_time, $timezone)
	{
	      	$title = str_replace('%20', ' ', $title);
		$start_time = str_replace('%20', ' ', $start_time);
		$end_time = str_replace('%20', ' ', $end_time);
		$timezone = str_replace('%20', ' ', $timezone);
		
		$end_timeVAL = substr($end_time, 0, 5);
		$start_timeVAL = substr($start_time, 0, 5);
		
		date_default_timezone_set('Africa/Nairobi');     
		$datevariable = new DateTime();
		$today = date_format($datevariable, 'Y-m-d');
		$time = date_format($datevariable, 'H:i');
		
		$username = $this->session->userdata('username');
		$ip = $this->input->ip_address();
				
		$status = "Upcoming";
		
		$this->db->where('starttime>=', $start_timeVAL);
		$this->db->where('endtime<=', $end_timeVAL);
		$this->db->where('teacheremail', $email);
		
		$this->db->where('classdate', $date);
		$query = $this->db->get('broadcasts');
		$count = $query->num_rows();
		
		return $count;
	}
	
	
	function get_class_details($id){
		$this->db->where('class_id', $id);
		return $this->db->get('broadcasts');
	}
	
	public function savebroadcast($class)
	{
	
		$this->db->insert('broadcasts', $class);
		return $this->db->insert_id();
		
		/*$title = str_replace('%20', ' ', $title);
		$start_time = str_replace('%20', ' ', $start_time);
		$end_time = str_replace('%20', ' ', $end_time);
		$timezone = str_replace('%20', ' ', $timezone);*/
		
		/*date_default_timezone_set('Africa/Nairobi');     
		$datevariable = new DateTime();
		$today = date_format($datevariable, 'Y-m-d');
		$time = date_format($datevariable, 'H:i');*/
		
		/*$username = $this->session->userdata('username');
		$ip = $this->input->ip_address();
		
		$rand = md5(uniqid().uniqid()).md5(uniqid().uniqid());
		
		//$status = "Upcoming";
		
		$this->db->where('starttime', $start_time);
		$this->db->where('teacheremail', $email);
		$this->db->where('status', $status);
		$this->db->where('classdate', $date);
		$query = $this->db->get('broadcasts');
		$count = $query->num_rows();
		
		
		$data = array(
				'class_id' => $class_id,
				'title' => $title,
				'teacheremail' => $email,
				'classdate' => $date,
				'starttime' => $start_time,
				'endtime' => $end_time,
				'status' => $status,
				'timezone' => $timezone,
				'rand' => $rand
				
		);
		$query = $this->db->insert('broadcasts', $data);
		
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}*/
		
	
	}
	
	function removeLocalBroadCast($id)
	{
		$this->db->where('class_id', $id);
		$this->db->delete('bookings');
		
		$this->db->where('class_id', $id);
		return $this->db->delete('broadcasts');
	}
	
	
	//VIEW BROADCASTS
	public function countprendingbroadcasts()
	{
		$status = "CREATED";
		$username = $this->session->userdata('username');
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('startDatetime', 'ASC');
		$query = $this->db->get('broadcasts');
		$count = $query->num_rows();
		
		return $count;
	}
	public function prendingbroadcasts()
	{
		$status = "CREATED";
		$username = $this->session->userdata('username');
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('startDatetime', 'ASC');
		$query = $this->db->get('broadcasts');
		$res = $query->result();
		
		return $res;
	}
	
	public function delete($rand)
	{
		$status = "CREATED";
		$username = $this->session->userdata('username');
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('startDatetime', 'ASC');
		$this->db->where('rand', $rand);
		$query = $this->db->delete('broadcasts');
		
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	//DONE
	public function countdonebroadcasts()
	{
		$status = "DONE";
		$username = $this->session->userdata('username');
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('startDatetime', 'ASC');
		$query = $this->db->get('broadcasts');
		$count = $query->num_rows();
		
		return $count;
	}
	public function donebroadcasts()
	{
		$status = "DONE";
		$username = $this->session->userdata('username');
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('startDatetime', 'ASC');
		$query = $this->db->get('broadcasts');
		$res = $query->result();
		
		return $res;
	}
	
	//expired
	public function countexpiredbroadcasts()
	{
		$status = "EXPIRED";
		$username = $this->session->userdata('username');
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('startDatetime', 'ASC');
		$query = $this->db->get('broadcasts');
		$count = $query->num_rows();
		
		return $count;
	}
	public function expiredbroadcasts()
	{
		$status = "EXPIRED";
		$username = $this->session->userdata('username');
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('startDatetime', 'ASC');
		$query = $this->db->get('broadcasts');
		$res = $query->result();
		
		return $res;
	}
	
	//all
	public function countallbroadcasts()
	{
		$username = $this->session->userdata('username');
		$this->db->where('teacheremail', $username);
		$query = $this->db->get('broadcasts');
		$count = $query->num_rows();
		
		return $count;
	}
	public function allbroadcasts()
	{
		$username = $this->session->userdata('username');
		$this->db->where('teacheremail', $username);
		$query = $this->db->get('broadcasts');
		$res = $query->result();
		
		return $res;
	}
	
	public function teacherBroadcasts($username)
	{

		$this->db->from('broadcasts');
		$this->db->order_by('class_id','desc');
		$this->db->where('teacheremail', $username);		   
		return $this->db->get();
	}
	
	
	//students booked
	public function countstudentsbooked()
	{
		$username = $this->session->userdata('username');
		$status = "Upcoming";
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('status', 'DESC');
		$query = $this->db->get('bookings');
		$count = $query->num_rows();
		
		return $count;
	}
	
	public function studentsbooked()
	{
		$username = $this->session->userdata('username');
		$status = "Upcoming";
		$this->db->where('status', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('status', 'DESC');
		$this->db->order_by('date', 'ASC');
		$this->db->order_by('start_time', 'ASC');
		$this->db->order_by('class_id', 'ASC');
		$query = $this->db->get('bookings');
		$res = $query->result();
		
		return $res;
	}
	
	public function countstudentsbookedOthers()
	{
		$username = $this->session->userdata('username');
		$status = "Upcoming";
		//$this->db->where('status!=', $status);
		$this->db->where('teacheremail', $username);
		$this->db->order_by('status', 'DESC');
		$query = $this->db->get('bookings');
		$count = $query->num_rows();
		
		return $count;
	}
	
	public function studentsbookedOthers()
	{
		$username = $this->session->userdata('username');
		$status = "Upcoming";
		//$this->db->where('status!=', $status);
		$this->db->where('teacheremail', $username);
		//$this->db->order_by('status', 'DESC');
		$this->db->order_by('date', 'ASC');
		$this->db->order_by('start_time', 'ASC');
		$this->db->order_by('class_id', 'ASC');
		$query = $this->db->get('bookings');
		$res = $query->result();
		
		return $res;
	}
}
?>