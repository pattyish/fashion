<?php
//head with link
include'public/includes/head_link.php';

//head with top and navbar

include'public/includes/head_nav.php';

?>
    <div class="clearfix"> </div> 
    <div class="container" style="padding-bottom:80px;">
        <div class="row">
            <div class="col-sm-12">
        <ul class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i></a></li>
        <li><a href="login_cust.php">Account</a></li>
        <li><a href="#">Register</a></li>
      </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="well"><div style="padding-bottom:5px;">
                <center><h3 style="font-family:pristina;"> already Customer</h3></center>
                    </div>
                <p>
                    Yuo can use link below to login in your acccount, you will be able to move throught the checkout process faster.
                </p>
                <a href="login_cust.php" style="font-family:pristina;" class="btn btn-primary">My Account</a>
            </div>
            </div>
            <div class="col-lg-7">
            <div class="well">
                <div style="padding-bottom:15px;">
                    <h2 style="font-family:pristina;">New customer registration</h2></div> 
                <form method="post" action="">
                    <div class="form-group">
                <label class="control-label" for="input-email" style="font-family:pristina;">First Name</label>
                <input type="text" name="frname" placeholder="First Name" id="input-email" class="form-control" required />
              </div>
                    <div class="form-group">
                <label class="control-label" for="input-email" style="font-family:pristina;" >Last Name</label>
                <input type="text" name="lstname" placeholder="Last Name" id="input-email" class="form-control" required />
              </div>
                <div class="control-group">
      <label class="control-label" for="subcategory" style="font-family:pristina;">Gender:</label>                              
                                    <div class="controls">
      <select type="text" name="gender" class = "form-control" placeholder="" style="text-align:;" required >
                                            <option> Select Gender </option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div> 
                <div class="form-group">
                <label class="control-label" for="input-email" style="font-family:pristina;">Phone Number</label>
                <input type="text" name="phone" placeholder="Phone number" id="input-email" class="form-control" required />
              </div>    
              <div class="form-group">
                <label class="control-label" for="input-email" style="font-family:pristina;">E-Mail Address</label>
                <input type="text" name="mailing" placeholder="E-Mail Address" id="input-email" class="form-control" required />
              </div>
              <div class="form-group">
                <label class="control-label" for="username" style="font-family:pristina;">UserName</label>
                <input type="text" name="username" placeholder="Username" id="input-password" class="form-control" required />
                
                <div class="form-group">
                <label class="control-label" for="Password" style="font-family:pristina;">Password</label>
                <input type="Password" name="pwrd" placeholder="Password" id="input-email" class="form-control" required />
              </div>   
                <div class="form-group">
                <label class="control-label" for="Password" style="font-family:pristina;">Re-type password</label>
                <input type="Password" name="conf_pword" placeholder="Re-type password" id="input-email" class="form-control" required />
              </div>    
              <input type="submit" name="register_customer" value="Register" class="btn btn-lg" style="text-align:center; font-family:pristina; width:50%; color:white; background-color:#303030;" />
                  <?php 
                  include'db_connection/db_connection.php';
                  include'admin/action.php'; 
                  ?>
                  
                </div>
                    </form>
            </div>
        </div>
    </div> 
    </div> 
    
    <!-- footer start-->
   <?php
include'public/includes/footer.php';
?>