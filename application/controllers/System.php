<?php defined('BASEPATH') OR exit('No direct script access allowed');

class System extends CI_Controller {

function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
}

function index(){
    if($this->session->userdata('staff') == true) {
        $this->dashboard();
    }else{
        redirect(site_url('auth'), 'refresh');
    }
}

function dashboard(){
    if ($this->session->userdata('staff') != true){
        redirect(site_url('auth'), 'refresh');
    }
    $page_data['page_name'] = 'system/dashboard';
    $page_data['page_title'] = 'Dashboard';
    $this->load->view('index', $page_data);
}

function staff(){
    if ($this->session->userdata('staff') != true){
        redirect(site_url('auth'), 'refresh');
    }
    if ($this->session->userdata('role_id') != 1){
        redirect(site_url('dashboard'), 'refresh');  
    }
    $page_data['staff'] = $this->system_model->get_staff()->result_array();
    $page_data['page_name'] = 'system/staff';
    $page_data['page_title'] = 'Staff';
    $this->load->view('index', $page_data);  
}
//END OF CODE
}
