<div role="main" class="main">

    <section class="form-section register-form">
        <div class="container">
            <h1 class="h2 heading-primary font-weight-normal mb-md mt-lg">Create an Account</h1>
            <div id="resSuccessMsg" class="resSuccessMsg"></div>
            <div id="resErrorMsg" class="resErrorMsg"></div>

            <div class="featured-box featured-box-primary featured-box-flat featured-box-text-left mt-md">
                <div class="box-content">
                    <h4 class="heading-primary text-uppercase mb-lg">PERSONAL INFORMATION</h4>
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="first_name" id="first_name">
                                <span id="firstNameError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>

                            <h4 class="heading-primary text-uppercase mb-lg">Add Your Pickup Address</h4>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="last_name" id="last_name">
                                <span id="lastNameError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile" id="mobile">
                                <span id="mobileNoError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">Email Address <span class="required">*</span></label>
                                <input type="email" class="form-control" name="email" id="email" required>
                                <span id="emailError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Town/City <span class="required">*</span></label>
                                <input type="text" class="form-control" name="cityname" id="cityname" placeholder="Town/City">
                                <span id="cityNameError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Post Code <span class="required">*</span></label>
                                <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Post Code">
                                <span id="postalCodeError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Address <span class="required">*</span></label>
                                <input type="text" class="form-control" name="address_11" id="address_11" placeholder="Enter Address">
                                <span id="address11Error" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Address</label>
                                <input type="text" class="form-control" name="address_22" id="address_22" placeholder="Enter Address">
                                <span id="address22Error" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                            
                            <h4 class="heading-primary text-uppercase mb-lg">LOGIN INFORMATION</h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="font-weight-normal">Password <span
                                        class="required">*</span></label>
                                <input type="password" class="form-control" name="password" id="password">
                                <span id="passwordError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                            <div class="checkbox mb-xlg">
                                <label>
                                    <input type="checkbox" id="billing_address_checkbox" name="billing_address_checkbox" onclick="return billing_address();">
                                    If you want to add your delivery address
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="font-weight-normal">Confirm Password <span
                                        class="required">*</span></label>
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control">
                                <span id="confirmPasswordError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row" id="button_show_hide">
                        <div class="col-xs-12">
                            <p class="required mt-lg mb-none">* Required Fields</p>

                            <div class="form-action clearfix mt-none">
                                <a href="demo-shop-5-login.html" class="pull-left"><i
                                        class="fa fa-angle-double-left"></i> Back</a>

                                <input onclick="return user_signup();" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-content" id="billing_div" style="display:none;">
                    <h4 class="heading-primary text-uppercase mb-lg">DELIVERY ADDRESS</h4>
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">First Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="del_first_name" id="del_first_name">
                                <span id="delfirstNameError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">Last Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="del_last_name" id="del_last_name">
                                <span id="dellastNameError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">Mobile Number</label>
                                <input type="text" class="form-control" name="del_mobile" id="del_mobile">
                                <span id="delmobileNoError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-3">
                            <div class="form-group">
                                <label class="font-weight-normal">Email Address <span class="required">*</span></label>
                                <input type="email" class="form-control" name="del_email" id="del_email" required>
                                <span id="delemailError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Town/City <span class="required">*</span></label>
                                <input type="text" class="form-control" name="del_cityname" id="del_cityname" placeholder="Town/City">
                                <span id="delcityNameError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Post Code <span class="required">*</span></label>
                                <input type="text" class="form-control" name="del_postal_code" id="del_postal_code" placeholder="Post Code">
                                <span id="delpostalCodeError" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Address <span class="required">*</span></label>
                                <input type="text" class="form-control" name="del_address_11" id="del_address_11" placeholder="Enter Address">
                                <span id="deladdress11Error" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="form-group">
                                <label class="font-weight-normal">Address</label>
                                <input type="text" class="form-control" name="del_address_22" id="del_address_22" placeholder="Enter Address">
                                <span id="deladdress22Error" style="color:red; margin-left: 10px; display: none;"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p class="required mt-lg mb-none">* Required Fields</p>

                            <div class="form-action clearfix mt-none">
                                <a href="demo-shop-5-login.html" class="pull-left"><i
                                        class="fa fa-angle-double-left"></i> Back</a>

                                <input onclick="return user_signup();" class="btn btn-primary" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<script type="text/javascript">
    function billing_address(){
        var checkBox = document.getElementById("billing_address_checkbox");
        if (checkBox.checked == true){
            document.getElementById("billing_div").style.display = "block";
            document.getElementById("button_show_hide").style.display = "none";
            
        } else {
            document.getElementById("billing_div").style.display = "none";
            document.getElementById("button_show_hide").style.display = "block";
        }
    }
