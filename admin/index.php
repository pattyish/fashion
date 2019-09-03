<?php
include'../db_connection/session.php';
include'../db_connection/db_connection.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>fashion solution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../images/cart.png" rel="icon" />
    <link rel="stylesheet" href="../bootstrap/bootstrap-3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/font-awesome-4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../styles/css_styles.css">
     <script src="../bootstrap/bootstrap-3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="../jquery/jquery-3.3.1.js"></script>
    <script src="../bootstrap/jquery.min.js"></script>
   
</head>
    <body>
        <div class="container-fluid" style="background-color:rgb(30, 30, 30, 0.5); height:633px;">
            <div class="container">
                <div class="row">
                   <div class="col-md-3"></div>
                    <div class="col-md-5">
                        
                    <div class="login_form" style="padding:20px 30px;">
                        <center><h3><i><strong>Login</strong></i></h3></center>
                        <hr>
          <form method="post" action="#">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" placeholder="Enter email" style="text-align:center; ">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter password" style="text-align:center;">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block" name="admin_login" ><span class="glyphicon glyphicon-off"></span> Login</button>
          <p>Forgot <a href="#">Password?</a></p>
          </form>
        </div>
        </div>
                    <?php
                    
                    if(isset($_POST['admin_login']))
                    {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if(!empty($username) and !empty($password))
                    {
                    $qry = "SELECT * FROM users_table WHERE email ='$username' AND password ='$password'"; 
                     $query = mysqli_query($conn, $qry) or die("error");
                     $results = mysqli_fetch_assoc($query);    
                    if($results){
                                                       
                       $_SESSION['user_id'] = $results['user_id']; 
                       $_SESSION['firstname'] = $results['firstname']; 
                       $_SESSION['lastname'] = $results['lastname']; 
                       $_SESSION['gender'] = $results['gender']; 
                       $_SESSION['email'] = $results['email']; 
                       $_SESSION['username'] = $results['username'];
                           
                       header("location: dashboard.php"); 
                    }
                        else{
                            echo "<script>alert('incorrect credentail')</script>";
                        }
                    }
                        else{
                           echo "<script>alert('fill all field please!')</script>"; 
                        }
                    }
                    
                    ?>
            <div class="col-md-4"></div>        
                </div>
            </div>
        </div>
    </body>
</html>