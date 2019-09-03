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
        <li><a href="#">Contact Us</a></li>
      </ul>
            </div>
        </div>
        <div class="row">
            
            <div class="col-lg-12">
                <div class="row">
                
                <div class="col-lg-4">
                <div class="well"><div style="padding-bottom:5px;">
                <center><h3 style="font-family:pristina;"> Our suggestion</h3></center>
                    </div>
                <p>
                    Your seggestion and comments is very important in our business 
                </p>
               
            </div>
            </div>
            <div class="col-lg-7">
            <div class="well">
                <div style="padding-bottom:15px;">
                    <h3 style="font-family:pristina;">Write Your suggestion below</h3></div> 
                <form method="post" action="">
              <div class="form-group">
                <label class="control-label" for="First Name" style="font-family:pristina;">First Name</label>
                <input type="text" name="firstname" placeholder="First Name" id="input-email" class="form-control" style="text-align:center; font-family:pristina;" required />
              </div>
            <div class="form-group">
                <label class="control-label" for="Last Name" style="font-family:pristina;">Last Name</label>
                <input type="text" name="lastname" placeholder="Last Name" id="input-email" class="form-control" style="text-align:center; font-family:pristina;" required />
              </div>        
              <div class="form-group">
                <label class="control-label" for="E-mail" style="font-family:pristina;">E-mail</label>
                <input type="text" name="email" placeholder="Email" class="form-control" style="text-align:center; font-family:pristina;" required />
                </div>
                <div class="form-group">
                <label class="control-label" for="Suggestion" style="font-family:pristina;">Suggestion</label>
                    <textarea name="suggestion" class="form-control" > </textarea>   
                
              </div>    
              <input type="submit" name="sub_sugg" value="Submit" class="btn btn-lg " style="text-align:center; font-family:pristina; width:50%; color:white; background-color:#303030;" />
                    <?php 
                  include'db_connection/db_connection.php';
                  include'admin/action.php'; 
                  ?>
                          </form>
                </div>
            </div>
        </div>
                </div>
            </div>
        <div class="col-lg-12">
                <div class=""><div style="padding-bottom:5px;">
                <center><h3> Our Team</h3></center>
                    </div>
                    <div class="row">
                    <div class="col-lg-3">
                    <img src="images/image1.JPG" class="img-circle" alt="Cinque Terre" width="150" height="140">
                        <div>
                            <h4>customer's service manager</h4>
                            <p>
                            Name: hakiza emmy    
                            Email:emmy@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <img src="images/image2.JPG" class="img-circle" alt="Cinque Terre" width="150" height="140">
                        <div>
                            <h4>customer's service manager</h4>
                            <p>
                            Name: hakiza emmy    
                            Email:emmy@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <img src="images/image3.JPG" class="img-circle" alt="Cinque Terre" width="150" height="140">
                        <div>
                            <h4>customer's service manager</h4>
                            <p>
                            Name: hakiza emmy    
                            Email:emmy@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <img src="images/image4.JPG" class="img-circle" alt="Cinque Terre" width="150" height="140">
                        <div>
                            <h4>customer's service manager</h4>
                            <p>
                            Name: hakiza emmy    
                            Email:emmy@gmail.com
                            </p>
                        </div>
                    </div>
                
            </div>
            </div>
            </div>    
        </div>
    </div> 
    
    <!-- footer start-->
   <?php
include'public/includes/footer.php';
?>