<div class="row">
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Staff</h3>
        <div class="card-options d-none d-sm-block">
          <a href="javascript:void(0)" class="btn btn-lime btn-sm btn-icon-text mb-2 mb-md-0" onclick="showLargeModal('<?php echo site_url('trial/popup/client_add'); ?>')"><i class="fe fe-plus mr-2 text-white"></i>Add New Staff</a>
        </div>
      </div>
      <div class="card-body">
                    <div class="table-responsive">
                      <table id="example" class="table table-bordered key-buttons text-nowrap" width="100%">
                        <thead>
                          <tr>
                            <th class="text-center" width="25%">Name</th>
                            <th class="text-center" width="25%">Email Address</th>
                            <th class="text-center" width="10%">Mobile Number</th>
                            <th class="text-center" width="8%">staff Level</th>
                            <th class="text-center" width="5%">Status</th>
                            <th class="text-center" width="10%">Action</th>
                          </tr>
                        </thead>
                        <tbody>                         
<?php foreach ($staff as $key => $sta): $role = $this->system_model->get_role_by_id($sta['role_id'])->row_array();?>
                          <tr>
                            <td><?php echo $sta['first_name'].' '.$sta['last_name'];?></td>
                            <td><?php echo $sta['email'];?></td>
                            <td><?php echo $sta['mobile_no'];?></td>
                            <td><?php echo $role['role_name'];?></td>
                            <td class="text-center">
                              <?php if ($sta['status'] == 'Active'): ?>
                                <span class="badge badge-success">Active</span>
                              <?php elseif ($sta['status'] == 'Pending'):?>
                                <span class="badge badge-warning">For Approval</span>
                              <?php elseif ($sta['status'] == 'Suspended'):?>
                                <span class="badge badge-danger">Suspended</span>
                              <?php endif ?>
                            </td>
                            <td class="text-center">
                              <a href="<?php echo site_url('trial/view_client_info/'.$client['id']); ?>" class="btn btn-xs btn-icon btn-info"><i class="fe fe-clipboard text-white"></i></a>
                              <a href="" class="btn btn-xs btn-icon btn-warning"><i class="fe fe-edit text-white"></i></a>
                              <a href="" class="btn btn-xs btn-icon btn-danger"><i class="fe fe-trash-2 text-white"></i></a>
                            </td>
                          </tr>
<?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
      </div>
    </div>
  </div>
</div>