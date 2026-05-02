<?php //echo '<pre>'; print_r($details); die; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<h1>Edit User</h1>
	<ol class="breadcrumb">
	    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i>Home</a></li>
	    <li class="active"><a href="<?php echo base_url($controller); ?>"><?php echo ucfirst($controller); ?></a></li>
	    <li class="active">Edit <?php echo ucfirst($controller); ?></li>
	</ol>
    </section>

    <!-- Main content -->
    <section class="content">
	<div class="row">
	    <div class="col-xs-8">
		<div class="box">
		    <!-- /.box-header -->
		    <div class="box-body">
			<!-- form start -->
			<?php echo form_open_multipart($controller.'/edit/'. $details['id']); ?>
			<div class="box-body">
			    <?php echo $this->session->flashdata('response'); ?>
			    <input type="hidden" name="user_id" value="<?php echo $details['id']; ?>">

   			    <div class="form-group">
				<label for="name">User Name<span style="color: #ff0000">*</span></label>
				<input class="form-control" id="user_name" name="user_name" placeholder="User Name" type="text" value="<?php echo $details['user_name']; ?>">
				<?php echo form_error('user_name'); ?>
			    </div>


			    <div class="form-group">
				<label for="email">Email ID<span style="color: #ff0000">*</span></label>
				<input class="form-control" id="email" name="email" placeholder="Email" type="email" value="<?php echo $details['email']; ?>">
				<?php echo form_error('email'); ?>
			    </div>

			    <div class="form-group">
				<label for="mobile">Mobile Number<span style="color: #ff0000">*</span></label>
				<input class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" type="mobile" maxlength="10" value="<?php echo $details['mobile']; ?>">
				<?php echo form_error('mobile'); ?>
			    </div>

			    <div class="form-group">
				<label>Please Choose Gender<span style="color: #ff0000">*</span></label>
				<select class="form-control" id="gender" name="gender">
				   <option value="">Select Gender</option>
				    <option <?php echo $details['gender']==male?'selected':''; ?> value="male">Male</option>
				    <option <?php echo $details['gender']==female?'selected':''; ?> value="female">Female</option>
				</select>
				<?php echo form_error('gender'); ?>
			    </div>

			    <div class="form-group">
				<label for="address_1">Address<span style="color: #ff0000">*</span></label>
				<input class="form-control" id="address" name="address" placeholder="Address" type="text" value="<?php echo $details['address']; ?>">
				<?php echo form_error('address'); ?>
			    </div>

				<div class="form-group">
				<label for="address_2">About Me<span style="color: #ff0000"></span></label>
				<input class="form-control" id="about_me" name="about_me" placeholder="About Me" type="text" value="<?php echo $details['about_me']; ?>">
				<?php echo form_error('about_me'); ?>
			    </div>
	  

			    <div class="form-group">
				<label>Please Choose Status<span style="color: #ff0000">*</span></label>
				<select class="form-control" id="status" name="status">
				   <option value="">Select Status</option>
				    <option <?php echo $details['status']==1?'selected':''; ?> value="1">Active</option>
				    <option <?php echo $details['status']==0?'selected':''; ?> value="0">In Active</option>
				</select>
				<?php echo form_error('status'); ?>
			    </div>    
			    <div class="box-footer">
				<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			    </div>
			</div>
			<?php form_close(); ?>
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
</script>
