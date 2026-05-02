  <?php //echo '<pre>'; print_r($allcustomers); die; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>User List</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo ucfirst($controller); ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
    <div id="successMsg" style="text-align:center; color: green;"></div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
            <?php echo $this->session->flashdata('response'); ?>
            <?php if(!empty($allcustomers)) { ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Account Balance</th>
                  <th>Total Earning</th>
                  <th>Game Played</th>
                  <th>Vote Count</th>
                  <th>Status</th>
                  <th>Action</th>
                  <!-- <th>Select All <input type="checkbox" id="checkall"></th> -->
                </tr>
                </thead>
                <tbody id="checkboxes">
                <?php foreach($allcustomers as $row) { 
                  $userGamePlayCount = getUserPlayedGame($row['id']);
                  $userGameVoteCount = getUserVoteCount($row['id']);
                  if($row['status']) {
                    $status = '<p class="changestatus" id="display__'.$row["id"].'"><span statusid='.$row["id"].' statusvalue='.$row["status"].' controllername='.$controller.' style="color: #00a65a; cursor: pointer;" title="Active"><i class="fa fa-2x fa-check" aria-hidden="true"></i></span></p>';
                      } else {
                    $status = '<p class="changestatus" id="display__'.$row["id"].'"><span statusid='.$row["id"].' statusvalue='.$row["status"].' controllername='.$controller.' style="color: #ff0000; cursor: pointer;" title="In Active"><i class="fa fa-2x fa-ban" aria-hidden="true"></i></span></p>';
                  }
              

                  /*if(file_exists(UPLOAD_PROFILE_PATH.$row['profile_image'])) {
                      $img = SHOW_PROFILE_PATH.$row['profile_image'];
                    } else {
                      $img = SHOW_PROFILE_PATH.'noimage.png';
                    }*/
                ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['user_name']; ?></td>
                  <td><?php echo $row['mobile']; ?></td>
                  <td><?php echo $row['email']; ?></td>
                  <td><?php echo $row['account_balance']; ?></td>
                                   
                  <!-- <td><img alt="profile pic" height="50" width="60" src="<?php echo $img; ?>"></td> -->  
                  <td><?php echo $row['earning_amount']; ?></td>
                  <td><?php echo $userGamePlayCount; ?></td>
                  <td><?php echo $userGameVoteCount; ?></td>
                  <td>
                    <img id="loderid_<?php echo $row['id'] ?>" src="<?php echo SHOW_IMAGE_LODER_ICON_PATH; ?>" height="80px" width="100px" style="display: none" >
                    <?php echo $status; ?>                      
                  </td>
                  <td><a class="btn btn-primary" title="View" href="<?php echo BASE_URL.'/appuser/details/'.$row['id'] ?>"><i class="glyphicon glyphicon-eye-open" aria-hidden="true"></i></a>
                  <!-- <a class="btn btn-primary" title="Edit" href="<?php echo BASE_URL.'/appuser/edit/'.$row['id'] ?>"><i class="glyphicon glyphicon-edit" aria-hidden="true"></i></a> -->
                  <a onclick="return deleteconfirm();" class="btn btn-danger" title="Delete" href="<?php echo BASE_URL.'/appuser/delete/'.$row['id'] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <?php } ?>                
                </tbody>
              </table>
              
              <?php } else { ?>
              <div style="text-align: center;">No Record found</div>
              <?php } ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
