<?php
/**
 * Created by PhpStorm.
 * User: Hasheem
 * Date: 4/3/2017
 * Time: 12:26 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('resources_model');
        $this->load->library('session');
    }

    public function index(){
        $data['resources'] = $this->resources_model->get_last_ten_resources();
        $this->load->view('constants/Header', $data);
        $this->load->view('teacher/resources');
        $this->load->view('constants/Footer');
    }
    public function student(){
        $data['resources'] = $this->resources_model->get_last_ten_resources();
        $this->load->view('constants/studentHeader');
        $this->load->view('Students/resources', $data);
        $this->load->view('constants/Footer');
    }

    public function add (){
        $this->load->view('constants/Header');
        $this->load->view('teacher/upload_form');
        $this->load->view('constants/Footer');
    }

    public function delete($id){
        $this->load->model('Resources_model');
        $this->resources_model->delete_resource($id);
        redirect('/Resources/students');
    }

    public function upload_file (){
        $filename = $this->input->post('name');
        $config['upload_path'] = './assets/resources';
        $config['allowed_types'] = 'pdf|doc|docx';
        $config['max_size'] = '1000000';
        $config['file_name'] = $filename;
        $this->load->library('upload', $config);

        if(! $this->upload->upload_file('resources')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }else {
            $this->session->set_flashdata('Success','Resource Uploaded');
            $name = $this->upload->data('file_name');
            $this->Resources_model->save_resource($name);
            $data = array('upload_data' => $this->upload->data());
            redirect('/Resources/upload_form', $data);
        }
    }
}