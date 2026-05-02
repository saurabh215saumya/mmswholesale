<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<h1>Add Teatimonial</h1>
	<ol class="breadcrumb">
	    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i>Home</a></li>
	    <li class="active"><a href="<?php echo base_url($controller); ?>">Teatimonial</a></li>
	    <li class="active">Add Teatimonial</li>
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
			<?php echo form_open_multipart($controller.'/add_newtestimonial'); ?>
			<div class="box-body">
			    <?php echo $this->session->flashdata('response'); ?>
			    <!-- <div class="form-group">
					<label>Select Category<span style="color: #ff0000">*</span></label>
					<select class="form-control" id="category_type" name="category_type" required>
					    <option value="">Select Category</option>
					    <option value="1">Male</option>
					    <option value="2">Female</option>
					</select>
					<?php echo form_error('category_type'); ?>
			    </div> -->


			    <div class="form-group">
					<label for="name">Client Name<span style="color: #ff0000"></span></label>
					<input class="form-control" id="name" name="name" placeholder="Client Name" type="text" value="<?php echo set_value('name') ?>">
					<?php echo form_error('name'); ?>
			    </div>

			    <div class="form-group">
					<label for="name">Designation : <span style="color: #ff0000"></span></label>
					<?php echo BASE_URL; ?> <input class="form-control" id="designation" name="designation" placeholder="Designation" type="text" value="<?php echo set_value('designation') ?>">
					<?php echo form_error('designation'); ?>
			    </div>

			    <div class="form-group">
				<label for="description">Description<span style="color: #ff0000"></span></label>
					<textarea name="description" id="editor" value="<?php echo set_value('description') ?>"></textarea>
					<?php echo form_error('description'); ?>
				</div>

			   	<div class="control-group">
				  <label class="control-label">Image:</label>
					<div class="controls">
						<input type="file" class="span11" name="image_file" id="image_file"/>
					</div>
					<!-- <div style="color: red">*Upload Image size should be 1020(Height)*1000(Width).</div> -->
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