</script>

<script type="text/javascript">
    function user_signup(){
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var address_11 = $('#address_11').val();
        var address_22 = $('#address_22').val();
        var cityname = $('#cityname').val();
        var postal_code = $('#postal_code').val();
        var password = $('#password').val();
        var confirm_password = $('#confirm_password').val();

        var valid = 1;
        if(first_name == ""){
            $("#first_name").css({'border':'1px dotted red'});
            $("#first_name").focus();
            document.getElementById("firstNameError").style.display = "block";
            document.getElementById("firstNameError").innerHTML = '<strong>Enter your first name.</strong>';
            var valid = 0;
        } else {
            document.getElementById("firstNameError").innerHTML = '';
            document.getElementById("firstNameError").style.display = "none";
        }

        if(last_name == ""){
            $("#last_name").css({'border':'1px dotted red'});
            $("#last_name").focus();
            document.getElementById("lastNameError").style.display = "block";
            document.getElementById("lastNameError").innerHTML = '<strong>Enter your last name.</strong>';
            var valid = 0;
        } else {
            document.getElementById("lastNameError").innerHTML = '';
            document.getElementById("lastNameError").style.display = "none";
        }

        if(email == ""){
            $("#email").css({'border':'1px dotted red'});
            $("#email").focus();
            var valid = 0;
        }
        var atposition=email.indexOf("@");  
        var dotposition=email.lastIndexOf(".");  
        if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
            document.getElementById("emailError").style.display = "block";
            document.getElementById("emailError").innerHTML = '<strong>Enter valid email address.</strong>';  
            var valid = 0;  
        } else {
            document.getElementById("emailError").innerHTML = '';
            document.getElementById("emailError").style.display = "none";
        }

        if(mobile == ""){
            $("#mobile").css({'border':'1px dotted red'});
            $("#mobile").focus();
            var valid = 0;
        }
        if(mobile.length < 10 || mobile.length > 11){
            $("#mobile").css({'border':'1px dotted red'});
            $("#mobile").focus();
            document.getElementById("mobileNoError").style.display = "block";
            document.getElementById("mobileNoError").innerHTML = '<strong>Mobile number should be meninum 11 desit.</strong>';

            var valid = 0;
        } else {
            document.getElementById("mobileNoError").innerHTML = '';
            document.getElementById("mobileNoError").style.display = "none";
        }

        if(address_11 == ""){
            $("#address_11").css({'border':'1px dotted red'});
            $("#address_11").focus();
            document.getElementById("address11Error").style.display = "block";
            document.getElementById("address11Error").innerHTML = '<strong>Enter your address.</strong>';
            var valid = 0;
        } else {
            document.getElementById("address11Error").innerHTML = '';
            document.getElementById("address11Error").style.display = "none";
        }

        if(postal_code == ""){
            $("#postal_code").css({'border':'1px dotted red'});
            $("#postal_code").focus();
            var valid = 0;
            document.getElementById("postalCodeError").style.display = "block";
            document.getElementById("postalCodeError").innerHTML = '<strong>Enter your post code.</strong>';
        } else {
            document.getElementById("postalCodeError").innerHTML = '';
            document.getElementById("postalCodeError").style.display = "none";
        }

        if(password == ""){
            $("#password").css({'border':'1px dotted red'});
            $("#password").focus();
            var valid = 0;
            document.getElementById("passwordError").style.display = "block";
            document.getElementById("passwordError").innerHTML = '<strong>Enter your password.</strong>';
        } else {
            document.getElementById("passwordError").innerHTML = '';
            document.getElementById("passwordError").style.display = "none";
        }

        if(confirm_password == ""){
            $("#confirm_password").css({'border':'1px dotted red'});
            $("#confirm_password").focus();
            var valid = 0;
            document.getElementById("confirmPasswordError").style.display = "block";
            document.getElementById("confirmPasswordError").innerHTML = '<strong>Enter your confirm password.</strong>';
        } else {
            document.getElementById("confirmPasswordError").innerHTML = '';
            document.getElementById("confirmPasswordError").style.display = "none";
        }

        if(confirm_password != password){
            $("#password").css({'border':'1px dotted red'});
            $("#password").focus();
            var valid = 0;
            document.getElementById("passwordError").style.display = "block";
            document.getElementById("passwordError").innerHTML = '<strong>Password Mismatched.</strong>';
        } else {
            document.getElementById("passwordError").innerHTML = '';
            document.getElementById("passwordError").style.display = "none";
        }

        if(cityname == ""){
            $("#cityname").css({'border':'1px dotted red'});
            $("#cityname").focus();
            document.getElementById("cityNameError").style.display = "block";
            document.getElementById("cityNameError").innerHTML = '<strong>Enter your town/city.</strong>';
            var valid = 0;
        } else {
            document.getElementById("cityNameError").innerHTML = '';
            document.getElementById("cityNameError").style.display = "none";
        }

        
        
        var checkBox = document.getElementById("billing_address_checkbox");
        if (checkBox.checked == true){
            var del_first_name = $('#del_first_name').val();
            var del_last_name = $('#del_last_name').val();
            var del_email = $('#del_email').val();
            var del_mobile = $('#del_mobile').val();
            var del_address_11 = $('#del_address_11').val();
            var del_address_22 = $('#del_address_22').val();
            var del_postal_code = $('#del_postal_code').val();
            var del_cityname = $('#del_cityname').val();

            if(del_first_name == ""){
                $("#del_first_name").css({'border':'1px dotted red'});
                $("#del_first_name").focus();
                document.getElementById("delfirstNameError").style.display = "block";
                document.getElementById("delfirstNameError").innerHTML = '<strong>Enter your first name.</strong>';
                var valid = 0;
            } else {
                document.getElementById("delfirstNameError").innerHTML = '';
                document.getElementById("delfirstNameError").style.display = "none";
            } 


            if(del_last_name == ""){
                $("#del_last_name").css({'border':'1px dotted red'});
                $("#del_last_name").focus();
                document.getElementById("dellastNameError").style.display = "block";
                document.getElementById("dellastNameError").innerHTML = '<strong>Enter your last name.</strong>';
                var valid = 0;
            } else {
                document.getElementById("dellastNameError").innerHTML = '';
                document.getElementById("dellastNameError").style.display = "none";
            }

            if(del_email == ""){
                $("#del_email").css({'border':'1px dotted red'});
                $("#del_email").focus();
                var valid = 0;
            }
            var atposition=del_email.indexOf("@");  
            var dotposition=del_email.lastIndexOf(".");  
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=del_email.length){  
                document.getElementById("delemailError").style.display = "block";
                document.getElementById("delemailError").innerHTML = '<strong>Enter valid email address.</strong>';  
                var valid = 0;  
            } else {
                document.getElementById("delemailError").innerHTML = '';
                document.getElementById("delemailError").style.display = "none";
            }


            if(del_mobile == ""){
                $("#del_mobile").css({'border':'1px dotted red'});
                $("#del_mobile").focus();
                var valid = 0;
            }

            if(del_mobile.length < 10 || del_mobile.length > 11){
                $("#del_mobile").css({'border':'1px dotted red'});
                $("#del_mobile").focus();
                document.getElementById("delmobileNoError").style.display = "block";
                document.getElementById("delmobileNoError").innerHTML = '<strong>Mobile number should be meninum 11 desit.</strong>';

                var valid = 0;
            } else {
                document.getElementById("delmobileNoError").innerHTML = '';
                document.getElementById("delmobileNoError").style.display = "none";
            }
            if(del_address_11 == ""){
                $("#del_address_11").css({'border':'1px dotted red'});
                $("#del_address_11").focus();
                document.getElementById("deladdress11Error").style.display = "block";
                document.getElementById("deladdress11Error").innerHTML = '<strong>Enter your delivery address.</strong>';
                var valid = 0;
            } else {
                document.getElementById("deladdress11Error").innerHTML = '';
                document.getElementById("deladdress11Error").style.display = "none";
            }

            
            if(del_postal_code == ""){
                $("#del_postal_code").css({'border':'1px dotted red'});
                $("#del_postal_code").focus();
                var valid = 0;
            }
            if(del_postal_code.length < 6 || del_postal_code.length > 6){
                // alert(postal_code.length);
                $("#del_postal_code").css({'border':'1px dotted red'});
                $("#del_postal_code").focus();
                document.getElementById("delpostalCodeError").style.display = "block";
                document.getElementById("delpostalCodeError").innerHTML = '<strong>Postal Code should be 6 desit.</strong>';
                var valid = 0;
            } else {
                document.getElementById("delpostalCodeError").innerHTML = '';
                document.getElementById("delpostalCodeError").style.display = "none";
            }
            if(del_cityname == ""){
                $("#del_cityname").css({'border':'1px dotted red'});
                $("#del_cityname").focus();
                document.getElementById("delcityNameError").style.display = "block";
                document.getElementById("delcityNameError").innerHTML = '<strong>Enter city name.</strong>';
                var valid = 0;
            } else {
                document.getElementById("delcityNameError").innerHTML = '';
                document.getElementById("delcityNameError").style.display = "none";
            }
        }

        if(valid==0){
            return false;
        }else{
            var saveData = $.ajax({
                type: "POST",
                url: "<?php echo base_url('appuser/user_signup'); ?>",
                data:"first_name="+first_name+"&last_name="+last_name+"&email="+email+"&mobile="+mobile+"&address_1="+address_11+"&address_2="+address_22+"&cityname="+cityname+"&postal_code="+postal_code+"&confirm_password="+confirm_password+"&del_first_name="+del_first_name+"&del_last_name="+del_last_name+"&del_email="+del_email+"&del_mobile="+del_mobile+"&del_address_11="+del_address_11+"&del_address_22="+del_address_22+"&del_postal_code="+del_postal_code+"&del_cityname="+del_cityname+"&delivery_add="+checkBox.checked,
                dataType: "text",
                success: function(resultData){ //alert(resultData); return false;
                    if(resultData == "success"){
                      document.getElementById("resSuccessMsg").innerHTML = '<div class="alert alert-success"><strong>User registered successfully, now you can log in.</strong></div>';
                      $('#first_name').val('');
                      $('#last_name').val('');
                      $('#email').val('');
                      $('#mobile').val('');
                      $('#address_11').val('');
                      $('#cityname').val('');
                      $('#postal_code').val('');
                      $('#password').val('');
                      $('#confirm_password').val('');

                      $('#del_first_name').val('');
                      $('#del_last_name').val('');
                      $('#del_email').val('');
                      $('#del_mobile').val('');
                      $('#del_address_11').val('');
                      $('#del_cityname').val('');
                      $('#del_postal_code').val('');

                        // setTimeout(function(){
                        //    window.location.reload(1);
                        // }, 3000);
                    }
                    if(resultData == "error"){
                      document.getElementById("resErrorMsg").innerHTML = '<div class="alert alert-danger"><strong>Failed to register user.</strong></div>';
                    }
                    if(resultData == "duplicate_email"){
                      document.getElementById("resErrorMsg").innerHTML = '<div class="alert alert-danger"><strong>Duplicate user email.</strong></div>';
                    }
                }       
            });
        }
    }
</script>