<?php
class Photo_model extends CI_Model
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->database();
	}
	public function savephoto($rand, $photoname)
	{
		$data = array(
				'photo' => $photoname
		);
		$this->db->where('rand', $rand);
		$query = $this->db->update('teachers', $data);
		return true;
	}
}
?>