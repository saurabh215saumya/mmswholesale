  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>App User List</h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo base_url('admin');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?php echo ucfirst($controller); ?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          <!-- Search area -->

          <?php //echo form_open_multipart($controller. "/save_pdf"); ?>
          <?php echo form_open_multipart($controller. "/generateTokenReport"); ?>

            <label style="margin-top: 10px; padding-left: 35px;">Report Type : </label>
              <select id="report_type" name="report_type">
                <option value="pdf">PDF</option>
                <option value="excel">EXCEL</option>
              </select>
            <br>
            <label style="margin-top: 10px; padding-left: 35px;">Above 10,000 : </label>
              <input type="checkbox" name="upto" value="1">
              <br>
            <label style="margin-top: 10px; padding-left: 35px;">IC Number : </label>
              <input type="text" name="ic_no">

            <div class="box-header">
              <div class="box-body col-md-5">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="from_date">From:<span style="color: #ff0000">*</span></label>
                    <input type="text" class="form-control" id="datepicker" name="from_date" placeholder="YYYY-MM-DD" readonly="readonly" required>
                    <?php echo form_error('from_date'); ?>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="to_date">To:<span style="color: #ff0000">*</span></label>
                    <input type="text" class="form-control" id="datepicker1" name="to_date" placeholder="YYYY-MM-DD" readonly="readonly"  required>
                    <?php echo form_error('to_date'); ?>
                  </div>
                </div>

                <div class="col-md-4">
                  <button class="btn btn-warning btn-large type="submit" name="submit" class="btn btn-primary">Export</button>
                </div>
              </div>
            </div>
            <?php form_close(); ?>
          <!-- Search area -->

            <!-- /.box-header -->
            <!-- <div class="box-body">
            <a class="btn btn-warning btn-large" style="margin-left:20px" href="<?php echo BASE_URL.'/appuser/save_pdf'; ?>"><i class="fa fa-file-excel-o"></i> Export as PDF</a>
           <a class="btn btn-warning btn-large" style="margin-left:20px" href="<?php echo BASE_URL.'/appuser/exportCSV'; ?>"><i class="fa fa-file-excel-o"></i> Export as CSV</a>
            </div> -->
            
            <div class="box-body">

            <?php echo $this->session->flashdata('response'); ?>
            <?php if(!empty($allusertoken)) { ?>
              <!-- <table id="example1" class="table table-bordered table-striped"> -->
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>IC No.</th>
                  <th>Token Number</th>
                  <th>Order ID</th>
                  <th>Status</th>
                  <th>Created On</th>

                </tr>
                </thead>
                <tbody>
                <?php foreach($allusertoken as $row) { 
                  if($row['status']) {
                    $status = '<p class="changestatus" id="display__'.$row["id"].'"><span statusid='.$row["id"].' statusvalue='.$row["status"].' controllername='.$controller.' style="color: #00a65a; cursor: pointer;" title="Active"><i class="fa fa-2x fa-check" aria-hidden="true"></i></span></p>';
                      } else {
                    $status = '<p class="changestatus" id="display__'.$row["id"].'"><span statusid='.$row["id"].' statusvalue='.$row["status"].' controllername='.$controller.' style="color: #ff0000; cursor: pointer;" title="In Active"><i class="fa fa-2x fa-ban" aria-hidden="true"></i></span></p>';
                  }            
                ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['name']; ?></td>
                  <td><?php echo $row['ic_no']; ?></td>
                  <td><?php echo $row['token_no']; ?></td>
                  <td><?php echo $row['order_id']; ?></td>
                  <td><?php echo $row['status']; ?></td>
                  <td><?php echo $row['addedOn']; ?></td>
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

<script>
  $(function () {
     //Date picker
    $( "#datepicker" ).css('cursor','pointer');
    $('#datepicker').datepicker({
     language: 'en',
      format: 'yyyy-mm-dd',
      autoclose: true
    });
  });

  $(function () {
     //Date picker
    $( "#datepicker1" ).css('cursor','pointer');
    $('#datepicker1').datepicker({
     language: 'en',
      format: 'yyyy-mm-dd',
      autoclose: true
    });
  });
</script>