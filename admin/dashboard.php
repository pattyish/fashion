<?php
include'../db_connection/session.php';
if(!isset($_SESSION['user_id']))
{
	echo '<script>window.location.href = "index.php";</script>';
}
include'../db_connection/db_connection.php';
include'head_link_admin.php';
include'public/includes/top_left_nav.php';
?>
                <div class="col-lg-10 products_area" style="background:white; height:556px; ">
                    <div class="row">
                        <div class="col-lg-12" style="height:100px;">
                            <div style="margin-left:23px; padding-top:25px;">
                            <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Welcome To Your Dashboard</strong>
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-12">
                           <div style="margin-left:23px;">
                           <div class="row">
                           <div class="col-md-3 col-xs-6">
                               <div class="dashboard_box1">
                                   <h4><i class="fa fa-users"></i>&nbsp;Customers</h4>
                                   <p>100</p>
                                   <div class="icon">
                                       <a href="customers.php">more info</a>
                                   </div>
                                   
                               </div>
                               </div>
                           <div class="col-md-3 col-xs-6">
                               <div class="dashboard_box1">
                                   <h4><i class="fa fa-truck"></i>&nbsp;Orders</h4>
                                   <p>100</p>
                                   <div class="icon">
                                       <a href="orders.php">more info</a>
                                   </div>
                                   
                               </div>
                               
                               </div>
                           <div class="col-md-3 col-xs-6">
                               
                               <div class="dashboard_box1">
                                   <h4><i class="fa fa-envelope"></i>&nbsp; Messages</h4>
                                   <p>100</p>
                                   <div class="icon">
                                       <a href="message.php">more info</a>
                                   </div>
                                   
                               </div>
                               </div>
                           <div class="col-md-3 col-xs-6">
                               
                               <div class="dashboard_box1">
                                   <h4><i class="fa fa-truck"></i>&nbsp; Products delivered</h4>
                                   <p>
                                   100
                                   </p>
                                   <div class="icon">
                                       <a href="comfirm_orders.php">more info</a>
                                   </div>
                                   
                               </div>
                               </div>
                               
                           </div>
                           <div class="row" style="height:20px;"></div>
                           <div class="row">
                           <div class="col-md-3 col-xs-6">
                               <div class="dashboard_box1">
                                   <h4><i class="fa fa-gear"></i>&nbsp;products stock</h4>
                                   <p>
                                   <?php
                                      $query = mysqli_query($conn, "SELECT * FROM products"); 
                                       $count = mysqli_num_rows($query);
                                        echo $count;
                                       ?>
                                   </p>
                                   <div class="icon">
                                       <a href="product.php">more info</a>
                                   </div>
                                   
                               </div>
                               </div>
                           </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
            <div class="container-fluid footer_admin">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <center><p>Designed By Group 3 &nbsp;&nbsp;Fashion SL &copy; 2018</p></center>
                     <hr style="background-color:wheat;">
                </div>
                <div class="col-lg-3"></div>
            </div>
        
    </body>
</html>