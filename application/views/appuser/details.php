<?php //echo '<pre>'; print_r($payment_history); die; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>App User Details </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="<?php echo base_url($controller);?>"><?php echo ucfirst($controller); ?></a></li>
        <li class="active">App User Details: </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <?php if(!empty($details)) { 
                if(file_exists(UPLOAD_PROFILE_PATH.$details['profile_image'])) {
                  $img = SHOW_PROFILE_PATH.$row['profile_image'];
                } else {
                  $img = SHOW_PROFILE_PATH.'noimage.png';
                }
              ?>
               
              <table class="table table-bordered">
                <tr>
                  <td>
                    <div style="font-weight:bold; color:#06F; font-size:16px; padding-bottom:5px;">General Information</div>
                    <div class="clear"></div>
                    <div style="float:left; width:80px; font-weight:bold; padding-top:4px;">User Name:</div>
                    <div style="float:left; padding-top:4px;"><?php echo $details['user_name']; ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:80px; font-weight:bold; padding-top:4px;">Mobile Number:</div>
                    <div style="float:left; padding-top:4px;"><?php echo $details['mobile']; ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:80px; font-weight:bold; padding-top:4px;">email:</div>
                    <div style="float:left; padding-top:4px;"><?php echo $details['email']; ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:80px; font-weight:bold; padding-top:4px;">Country:</div>
                    <div style="float:left; padding-top:4px;"><?php echo $details['country']; ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:80px; font-weight:bold; padding-top:4px;">City:</div>
                    <div style="float:left; padding-top:4px;"><?php echo $details['city']; ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:80px; font-weight:bold; padding-top:4px;">Address:</div>
                    <div style="float:left; padding-top:4px;"><?php echo $details['address']; ?></div>
                    <div class="clear"></div>
                  </td>
                  <td>
                    <div style="font-weight:bold; color:#06F; font-size:16px; padding-bottom:5px;">&nbsp;</div>
                    <div class="clear"></div>
                    <div style="float:left; width:190px; font-weight:bold;">Account Balance(USD):</div>
                    <div style="float:left;">$<?php echo $details['account_balance']; ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:190px; font-weight:bold; padding-top:4px;">Total Earning(USD):</div>
                    <div style="float:left; padding-top:4px;">$<?php echo $details['earning_amount']; ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:190px; font-weight:bold; padding-top:4px;">About Me:</div>
                    <div style="float:left; padding-top:4px;"><?php echo $details['about_me']; ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:190px; font-weight:bold; padding-top:4px;">Profile Image:</div>
                    <div style="float:left; padding-top:4px;"><img alt="profile pic" height="50" width="60" src="<?php echo $img; ?>"></div>
                    <div class="clear"></div>
                    <div style="float:left; width:190px; font-weight:bold; padding-top:4px;">Added On:</div>
                    <div style="float:left; padding-top:4px;"><?php echo date('m/d/Y', $details['addedOn']); ?></div>
                    <div class="clear"></div>
                    <div style="float:left; width:190px; font-weight:bold; padding-top:4px;">Status:</div>
                    <div style="float:left; padding-top:4px;"><?php echo ($details['status'])?'Active':'In Active'; ?></div>
                    <div class="clear"></div>
                  </td>
                </tr>
              </table>
              </br>

<section class="content-header">
      <h1>Transaction Details</h1>
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
            <?php if(!empty($payment_history)) { ?>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.No</th>
                  <th>Game ID</th>
                  <th>Txn ID</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Credit Amount</th>
                  <th>Debit Amount</th>
                  <th>Status</th>
                  <th>Balance</th>
                </tr>
                </thead>
                <tbody id="checkboxes">
                <?php $i=1; foreach($payment_history as $paymenthistory) { 
                  if($paymenthistory['txn_type'] == 0){
                    $paymentStatus = "Pending";
                  } else if($paymenthistory['txn_type'] == 1){
                    $paymentStatus = "Process";
                  } else if($paymenthistory['txn_type'] == 2){
                    $paymentStatus = "Deposite";
                  } else if($paymenthistory['txn_type'] == 3){
                    $paymentStatus = "Withdraw";
                  } else if($paymenthistory['txn_type'] == 4){
                    $paymentStatus = "Failed";
                  } else {
                    $paymentStatus = "Withdraw";
                  }
                ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td>
                    <?php 
                    if($paymenthistory['game_id'] != 0){
                      echo getGameUniqueId($paymenthistory['game_id']); 
                    } else {
                      echo "- - - - -";
                    }
                    ?>
                  </td>
                  <td><?php echo $paymenthistory['transaction_id']; ?></td>
                  <td><?php echo date("d-F-Y", strtotime($paymenthistory['addedOn'])); ?></td>
                  <td><?php echo date("d-F-Y", strtotime($paymenthistory['addedOn'])); ?></td>
                  <td>$<?php echo $paymenthistory['credit_amount']; ?></td>
                  <td>$<?php echo $paymenthistory['debit_amount']; ?></td>
                  <td><?php echo $paymentStatus; ?></td>
                  <td>$<?php echo $paymenthistory['total_amount']; ?></td>
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
