<?php //echo '<pre>'; print_r($details); die; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
	<h1>Edit Testimonial</h1>
	<ol class="breadcrumb">
	    <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i>Home</a></li>
	    <li class="active"><a href="<?php echo base_url($controller); ?>">Testimonial</a></li>
	    <li class="active">Edit Testimonial</li>
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
			<?php echo form_open_multipart($controller.'/update_testimonial'); ?>
			<div class="box-body">
			    <?php echo $this->session->flashdata('response'); ?>
			    <input type="hidden" name="testimonial_id" value="<?php echo $details['id']; ?>">
			    <!-- <div class="form-group">
					<label>Select Category<span style="color: #ff0000">*</span></label>
					<select class="form-control" id="category_type" name="category_type" required>
					    <option value="">Select Category</option>
					    <option <?php if($details['category_type'] == 1){ ?> selected <?php } ?> value="1">Male</option>
					    <option <?php if($details['category_type'] == 2){ ?> selected <?php } ?> value="2">Female</option>
					</select>
					<?php echo form_error('status'); ?>
			    </div> -->


			    <div class="form-group">
				<label for="name">Name<span style="color: #ff0000">*</span></label>
				<input class="form-control" name="name" id="name" placeholder="Name" type="text" value="<?php echo $details['name']; ?>" required>
				<?php echo form_error('name'); ?>				
			    </div>

			    <div class="form-group">
					<label for="name">Designation : <span style="color: #ff0000">*</span></label>
					<?php echo BASE_URL; ?> <input class="form-control" name="designation" id="designation" placeholder="Designation<?php echo BASE_URL; ?> " type="text" value="<?php echo $details['designation']; ?>" readonly>
					<?php echo form_error('designation'); ?>				
			    </div>

			    <div class="form-group">
				<label for="description">Description<span style="color: #ff0000">*</span></label>
					<textarea class="form-control" name="description" id="editor" value=""><?php echo $details['description']; ?></textarea>
					<?php echo form_error('description'); ?>
				</div>
			    
			    <div class="control-group">
				  <label class="control-label">Image:</label>
					<div class="controls">
						<input type="file" class="span11" name="image_file" id="image_file"/>
						<input type="hidden" name="image_file_name" id="image_file_name" value="<?php echo $details['image'];?>"/>
						<?php if(!empty($details['image'])) {
							echo '<div><img src="'.BASE_URL.'/uploads/testimonials/'.$details['image'].'" width="25%"/></div>';
						} ?>
					</div>
					<!-- <div style="color: red">*Upload Image size should be 1020(Height)*1000(Width).</div> -->
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
