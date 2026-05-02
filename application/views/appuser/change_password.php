<div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Boys Uniform</a></li>
        <li class="breadcrumb-item active" aria-current="page">Change Password</li>
    </ol>
</div>

<section>  
<div class="container my_account">
    <div class="row">
        <div class="col-12 col-md-4">
            <div class="my_account_left">
                <a href="<?php echo base_url('appuser/my-account'); ?>">My profile</a>
                <a href="<?php echo base_url('appuser/billing-address'); ?>">Billing Address</a>
                <a href="<?php echo base_url('appuser/change-password'); ?>" class="active">Change Password</a>
                <a href="<?php echo base_url('appuser/my-order'); ?>">My orders</a>
                <a href="<?php echo base_url('appuser/logout'); ?>">Logout</a>
            </div>
        </div>
        <div class="col-12 col-md-8">
            <?php echo $this->session->flashdata('response'); ?>
            <div class="my_account_right">
                <div id="change_password_message"></div>
                <h3>Password Change</h3>
                <?php //echo form_open_multipart($controller.'/update_password'); ?>
                <input type="hidden" name="user_id" value="<?php echo $loginUserArr['id']; ?>">
                <form>
                    <div class="form-group">
                        <label>Current Password</label>
                        <input type="password" name="old_password" id="old_password" placeholder="Enter current password" value="" class="form-control" />
                    </div>
                    <div class="row form-group">
                        <div class="col-12 col-md-6">
                            <label>New password</label>
                            <input type="password" name="new_password" id="new_password" value="" placeholder="Enter new password" class="form-control" />
                        </div>
                        <div class="col-12 col-md-6">
                            <label>Confirm Password</label>
                            <input type="password" name="conf_password" id="conf_password" value="" placeholder="Enter confirm password" class="form-control" />
                        </div>
                    </div>
                </form>
                <div class="form-group mt-5">
                    <button type="submit" name="submit"  class="btn btn-primary" onclick="return change_password();"> Save changes</button>
                </div>
                <?php //echo form_close(); ?>
            </div>
        </div>
    </div>
</div>
</section>


<script type="text/javascript">
    function change_password(){
        var valid = 1;
        var oldPass = $('#old_password').val();
        var newPass = $('#new_password').val();
        var confPass = $('#conf_password').val();

        if(oldPass == ""){
            $("#old_password").css({'border':'1px dotted red'});
            $("#old_password").focus();
            valid = 0;
        }
        if(newPass == ""){
            $("#new_password").css({'border':'1px dotted red'});
            $("#new_password").focus();
            valid = 0;
        }
        if(confPass == ""){
            $("#conf_password").css({'border':'1px dotted red'});
            $("#conf_password").focus();
            valid = 0;
        }
        if(newPass != confPass){
            alert("New password and confirm password should be same!")
            valid = 0;
        }
        if(valid==0){
            return false;
        }else{
            var saveData = $.ajax({
                type: "POST",
                url: "<?php echo base_url('appuser/change_user_password'); ?>",
                data:"oldPass="+oldPass+"&confPass="+confPass,
                dataType: "text",
                success: function(resultData){ //alert(resultData); 
                    if(resultData == "missmatch"){
                        // alert("Enter correct new password.");
                        document.getElementById("change_password_message").innerHTML = '<div class="alert alert-danger">Enter correct new password.</div>';
                    }
                    if(resultData == "updated"){
                        $('#old_password').val('');
                        $('#new_password').val('');
                        $('#conf_password').val('');
                        document.getElementById("change_password_message").innerHTML = '<div class="alert alert-success">Password changed successfully.</div>';
                    }
                    if(resultData == "error"){
                        // alert("Something wronge.");
                        document.getElementById("change_password_message").innerHTML = '<div class="alert alert-success">Failed to change password.</div>';
                    }
                    // window.location.href = "<?php //echo base_url('product/checkout/'); ?>";
                }       
            });
        }
    }
</script>