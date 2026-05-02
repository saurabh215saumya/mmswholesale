<!-- INNER BANNER START HERE -->
    <div class="inner_banner">
        <div class="overlay"></div>
        <img src="<?php echo base_url('assets/front/images/inner-banner.jpg'); ?>" class="img-fluid" alt="" />
        <div class="inner_banner_content">
            <h1>Sign In</h1>
        </div>
    </div> 
<!-- INNER BANNER END HERE -->

    <ol class="breadcrumb mt-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Login</li>
    </ol>


<section>
    <div class="container">
        <p id="resLoginMsg" style="text-align: center"></p>
        <div class="row login">
            <div class="col-sm-6">
                <h4 class="mb-twenty">Register Costumer</h4>
                <p>If you have an account, sign in with your email addressability</p>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="login_email" id="login_email" class="form-control" placeholder="Enter Email" />
                                <span id="emailError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-7">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="login_password" id="login_password" class="form-control" placeholder="Enter Password" />
                                <span id="passwordError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <button class="btn btn-primary mr-3" onclick="return user_login();">Sig In</button>
                                <span>Forget your password?</span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-sm-6">
                <h4 class="mb-twenty">New Costumer</h4>
                <p>Creating an account has many benefits: check out faster, keep more than one address, track order
                    and more.</p>
                <button onClick="location.href='register'" class="btn btn-primary">Create an Account</button>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    function user_login(){
        var login_email = $('#login_email').val();
        var login_password = $('#login_password').val();
        var valid = 1;
        

        if(login_email == ""){
            $("#login_email").css({'border':'1px dotted red'});
            $("#login_email").focus();
            var valid = 0;
        }
        var atposition=login_email.indexOf("@");  
        var dotposition=login_email.lastIndexOf(".");  
        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=login_email.length){  
            document.getElementById("emailError").style.display = "block";
            document.getElementById("emailError").innerHTML = '<strong>Enter valid email address.</strong>';  
            var valid = 0;  
        } else {
            document.getElementById("emailError").innerHTML = '';
            document.getElementById("emailError").style.display = "none";
        }


        if(login_password == ""){
            $("#login_password").css({'border':'1px dotted red'});
            $("#login_password").focus();
            document.getElementById("passwordError").style.display = "block";
            document.getElementById("passwordError").innerHTML = '<strong>Enter your password.</strong>'; 
            var valid = 0;
        } else {
            document.getElementById("passwordError").innerHTML = '';
            document.getElementById("passwordError").style.display = "none";
        }

        if(valid==0){
            return false;
        }else{
            var saveData = $.ajax({
                type: "POST",
                url: "<?php echo base_url('appuser/user_login'); ?>",
                data:"email="+login_email+"&password="+login_password,
                dataType: "text",
                success: function(resultData){ //alert(resultData); return false;
                    if(resultData == "success"){
                      window.location.href = "<?php echo base_url(); ?>";
                    }
                    if(resultData == "failed"){
                      document.getElementById("resLoginMsg").innerHTML = '<div class="alert alert-danger"><strong>User OR Password Invalid.</strong></div>';
                    }
                }       
            });
        }
    }
</script>