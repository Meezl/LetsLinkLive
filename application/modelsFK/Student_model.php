<?php
class Student_model extends CI_Model {
	
	function __construct(){
		parent::__construct();
	}
	
	function checkStudent($email)
	{
		
		$this -> db -> select('students.*');
		$this -> db -> from('students');
		$this -> db -> where('email = ' . "'" . $email . "'");
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}

	function get_broadcast_list($searchvalue = null)
	{
		if ($searchvalue == null) 
		{
			$this->db->select('broadcasts.*');
		   $this->db->from('broadcasts');
		   $this -> db -> limit(5);	
		   $this->db->order_by('id','desc');   
		   return $this->db->get();
		}
		else
		{
			$search_where = "broadcasts.teachername LIKE '%".$searchvalue."%' OR broadcasts.topic LIKE '%".$searchvalue."%'";
			$this->db->select('broadcasts.*');
		   $this->db->from('broadcasts'); 
		   $this->db->where($search_where);	
		   $this->db->order_by('id','desc');	   
		   return $this->db->get();
		}
       

    }


    function get_broadcast_details($rand)
	{
		
		$this -> db -> select('broadcasts.*');
		$this -> db -> from('broadcasts');
		$this -> db -> where('rand = ' . "'" . $rand . "'"); 
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		
		return $query->result();

	}

	function book($broadcast)
	{
		$this->db->insert('bookings', $broadcast);
		return $this->db->insert_id();
	}

	function checkIfBooked($email, $rand)
	{
		
		$this -> db -> select('bookings.*');
		$this -> db -> from('bookings');
		$this -> db -> where('bookedBy = ' . "'" . $email . "'");
		$this -> db -> where('rand = ' . "'" . $rand . "'");
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}


	function get_my_broadcast_list($email)
	{
		
		   $this->db->select('bookings.*');
		   $this->db->from('bookings');
		   $this -> db -> where('bookedBy = ' . "'" . $email . "'");
		   $this->db->order_by('id','desc');   
		   return $this->db->get();
    }

    function checkBroadcastStatus($rand)
	{
		
		$this -> db -> select('broadcasts.*');
		$this -> db -> from('broadcasts');
		$this -> db -> where('rand = ' . "'" . $rand . "'");
		$this -> db -> limit(1);

		$query = $this -> db -> get();

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
      
	public function checkifalreadybooked($class_id, $email)
	{
		$this->db->where('class_id', $class_id);
		$this->db->where('bookedBy', $email);
		$query = $this->db->get('bookings');
		$count = $query->num_rows();
		
		return $count;
	}
	  
	public function booklesson($class_id, $title, $date, $start_time, $end_time, $status, $email)
	{
		$title = str_replace('%20', ' ', $title);
		$start_time = str_replace('%20', ' ', $start_time);
		$end_time = str_replace('%20', ' ', $end_time);
		
		$rand = md5(uniqid().uniqid()).md5(uniqid().uniqid());
		$data = array(
				'class_id' => $class_id,
				'title' => $title,
				'date' => $date,
				'start_time' => $start_time,
				'end_time' => $end_time,
				'status' => $status,
				'rand' => $rand,
				'bookedBy' => $email
		);
		$query = $this->db->insert('bookings', $data);
		
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function countbookings($email)
	{
		$this->db->where('bookedBy', $email);
		$query = $this->db->get('bookings');
		$count = $query->num_rows();
		
		return $count;
	}
	
	public function bookings($email)
	{
		$this->db->order_by('date', 'DESC');
		$this->db->order_by('status', 'DESC');
		$this->db->order_by('start_time', 'ASC');
		$this->db->where('bookedBy', $email);
		$query = $this->db->get('bookings');
		$res = $query->result();
		
		return $res;
	}

	
}
?>