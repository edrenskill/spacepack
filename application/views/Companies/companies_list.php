<div class="row">
  <div class="col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Company List</h3>
        <div class="card-options d-none d-sm-block">
          <button  class="btn btn-lime btn-sm btn-icon-text mb-2 mb-md-0" id="add_button" type="button" data-toggle="modal" data-target="#Modal_Add_Branch"><i class="fe fe-plus mr-2 text-white"></i>Add New Company</button>
        </div>
      </div>
      <div class="card-body">
        
        <div class="table-responsive">
            <table id="example-1" class="table table-bordered key-buttons text-nowrap" width="100%">
              <thead>
                  <th width="20%"class="text-center">Company Name</th>
                  <th class="text-center">location</th>
                  <th width="10%" class="text-center">Date</th>
                  <th width="10%" class="text-center">Status</th>
                  <th class="text-center" width="10%">Action</th>
              </thead>
              <tbody>
<?php foreach ($branches as $key => $bra):?>
                <tr>
                  <td style="text-transform: uppercase;"><?php echo $bra['branch_name'];?></td>
                  <td style="text-transform: capitalize;"><?php echo $bra['location'];?></td>
                  <td><?php echo $bra['create_date'];?></td>
                  <td class="text-center"><?php if ($bra['branch_status'] == 'Active'): ?>
                                        <span class="badge badge-pill badge-success" style="padding: 5px 10px 5px 10px;">Active</span>
                                    <?php elseif ($bra['branch_status'] == 'For Approval'):?>
                                        <span class="badge badge-pill badge-info" style="padding: 5px 10px 5px 10px;">For Approval</span>
                                    <?php elseif ($bra['branch_status'] == 'Suspended'):?>
                                        <span class="badge badge-pill badge-warning" style="padding: 5px 10px 5px 10px;">Suspended</span>
                                    <?php elseif ($bra['branch_status'] == 'Closed'):?>
                                        <span class="badge badge-pill badge-danger" style="padding: 5px 10px 5px 10px;">Closed</span>
                                    <?php endif; ?></td>
                   <td class="text-center"> 
    <!--active Stocks-->
                    <?php if($bra['branch_status'] == 'Active'): ?>
                      <a class="btn btn-xs btn-icon btn-blue " href="<?php echo site_url('stock-branches/'.$bra['id']); ?>" ><i class=" text-white"></i>Stocks</a>
    <!--suspend-->
                    <?php elseif($bra['branch_status'] == 'Suspended'): ?>
                     <a class="btn btn-xs btn-icon btn-blue " href="<?php echo site_url('stock-branches/'.$bra['id']); ?>" ><i class=" text-white"></i>Stocks</a>
    <!--close-->
                    <?php elseif($bra['branch_status'] == 'Closed'): ?>
                      <a class="btn btn-xs btn-icon btn-blue " href="<?php echo site_url('stock-branches/'.$bra['id']); ?>" ><i class=" text-white"></i>Stocks</a>

    <!--for approval -->
                    <?php elseif($bra['branch_status'] == 'For Approval'): ?>
                      <button class="btn btn-xs btn-icon btn-gray " disabled><i class="text-white"></i>Stocks</button>
                     
                      <?php endif; ?>
                  </td>
                  <td class="text-center">
    <!--active-->
                    <?php if($bra['branch_status'] == 'Active'): ?>
                      <button class="btn btn-xs btn-icon btn-blue update_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>" 
                      data-branch_name="<?php echo $bra['branch_name'];?>" 
                      data-location="<?php echo $bra['location'];?>"><i class="fe fe-edit text-white"></i></button>
                      <button class="btn btn-xs btn-icon btn-orange suspend_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>"><i class="fe fe-cloud-off  text-white"></i></button>
                      <button class="btn btn-xs btn-icon btn-danger ban_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>"><i class="fe fe-trash text-white"></i></button>

    <!--suspend-->
                    <?php elseif($bra['branch_status'] == 'Suspended'): ?>
                      <button class="btn btn-xs btn-icon btn-blue update_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>" 
                      data-branch_name="<?php echo $bra['branch_name'];?>" 
                      data-location="<?php echo $bra['location'];?>"><i class="fe fe-edit text-white"></i></button>
                      <button class="btn btn-xs btn-icon btn-primary active_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>"><i class="fe fe-cloud text-white"></i></button>
                     <button class="btn btn-xs btn-icon btn-danger ban_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>"><i class="fe fe-trash text-white"></i></button>
    <!--close-->
                    <?php elseif($bra['branch_status'] == 'Closed'): ?>
                      <button class="btn btn-xs btn-icon btn-gray ban_braplier_info" disabled><i class="fe fe-cloud-off text-white"></i></button>
                      <button class="btn btn-xs btn-icon btn-primary active_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>"><i class="fe fe-cloud text-white"></i></button>
                      <button class="btn btn-xs btn-icon btn-gray ban_braplier_info" disabled><i class="fe fe-edit text-white"></i></button>

    <!--for approval -->
                    <?php elseif($bra['branch_status'] == 'For Approval'): ?>
                      <button class="btn btn-xs btn-icon btn-blue update_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>" 
                      data-branch_name="<?php echo $bra['branch_name'];?>" 
                      data-location="<?php echo $bra['location'];?>"><i class="fe fe-edit text-white"></i></button>
                      <button class="btn btn-xs btn-icon btn-primary active_branch_info" href="javascript:void(0)" data-toggle="modal" 
                      data-id="<?php echo $bra['id'];?>"><i class="fe fe-cloud text-white"></i></button>
                      <button class="btn btn-xs btn-icon btn-gray ban_braplier_info" disabled><i class="fe fe-cloud-off text-white"></i></button>

                    
                <?php endif; ?>
                  </td>
                </tr>
