<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Companies extends CI_Controller {

function __construct(){
    parent::__construct();
    $this->load->database();
    $this->load->library('session');
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
}

function index(){
    if ($this->session->userdata('staff') != true){
        redirect(site_url('auth'), 'refresh');
    } // DAPAT STAFF AG USER TYPE
    $page_data['companies'] = $this->Companies_model->getAllBranches(); //GALING SA MODEL
    $page_data['page_name'] = 'Companies/companies_list'; //PARA SA VIEW OR YUNG VIEW KUNG SAAN ISHO SHOW YUNG DATA
    $page_data['page_title'] = 'Companies'; //TITLE PARA SA PAGE
    $this->load->view('index', $page_data); //pag render the view an data kung meron.
}

function insert_branch_info(){
    $data=$this->Companies_model->insertBranchInfo();

    echo json_encode($data);
}

function update_branch_info(){
    $data=$this->Companies_model->updateBranchInfo();
    echo json_encode($data);
}

function ban_branch_info(){
    $data=$this->Companies_model-> banBranchInfo();
    echo json_encode($data);
}
function active_branch_info(){
    $data=$this->Companies_model-> activeBranchInfo();
    echo json_encode($data);
}
function suspend_branch_info(){
    $data=$this->Companies_model-> suspendBranchInfo();
    echo json_encode($data);
}
// function stock_branch_info($id=''){
//     if ($this->session->userdata('staff') != true){
//         redirect(site_url('auth'), 'refresh');
//     } // DAPAT STAFF AG USER TYPE
//     $page_data['branches'] = $this->branch_model->getAllBranches(); //GALING SA MODEL
//     $page_data['page_name'] = 'branches/branch_inventory'; //PARA SA VIEW OR YUNG VIEW KUNG SAAN ISHO SHOW YUNG DATA
//     $page_data['page_title'] = 'Branches'; //TITLE PARA SA PAGE
//     $this->load->view('index', $page_data); //pag render the view an data kung meron.
// }

//END OF CODE
}
