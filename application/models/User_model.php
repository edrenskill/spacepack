<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

function __construct(){
    parent::__construct();
    $this->load->driver('cache', array('adapter' => 'file'));
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
}

function get_all_user_by_id($id = 0) {
   return $this->db->get_where('staff', array('id' => $id));
}

function get_user_image_url($user_id) {
    if (file_exists('uploads/user_image/'.$user_id.'.jpg'))
        return base_url().'uploads/agent_image/'.$user_id.'.jpg';
    else
        return base_url().'uploads/agent_image/placeholder.svg';
}

function check_duplication($action = "", $email = "", $user_id = "") {
    $duplicate_email_check = $this->db->get_where('staff', array('email' => $email));
        if ($action == 'on_create') {
            if ($duplicate_email_check->num_rows() > 0) {
                return false;
            }else {
                return true;
            }
        }elseif ($action == 'on_update') {
            if ($duplicate_email_check->num_rows() > 0) {
                if ($duplicate_email_check->row()->id == $user_id) {
                    return true;
                }else {
                    return false;
                }
            }else {
                return true;
            }
        }
 }
function register_staff($data) {
    $this->db->insert('staff', $data);
    return $this->db->insert_id();
}

function activateStaffAcc(){
    $id_activate = $this->input->post('id_activate');
    $branch_id = $this->input->post('branch_id');
    $role_id = $this->input->post('role_id');
    $designation_id = $this->input->post('designation_id');
    $status = 'Active';
    $on_approve = strtotime(date("Y-m-d H:i:s"));
    $this->db->set('status', $status);
    $this->db->set('branch_id', $branch_id);
    $this->db->set('role_id', $role_id);
    $this->db->set('designation_id', $designation_id);
    $this->db->set('on_approve', $on_approve);
    $this->db->where('id', $id_activate);
    $result=$this->db->update('staff');
    return $result;
}
//END OF CODE
}
