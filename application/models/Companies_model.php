<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Companies_model extends CI_Model {

function __construct(){
    parent::__construct();
    $this->load->driver('cache', array('adapter' => 'file'));
    $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    $this->output->set_header('Pragma: no-cache');
}

function getAllBranches(){
	$this->db->select('*')->from('companies');
    $this->db->order_by('id', 'DESC');
    $query = $this->db->get();
    return $query->result_array();
}

function getAllEntryAjax($postData=null){
	$response = array();
    ## Read value
    $draw = $postData['draw'];
    $start = $postData['start'];
    $rowperpage = $postData['length']; // Rows display per page
    $columnIndex = $postData['order'][0]['column']; // Column index
    $columnName = $postData['columns'][$columnIndex]['data']; // Column name
    $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
    $searchValue = $postData['search']['value']; // Search value
    // Custom search filter 
    $searchEntryNumber= $postData['searchEntryNumber'];
    ## Search 
    $search_arr = array();
     $searchQuery = "";
    if($searchEntryNumber != ''){
        $search_arr[] = "number like '%".$searchEntryNumber."%' ";
    }
    if(count($search_arr) > 0){
        $searchQuery = implode("and",$search_arr);
     }
    ## Total number of records without filtering
    $this->db->select('*,et.name, count(*) as allentry');
    $this->db->from('entries');
    $this->db->join('entry_types as et', 'et.id = entries.entry_type_id');
    $records = $this->db->get()->result();
    $totalRecords = $records[0]->allentry;

    ## Total number of record with filtering
    $this->db->select('*, et.name, count(*) as allentry');
    $this->db->from('entries');
    $this->db->join('entry_types as et', 'et.id = entries.entry_type_id');
    if($searchQuery != '')
    $this->db->where($searchQuery);
    $records = $this->db->get()->result();
    $totalRecordwithFilter = $records[0]->allentry;

    ## Fetch records
    $this->db->select('*, et.name');
    $this->db->from('entries');
    $this->db->join('entry_types as et', 'et.id = entries.entry_type_id');
    if($searchQuery != '')
    $this->db->where($searchQuery);
    $this->db->order_by($columnName, $columnSortOrder);
    $this->db->limit($rowperpage, $start);
    $records = $this->db->get()->result();
    $data = array();

    foreach($records as $record){
        $date = date("m/d/Y", strtotime($record->date));
        $dr = number_format($record->dr_total, 2, '.', ',');
        $cr = number_format($record->cr_total, 2, '.', ',');
        $data[] = array(
            "date" => $date,
            "number" => '<span>'.$record->number.'</span>',
            "ledger_account" => $record->name,
            "name" => $record->name,
            "dr_total" => '<span style="float:right;">'.$dr.'</span>',
            "cr_total" => '<span style="float:right;">'.$cr.'</span>',
            "status" => $record->status,
            "action" => $action,
       ); 
    }
     ## Response
    $response = array(
       "draw" => intval($draw),
       "iTotalRecords" => $totalRecords,
       "iTotalDisplayRecords" => $totalRecordwithFilter,
       "aaData" => $data
    );

    return $response; 
}

function insertBranchInfo(){
    $branch_info = array(
        //table column name          the value or data from the ajax request
        'branch_name' => $this->input->post('branch_name'),
        'location' => $this->input->post('location'),
        'branch_status' => 'For Approval',
        'create_date' => date("Y-m-d H:i:s"),
    );                         //tbl name, column name and data
    $result = $this->db->insert('companies', $branch_info);
    return $result;
}

function updateBranchInfo(){
$id_edit = $this->input->post('id_edit');
    $branch_name = $this->input->post('branch_name_edit');
    $location = $this->input->post('location_edit');
    $on_update = date("Y-m-d H:i:s");
    $this->db->set('branch_name', $branch_name);
    $this->db->set('location', $location);
    $this->db->set('on_update', $on_update);
    $this->db->where('id', $id_edit);
    $result=$this->db->update('companies');
    return $result;
}
function banBranchInfo(){
$id_ban = $this->input->post('id_ban');
    $close = 'Closed';
    $this->db->set('branch_status', $close);
    $this->db->where('id', $id_ban);
    $result=$this->db->update('companies');
    return $result;
}
function activeBranchInfo(){
$id_active = $this->input->post('id_active');
    $active = 'Active';
    $this->db->set('branch_status', $active);
    $this->db->where('id', $id_active);
    $result=$this->db->update('companies');
    return $result;
}
function suspendBranchInfo(){
$id_suspend = $this->input->post('id_suspend');
    $suspend = 'Suspended';
    $this->db->set('branch_status', $suspend);
    $this->db->where('id', $id_suspend);
    $result=$this->db->update('companies');
    return $result;
}

//END OF CODE
}
