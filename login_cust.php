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
        <li><a href="#">Login</a></li>
      </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="well"><div style="padding-bottom:5px;">
                <center><h3 style="font-family:pristina;"> New Customers</h3></center>
                    </div>
                <p>
                    By creating an account with our store, you will be able to move throught the checkout process faster.
                </p>
                <a href="register.php" style="font-family:pristina;" class="btn btn-primary">Create Account</a>
            </div>
            </div>
            <div class="col-lg-5">
            <div class="well">
                <div style="padding-bottom:15px;">
                    <h2 style="font-family:pristina;">Customer Login</h2></div> 
                <form method="post" action="">
              <div class="form-group">
                <label class="control-label" for="input-email" style="font-family:pristina;">E-Mail Address</label>
                <input type="text" name="mailing" placeholder="E-Mail Address" id="input-email" class="form-control" required />
              </div>
              <div class="form-group">
                <label class="control-label" for="input-password" style="font-family:pristina;">Password</label>
                <input type="password" name="password" placeholder="Password" id="input-password" class="form-control" required />
                <a href="?p=forgot_pswd">Forgotten Password</a></div>
              <input type="submit" name="login_user"style="font-family:pristina;" value="Login" class="btn btn-lg btn-primary" />
                          </form>
          
                
                <?php
                    if(isset($_POST['login_user']))
                {
                 $email = $_POST['mailing'];   
                 $password = $_POST['password']; 
                    if(!empty($email) and !empty($password))
                    {
                    $qryu = "SELECT * FROM customers_table WHERE email ='$email' AND password ='$password'"; 
                     $queryu = mysqli_query($conn, $qryu) or die("error");
                     $resultsu = mysqli_fetch_assoc($queryu);    
                    if($resultsu){
                                                       
                       $_SESSION['cust_id'] = $resultsu['cust_id']; 
                       $_SESSION['firstname'] = $resultsu['firstname']; 
                       $_SESSION['lastname'] = $resultsu['lastname']; 
                       $_SESSION['gender'] = $resultsu['gender']; 
                       $_SESSION['email'] = $resultsu['email']; 
                           
                       header("location: index.php"); 
                    }
                        else{
                            echo "<script>alert('incorrect credentail')</script>";
                        }
                    }
                        
                    }
                    
                    ?>
                
                
                
                
                </div>
            </div>
        </div>
    </div> 
    
    <!-- footer start-->
   <?php
include'public/includes/footer.php';
?>