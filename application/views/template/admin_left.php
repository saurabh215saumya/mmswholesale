<?php
$url  = $this->uri->segment(1); 
$url_param = $this->uri->segment(2); 
// $userType = $this->session->userdata('logged_in')['admin_type'];
?>

<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">  

     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
		<!-- Dashboard start -->
        <li class="treeview <?php echo ($url == 'admin') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('admin');?>"><i class="fa fa-circle-o"></i> Dashboard</a></li>
          </ul>
        </li>
        <!-- Dashboard End -->
        

        <!-- Banner List -->
        <li class="treeview <?php echo ($url == 'banner') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Banner Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('banner');?>"><i class="fa fa-circle-o"></i>Banner List</a>
            <li class="active"><a href="<?php echo base_url('banner/addbanner');?>"><i class="fa fa-circle-o"></i>Add Banner</a>
            </li>            
          </ul>
        </li>
        <!-- End of Banner List -->


        <!-- Gallery List -->
        <!-- <li class="treeview <?php echo ($url == 'gallery') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Gallery Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('gallery');?>"><i class="fa fa-circle-o"></i>Gallery List</a>
            <li class="active"><a href="<?php echo base_url('gallery/addgallery');?>"><i class="fa fa-circle-o"></i>Add Gallery</a>
            </li>            
          </ul>
        </li> -->
        <!-- End of Gallery List -->


        <!-- Brand List -->
        <li class="treeview <?php echo ($url == 'brand') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Brand Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('brand');?>"><i class="fa fa-circle-o"></i>Brand List</a></li>
            <li class="active"><a href="<?php echo base_url('brand/addbrand');?>"><i class="fa fa-circle-o"></i>Add Brand</a>
            </li>            
          </ul>
        </li>
        <!-- End of Brand List -->


        <!-- Package List -->
        <li class="treeview <?php echo ($url == 'category') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Category Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <!-- <li class="active"><a href="<?php echo base_url('category');?>"><i class="fa fa-circle-o"></i>Male Menu List</a></li> -->
            <li class="active"><a href="<?php echo base_url('category');?>"><i class="fa fa-circle-o"></i>Category List</a></li>
            <li class="active"><a href="<?php echo base_url('category/addcategory');?>"><i class="fa fa-circle-o"></i>Add Category</a>
            </li>            
          </ul>
        </li>
        <!-- End of Category List -->


        <!-- Service List -->
        <li class="treeview <?php echo ($url == 'subcategory') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Sub Category Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('subcategory');?>"><i class="fa fa-circle-o"></i>Sub Category List</a>
            </li>
            <li class="active"><a href="<?php echo base_url('subcategory/addsubcategory');?>"><i class="fa fa-circle-o"></i>Add Sub Category</a>         
          </ul>
        </li>
        <!-- End of Product List -->

        
        <!-- Location Management List -->
         <li class="treeview <?php echo ($url == 'location') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Location Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('location');?>"><i class="fa fa-circle-o"></i> Location List</a>
            </li>
            <li class="active"><a href="<?php echo base_url('location/addlocation');?>"><i class="fa fa-circle-o"></i>Add Location</a>
            </li>            
          </ul>
        </li>
         <!-- Location  Management List-->


         <!-- Testimonial Management List -->
         <li class="treeview <?php echo ($url == 'testimonial') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Testimonial Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('testimonial');?>"><i class="fa fa-circle-o"></i> Testimonial List</a>
            </li>
            <li class="active"><a href="<?php echo base_url('testimonial/addtestimonial');?>"><i class="fa fa-circle-o"></i>Add Testimonial</a>
            </li>            
          </ul>
        </li>
         <!-- Testimonial  Management List-->

         <!-- FAQ Management List -->
         <!-- <li class="treeview <?php echo ($url == 'faq') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>FAQ Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('faq');?>"><i class="fa fa-circle-o"></i> FAQ List</a>
            </li>
            <li class="active"><a href="<?php echo base_url('faq/addfaq');?>"><i class="fa fa-circle-o"></i>Add FAQ</a>
            </li>            
          </ul>
        </li> -->
         <!-- FAQ  Management List-->


         <!-- Service Page Management List -->
         <!-- <li class="treeview <?php echo ($url == 'servicepage') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Service Page Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('servicepage');?>"><i class="fa fa-circle-o"></i> Service Page List</a>
            </li>
            <li class="active"><a href="<?php echo base_url('servicepage/addservicepage');?>"><i class="fa fa-circle-o"></i>Add Service Page</a>
            </li>            
          </ul>
        </li> -->
         <!-- Service Page  Management List-->

        <!-- Content Management List -->
         <li class="treeview <?php echo ($url == 'staticpage') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Content Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('staticpage');?>"><i class="fa fa-circle-o"></i>Page List</a>
            </li>            
          </ul>
        </li> 
         <!-- Content Management List-->

         <!-- Appointment Management List -->
         <!-- <li class="treeview <?php echo ($url == 'appointment') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Appointment Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <li class="active"><a href="<?php echo base_url('appointment');?>"><i class="fa fa-circle-o"></i>Appointment List</a>
            </li>            
          </ul>
        </li> --> 
         <!-- Appointment Management List-->


         <!-- Keyword List -->
        <li class="treeview <?php echo ($url == 'keyword') ? 'active' : '' ?>">
          <a href="javascript:void(0);">
            <i class="fa fa-tags"></i> <span>Keyword Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu menu-open" style="display: block;">
            <!-- <li class="active"><a href="<?php echo base_url('service');?>"><i class="fa fa-circle-o"></i>Male Sub Menu List</a>
            </li>    -->
            <li class="active"><a href="<?php echo base_url('keyword');?>"><i class="fa fa-circle-o"></i>Keyword List</a>
            </li>
            <li class="active"><a href="<?php echo base_url('keyword/addkeyword');?>"><i class="fa fa-circle-o"></i>Add Keyword</a></li>         
              <li class="active"><a href="<?php echo base_url('keyword/upload_csv');?>"><i class="fa fa-circle-o"></i>Upload CSV</a></li>       
          </ul>
        </li>
        <!-- End of Keyword List -->

      </ul> 
    </section>
    <!-- /.sidebar -->
  </aside>
