<?php
/**
 * Created by PhpStorm.
 * User: Hasheem
 * Date: 4/3/2017
 * Time: 2:43 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Resources_model extends CI_Model
{
    public function __construct()
    {
        parent:: __construct();
    }

    public function get_last_ten_resources(){

        $this->db->select('*');
        $this->db->from('resources');
        $this ->db->limit(5);
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->results();
    }

    public function delete_resource($id){
        $this->db->where('id', $id);
        $this->db->delete('resources');
    }

    public function save_resource($name){
        $data = array('name' => $name);
        $this->db->insert('resources', $data);
        return true;
    }
}