<?php endforeach;?>
              </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!--add branch form-->
<form>
<div id="Modal_Add_Branch" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Company</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="name">Company Name</label>
                        <input type="text" class="form-control" id="branch_name" name="branch_name">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <label for="name">Location</label>
                        <textarea class="form-control" id="location" name="location"></textarea>
                    </div>
                </div>
                <div class="text-center pt-3">
                        <button type="button" id="btn_save_branch" class="btn btn-block btn-lime waves-effect waves-light">Enter New Branch</button>
                </div>
            </div>           
        </div>
    </div>
</div>
</form>
<!--edit modal -->
<div id="Modal_Edit_bra" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Branch Information</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <input type="text" name="id_edit" id="id_edit" readonly hidden>
                <div class="row">
                   <div class="form-group col-md-12">
                        <label for="name">Company Name</label>
                        <input type="text" class="form-control" name="branch_name_edit" id="branch_name_edit">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="name">Location</label>
                        <textarea type="text" class="form-control" id="location_edit" name="location_edit"></textarea>
                    </div>
                </div>
                <div class="text-center pt-3">
                        <button type="button" type="submit" id="btn_update_bra" class="btn btn-block btn-lime waves-effect waves-light">Update Branch Information</button>
                </div>
            </div>           
        </div>
    </div>
</div>

<!-- ban -->
<div id="Modal_ban_bra" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">WARNING!!!</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <input type="text" name="id_ban" id="id_ban" readonly hidden>
                    <p id ="para"></p>
                <div class="text-center pt-3">
                        <button type="button" type="submit" id="btn_ban_bra" class="btn btn-block btn-red waves-effect waves-light">Yes</button>
                </div>
            </div>           
        </div>
    </div>
</div>
<div id="Modal_active_bra" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">WARNING!!!</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <input type="text" name="id_active" id="id_active" readonly hidden>
                    <p id ="active_para"></p>
                <div class="text-center pt-3">
                        <button type="button" type="submit" id="btn_active_bra" class="btn btn-block btn-red waves-effect waves-light">Yes</button>
                </div>
            </div>           
        </div>
    </div>
