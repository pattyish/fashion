<?php
if(isset($_POST['save_product']))
{
 $name =  $_POST['product_name'];   
 $description = $_POST['product_description'];   
 $category = $_POST['category'];   
 $sub_category = $_POST['sub_category'];   
 $origin = $_POST['product_origin'];   
 $price = $_POST['product_price'];   
 $quantity = $_POST['product_quant']; 
  // images
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png","jfif");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 20971520){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
          
         //echo "Success";
      }else{
         //print_r($errors);
      }
   }
// end of image codes
    if(!empty($name) and !empty($origin) and !empty($price) and !empty($quantity) and !empty($description))
    {
       $folder = "upload/" . $_FILES["image"]["name"];
        //if($category != 0 and $sub_category !=0){
    $conn = mysqli_connect("localhost", "root", "", "fashion_solution");
    $qry_pro ="INSERT INTO products(product_name,product_origin,quantity,product_price, cat_id,sub_catid,product_image,product_description) VALUES ('$name', '$origin', '$quantity','$price','$category','$sub_category','$folder','$description')";
       $qry_pro_exec = mysqli_query($conn, $qry_pro) or die("error".mysqli_error());
        
        if($qry_pro_exec)
        {
         echo "<script>alert('product added successful');</script>";
            echo"<script>history.back()</script>";
        }
    else
    {
         echo "<script>alert('product fail to be added');</script>";
    }
//}
//else
//{
 //echo "<script>alert('select category and sub category first!!');</script>";   
//}
        }
    else
    {
     echo "<script>alert('please fill all field');</script>";   
    }
}
 

if(isset($_POST['save_user']))
{
  $fname = $_POST['firstname'];  
  $lname = $_POST['lstname'];  
  $gender = $_POST['gender'];  
  $email = $_POST['email'];  
  $phone = $_POST['phone'];  
  $password = $_POST['pssw']; 
    if(!empty($fname) and !empty($lname) and !empty($password) and !empty($email) and !empty($phone)){
        //if($gender != null)
        //{
    $query_user = mysqli_query($conn, "INSERT INTO users_table(firstname,lastname,gender,email,phone,password) VALUES('$fname','$lname','$gender','$email','$phone','$password')");
        /*}
    else{
       echo "<script>alert('please select gender');</script>";  
    }*/
            
    
}
    else
    {
      echo "<script>alert('please fill all field requid!!');</script>";  
    }
}

// user sign up
if(isset($_POST['register_customer']))
{
  $fname = $_POST['frname'];  
  $lname = $_POST['lstname'];  
  $gender = $_POST['gender'];  
  $email = $_POST['mailing'];  
  $phone = $_POST['phone'];  
  $username = $_POST['username'];  
  $password = $_POST['pwrd'];  
  $conf_password = $_POST['conf_pword'];
   
    if(!empty($fname ) and !empty($lname) and !empty($email) and !empty($phone) and !empty($username) and !empty($password) and !empty($conf_password) and !empty($gender))
    {
     if($password == $conf_password)
     {
     $qry_check_email = mysqli_query($conn, "SELECT * FROM customers_table WHERE email ='$email'");
         
    $qry_check_username = mysqli_query($conn, "SELECT * FROM customers_table WHERE username ='$username'" );     
    if(mysqli_num_rows($qry_check_email) > 0 )
        {
    echo "<script>alert('this email is already registered');</script>";
    }
        else if( mysqli_num_rows($qry_check_username) > 0)
         {
                 
               echo "<script>alert('this username is already registered');</script>"; 
           
         }
         else{
         
    $qry_cust ="INSERT INTO customers_table(firstname,lastname,gender,email, phone,username,password) VALUES ('$fname', '$lname', '$gender','$email','$phone','$username','$password')";
       $qry_cust_exec = mysqli_query($conn, $qry_cust) or die("error".mysqli_error());
         if($qry_cust_exec)
         {
           echo "<script>alert('account created successfull!!');</script>";
              header("location:login_cust.php");
         }
     }
     }
        else{
          echo "<script>alert('password and confirm password must be the same');</script>";  
        }
    }
    else
    {
         echo "<script>alert('fill all field');</script>";
    }
    
}

// contact us

if(isset($_POST['sub_sugg']))
{
 $firstname = $_POST['firstname'];  
  $lastname = $_POST['lastname'];  
  $email = $_POST['email'];
  $suggestion = $_POST['suggestion'];
   
    if(!empty($firstname) and !empty($lastname) and !empty($email) and !empty($suggestion))
    {
     
    $qry_sugg ="INSERT INTO suggestions_table(firstname, lastname,email,suggestion) VALUES ('$firstname', '$lastname', '$email','$suggestion')";
       $qry_sugg_exec = mysqli_query($conn, $qry_sugg) or die("error".mysqli_error());
        if($qry_sugg_exec)
        {
          echo "<script>alert('message sent successful!!');</script>";
            header("location:contact_us.php");
            
           
        }
}
    else
    {
         echo "<script>alert('do not skip any field');</script>";
    }
}

// edit product
if(isset($_POST['edit_product']))
{
  $get_edit_id = $_GET['id'];
 $name_edit =  $_POST['edited_name'];   
 $description_edit = $_POST['edited_description'];   
 $category_edit = $_POST['edited_category'];   
 $sub_category_edit = $_POST['edited_sub_category'];   
 $origin_edit = $_POST['edited_product_origin'];   
 $price_edit = $_POST['edited_product_price'];   
 $quantity_edit = $_POST['edited_quant']; 
  // images
   if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 20971520){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"upload/".$file_name);
         //echo "Success";
      }else{
         //print_r($errors);
      }
   }

    if(!empty($name_edit) and !empty($origin_edit) and !empty($price_edit) and !empty($quantity_edit) and !empty($description_edit))
    {
        
    $conn = mysqli_connect("localhost", "root", "", "fashion_solution");
    $qry_pro_update ="UPDATE products SET product_name = '$name_edit',product_origin ='$origin_edit' ,quantity ='$quantity_edit',product_price ='$price_edit', cat_id ='$category_edit',sub_catid ='$sub_category_edit',product_description ='$description_edit' WHERE prodid ='$get_edit_id'";
       $qry_pro_update_exec = mysqli_query($conn, $qry_pro_update) or die("error".mysqli_error());
        
        if($qry_pro_update_exec)
        {
         echo "<script>alert('product updated successful');</script>";
           
        }
    else
    {
         echo "<script>alert('product fail to be updated');</script>";
    }

        }
    else
    {
     echo "<script>alert('please fill all field');</script>";   
    }
    
    
    
}


?>  