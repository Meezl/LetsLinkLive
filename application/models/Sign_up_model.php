<?php

class Sign_up_model extends CI_Model {

	

	private $teachers= 'teachers';

	private $students= 'students';

	

	function __construct(){

		parent::__construct();

	}

	
	function get_broadcasts()
	{
		$query = $this->db->get('broadcasts');
		$res = $query->result();
		return $res;
	}


    function saveStudent($student)

    {

		$this->db->insert($this->students, $student);

		return $this->db->insert_id();

	}



	function checkStudent($studentEmail)

    {

		$this -> db -> select('students.*');

		$this -> db -> from('students');

		$this -> db -> where('email = ' . "'" . $studentEmail . "'");

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



	function saveTeacher($teacher)

    {

		$this->db->insert($this->teachers, $teacher);

		return $this->db->insert_id();

	}



	function checkTeacher($teacherEmail)

    {

		$this -> db -> select('teachers.*');

		$this -> db -> from('teachers');

		$this -> db -> where('email = ' . "'" . $teacherEmail . "'");

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







	function delete($id)

	{

		$this->db->where('id', $id);

		return $this->db->delete($this->users);

	}



  

}

?>