<style type="text/css">
ul,li { margin:0; padding:0; list-style:none;}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>User Shift </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i>Home</a></li>
      <li class="active"><a href="<?php echo base_url($controller); ?>"><?php echo ucfirst($controller); ?></a></li>
     
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-10">
        <div class="box">
          <!-- /.box-header -->
          <div class="box-body">
            <!-- form start -->
            
            <div class="box-body">
              <?php echo $this->session->flashdata('response'); ?>
              

              

              <div class="form-group">
                             
				 <input type="hidden" name ="user_id" id="shiftuserid"  value="<?php echo (isset($uid)?$uid:'');?>"> 
                               
                <div id='calendar'></div>
                   <div id='datepicker'></div>

                   

              </div>

              
            </div>
            
          </div>        
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<script src="<?php echo base_url('assets/dist/js/shiftclander.js'); ?>"></script>
