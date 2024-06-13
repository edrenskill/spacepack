<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

public function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
}

function index(){
    $this->load->view('auth/login');
}

function validate_login($from = "") {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $credential = array('email' => $email, 'password' => sha1($password), 'status' => 'Active');
    $query = $this->db->get_where('staff', $credential);
        if ($query->num_rows() > 0){
            $row = $query->row();
            $this->session->set_userdata('user_id', $row->id);
            $this->session->set_userdata('role_id', $row->role_id);
            $this->session->set_userdata('roles', get_user_role('user_role', $row->id));
            $this->session->set_userdata('name', $row->firstname.' '.$row->lastname);
            $this->session->set_userdata('staff', '1');
            redirect(site_url('dashboard'), 'refresh');
        }else{
            $this->session->set_flashdata('error_message','Invalid Credentials');
            redirect(site_url('auth'), 'refresh');
        }
}

function logout($from = ""){ 
    $this->session->unset_userdata('userData');
    $this->session_destroy();
    redirect(site_url('auth'), 'refresh');
}

function session_destroy() {
    $this->session->unset_userdata('userData');
    $this->session->unset_userdata('user_id');
    $this->session->unset_userdata('role_id');
    $this->session->unset_userdata('role');
    $this->session->unset_userdata('name');
    $this->session->unset_userdata('staff');
}

function forgot_password($from = ""){
    $email = $this->input->post('email');
        //resetting user password here
        $new_password = substr(md5(rand(100000000,20000000000)) , 0,7);
        // Checking credential for admin
        $query = $this->db->get_where('staff' , array('email' => $email));
        if ($query->num_rows() > 0){
            $this->db->where('email' , $email);
            $this->db->update('staff' , array('password' => sha1($new_password)));
            // send new password to user email
            $this->email_model->password_reset_email($new_password, $email);
            $this->session->set_flashdata('flash_message', get_phrase('please_check_your_email_for_new_password'));
        }else {
            $this->session->set_flashdata('error_message', get_phrase('password_reset_failed'));
            redirect(site_url('login'), 'refresh');
        }
}

function user_profile(){
    if ($this->session->userdata('staff') != true){
        redirect(site_url('auth'), 'refresh');
    }
    $user_id = $this->user_model->get_all_user_by_id($this->session->userdata('user_id'))->row_array();
    $page_data['user_info'] = $user_id;
    $page_data['activity'] = $this->system_model->getActivitiesByUserid($this->session->userdata('user_id'))->result_array();
    $page_data['page_name'] = 'auth/staff_profile';
    $page_data['page_title'] = 'My Profile';
    $this->load->view('index', $page_data);  
}

function registration(){
    $data['first_name']  = html_escape($this->input->post('first_name'));
    $data['last_name']  = html_escape($this->input->post('last_name'));
    $data['email'] = html_escape($this->input->post('email'));
    $data['password']  = sha1($this->input->post('password'));
    $data['status']  = 'For Approval';
    $validity = $this->user_model->check_duplication('on_create', $data['email']);
        if ($validity) {
            $user_id = $this->user_model->register_staff($data);
        }else {
            $this->session->set_flashdata('error_message', get_phrase('email_duplication'));
        }
        redirect(site_url('signup-confirmation'), 'refresh');
}

function sign_up(){
    $this->load->view('staff_registration', $page_data);
}

function signup_confirmation(){
   $this->load->view('signup-conf'); 
}

//End of Code
}