</div>
<div id="Modal_suspend_bra" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">WARNING!!!</h4><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
              <input type="text" name="id_suspend" id="id_suspend" readonly hidden>
                    <p id ="suspend_para"></p>
                <div class="text-center pt-3">
                        <button type="button" type="submit" id="btn_suspend_bra" class="btn btn-block btn-red waves-effect waves-light">Yes</button>
                </div>
            </div>           
        </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
      $('#btn_save_branch').click(function(){
        let branch_name = $('#branch_name').val();
        let location = $('#location').val();

        $.ajax({
            method : "POST",
            url  : "<?php echo site_url('add-branches')?>",
            dataType : "JSON",
            data : {branch_name:branch_name, location:location},
            success: function(data){
               window.location.reload();
            }
        })
      })
//Edit Modal
    $('#example-1').on('click','.update_branch_info',function(){
      var id = $(this).data('id');
      var branch_name = $(this).data('branch_name');
      var location = $(this).data('location');
        $('#Modal_Edit_bra').modal('show');
        $('[name="id_edit"]').val(id);
        $('[name="branch_name_edit"]').val(branch_name);
        $('[name="location_edit"]').val(location);
    });

    $('#btn_update_bra').on('click',function(e){
        var id_edit = $('#id_edit').val();
        var branch_name_edit = $('#branch_name_edit').val();
        var location_edit= $('#location_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('update-branches')?>",
                dataType : "JSON",
                data : {id_edit:id_edit, branch_name_edit:branch_name_edit, location_edit:location_edit},
                success: function(data){
                    $('[name="id_edit"]').val("");
                    $('[name="branch_name_edit"]').val("");
                    $('[name="location_edit"]').val("");
                    $('#Modal_Edit_bra').modal('hide');
                    //showDevlist();
                    window.location.reload();
                }
            });
            return false;
    });

     $('#example-1').on('click','.ban_branch_info',function(){
      var id = $(this).data('id');
        $('#Modal_ban_bra').modal('show');
        $('[name="id_ban"]').val(id);
    });
     $('#btn_ban_bra').on('click',function(e){
        var id_ban = $('#id_ban').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('ban-branches')?>",
                dataType : "JSON",
                data : {id_ban:id_ban},
                success: function(data){
                   // $('#Modal_ban_bra').modal('hide');
                    //showDevlist();
                    window.location.reload();
                }
            });
            return false;
    });
    $('#example-1').on('click','.active_branch_info',function(){
      var id = $(this).data('id');
        $('#Modal_active_bra').modal('show');
        $('[name="id_active"]').val(id);
    });
     $('#btn_active_bra').on('click',function(e){
        var id_active = $('#id_active').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('active-branches')?>",
                dataType : "JSON",
                data : {id_active:id_active},
                success: function(data){
                    window.location.reload();
                }
            });
            return false;
    });

    $('#example-1').on('click','.suspend_branch_info',function(){
      var id = $(this).data('id');
        $('#Modal_suspend_bra').modal('show');
        $('[name="id_suspend"]').val(id);
    });
     $('#btn_suspend_bra').on('click',function(e){
        var id_suspend = $('#id_suspend').val();

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('suspend-branches')?>",
                dataType : "JSON",
                data : {id_suspend:id_suspend},
                success: function(data){
                    window.location.reload();
                }
            });
            return false;
    });
         $('#example-1 tbody').on('click', 'button', function () {
        var data = $("#example-1").DataTable().row($(this).parents('tr')).data();
        $("#para").text("Are you sure you want to Closed  " + data[0] + "?");
    });
         $('#example-1 tbody').on('click', 'button', function () {
        var data = $("#example-1").DataTable().row($(this).parents('tr')).data();
        $("#active_para").text("Are you sure you want to Activate  " + data[0] + "?");
    });
      $('#example-1 tbody').on('click', 'button', function () {
        var data = $("#example-1").DataTable().row($(this).parents('tr')).data();
        $("#suspend_para").text("Are you sure you want to Suspend  " + data[0] + "?");
    });
  });
</script>