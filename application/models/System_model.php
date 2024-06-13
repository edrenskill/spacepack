<?php defined('BASEPATH') OR exit('No direct script access allowed');

class System_model extends CI_Model {

function __construct(){
    parent::__construct();
    $this->load->driver('cache', array('adapter' => 'file'));
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
}

function get_staff(){ 
    return $this->db->get_where('staff');
}

function get_role_by_id($id){
     return $this->db->get_where('roles', array('id' => $id));
}

//End Code
}