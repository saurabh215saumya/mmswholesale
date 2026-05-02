<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<h1>Add User</h1>
	<ol class="breadcrumb">
	    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i>Home</a></li>
	    <li class="active"><a href="<?php echo base_url($controller); ?>"><?php echo ucfirst($controller); ?></a></li>
	    <li class="active">Add <?php echo ucfirst($controller); ?></li>
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
			<?php echo form_open_multipart($controller.'/add'); ?>
			<div class="box-body">
			    <?php echo $this->session->flashdata('response'); ?>

   			    <div class="form-group">
				<label for="name">User Name<span style="color: #ff0000">*</span></label>
				<input class="form-control" id="user_name" name="user_name" placeholder="User Name" type="text" value="<?php echo set_value('user_name') ?>">
				<?php echo form_error('user_name'); ?>
			    </div>

			    <div class="form-group">
				<label for="email">Email ID<span style="color: #ff0000">*</span></label>
				<input class="form-control" id="email" name="email" placeholder="Email" type="email" value="<?php echo set_value('email') ?>">
				<?php echo form_error('email'); ?>
			    </div>

			    <div class="form-group">
				<label for="mobile">Mobile Number<span style="color: #ff0000">*</span></label>
				<input class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" type="mobile" maxlength="10" value="<?php echo set_value('mobile') ?>">
				<?php echo form_error('mobile'); ?>
			    </div>

			    <!-- <div class="form-group">
				<label for="mobile">Password<span style="color: #ff0000">*</span></label>
				<input class="form-control" id="password" name="password" placeholder="Password" type="password" value="<?php echo set_value('password') ?>">
				<?php echo form_error('password'); ?>
			    </div> -->

			    <div class="form-group">
				<label for="address_1">Gender<span style="color: #ff0000">*</span></label>
				<select class="form-control" id="gender" name="gender">
				    <option value="">Select Status</option>
				    <option value="male">Male</option>
				    <option value="female">Female</option>
				</select>
				<?php echo form_error('gender'); ?>
			    </div>

				<div class="form-group">
				<label for="address_2">Address</label>
				<input class="form-control" id="address" name="address" placeholder="Address" type="text" value="<?php echo set_value('address') ?>">
				<?php echo form_error('address'); ?>
			    </div>


			   	<div class="form-group">
				<label for="post_code">About Me</label>
				<input class="form-control" id="about_me" name="about_me" placeholder="About User" type="text" value="<?php echo set_value('about_me') ?>">
				<?php echo form_error('about_me'); ?>
			    </div>		  

			    <div class="form-group">
				<label>Please Choose Status<span style="color: #ff0000">*</span></label>
				<select class="form-control" id="status" name="status">
				    <option value="">Select Status</option>
				    <option value="1">Active</option>
				    <option value="0">In Active</option>
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
