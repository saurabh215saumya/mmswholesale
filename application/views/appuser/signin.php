<div role="main" class="main">
    <section class="form-section">
        <div class="container">
            <h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Login or Create an Account</h1>

            <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                <div class="box-content">
                    <!-- <form action="#"> -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-content">
                                    <h3 class="heading-text-color font-weight-normal">New Customers</h3>
                                    <p>By creating an account with our store, you will be able to move through
                                        the checkout process faster, store multiple shipping addresses, view and
                                        track your orders in your account and more.</p>
                                </div>

                                <div class="form-action clearfix">
                                    <a href="<?php echo base_url('sign-up'); ?>" class="btn btn-primary">Create an
                                        Account</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-content">
                                    <h3 class="heading-text-color font-weight-normal">Registered Customers</h3>
                                    <p>If you have an account with us, please log in.</p>

                                    <p id="resLoginErrorMsg" class="resErrorMsg"></p>
                                    <div class="form-group">
                                        <label class="font-weight-normal">Email Address <span class="required">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control">
                                        <span id="emailLoginError" style="color:red; margin-left: 10px; display: none;"></span>
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-normal">Password <span class="required">*</span></label>
                                        <input type="password" name="password" id="password" class="form-control">
                                        <span id="passwordLoginError" style="color:red; margin-left: 10px; display: none;"></span>
                                    </div>

                                    <p class="required">* Required Fields</p>
                                </div>

                                <div class="form-action clearfix">
                                    <!-- <a href="#" class="pull-left">Forgot Your Password?</a> -->

                                    <input onclick="return user_login();" class="btn btn-primary" value="Login">
                                </div>
                            </div>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </section>
</div>


<script type="text/javascript">
    function user_login(){
        var email = $('#email').val();
        var password = $('#password').val();
        var valid = 1;
        
        if(email == ""){
            $("#email").css({'border':'1px dotted red'});
            $("#email").focus();
            document.getElementById("emailLoginError").style.display = "block";
            document.getElementById("emailLoginError").innerHTML = '<strong>Enter your email.</strong>';

            var valid = 0;
        } else {
            document.getElementById("emailLoginError").innerHTML = '';
            document.getElementById("emailLoginError").style.display = "none";
        }

        if(password == ""){
            $("#password").css({'border':'1px dotted red'});
            $("#password").focus();
            document.getElementById("passwordLoginError").style.display = "block";
            document.getElementById("passwordLoginError").innerHTML = '<strong>Enter your email.</strong>';

            var valid = 0;
        } else {
            document.getElementById("passwordLoginError").innerHTML = '';
            document.getElementById("passwordLoginError").style.display = "none";
        }

        if(valid==0){
            return false;
        }else{
            var saveData = $.ajax({
                type: "POST",
                url: "<?php echo base_url('appuser/user_login_by_email'); ?>",
                data:"email="+email+"&password="+password,
                dataType: "text",
                success: function(resultData){ //alert(resultData); return false;
                    if(resultData == "success"){
                      window.location.href = "<?php echo base_url(); ?>";
                      // document.getElementById("resLoginErrorMsg").innerHTML = '<div class="alert alert-danger"><strong>Login Successfull.</strong></div>';
                    }
                    if(resultData == "failed"){
                      document.getElementById("resLoginErrorMsg").innerHTML = '<div class="alert alert-danger"><strong>Enter valid email and password.</strong></div>';
                    }
                }       
            });
        }
    }
</script>