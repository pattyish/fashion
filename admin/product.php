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
                <div class="col-lg-10" style="background:white; height:550px;  ">
                    <div class="row" style="overflow-y:scroll; height:575px;">
                        <div class="col-lg-12">
                            <div style="margin-left:23px; padding-top:25px;">
                                <div class="col-md-12">
                        <h1 class="page-header">
                           
							 <button  type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal" id="myBtn" >
                              Add Product
                            </button>
                                    </h1>
                                <!-- Modal -->
          <?php include'add_product_model.php'; ?>
          <?php include'action.php'; ?>
     <!-- end of Modal -->     
                            <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;All Products</strong>
                                </div>
                 
                            </div>
                        </div>
                       <div class="col-lg-12">
                           <div style="margin-left:23px;">
                               
                               <div class="row">
                                   <div class="col-md-6">
                                   <div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label>&nbsp;records per page</div>
                                   </div>
                                   <div class="col-md-6 search_box_admin">
                                       <form action="action.php" method="post">
                                           <input type="text" name="search" placeholder="********* search **********" id="search_box_admin"><button type="submit" name="submit_search" id="search_button"><i class="fa fa-search"></i></button>
                                       </form>
                                   </div>
                               </div>
                                       <div class="table-responsive">
  <table class="table table-hover table-striped table-bordered">
    <thead>
      <tr>
        
        <th> Name</th>
        <th>origin</th>
        <th>Category</th>
        <th>sub_Category</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $query = "SELECT * FROM products LIMIT 10";
        $query_exec = mysqli_query($conn, $query);
        
         while($results1 = mysqli_fetch_array($query_exec))
         { 
             $id = $results1['prodid']; 
             ?>
        <tr>
            <td><?php echo $results1['product_name']; ?></td>
            <td><?php echo $results1['product_origin']; ?></td>
            <td><?php $value = $results1['cat_id']; 
                 $qry1 = mysqli_query($conn, "SELECT * FROM categories_table WHERE cat_id = '$value'");
              if($results2 = mysqli_fetch_array($qry1))
              {
               echo $results2['category_name'];   
              }
                ?></td>
            <td>
            <?php $value2 = $results1['sub_catid']; 
                 $qry2 = mysqli_query($conn, "SELECT * FROM subcategory WHERE sub_catid = '$value2'");
              if($results3 = mysqli_fetch_array($qry2))
              {
               echo $results3['sub_cat_name'];   
              }
                ?>
            </td>
            <td><?php echo $results1['product_description']; ?></td>
            <td><?php echo $results1['quantity']; ?></td>
            <td><?php echo $results1['product_price']; ?></td>
            <td><img src="<?php echo $results1['product_image']; ?>" height="40" width="50" ></td>
            <td width="149">
    <a href="#" role="button"  data-target = "#delete_product<?php echo $id;?>"data-toggle="modal" class="btn btn-danger"><i class="icon-trash icon-large"></i>Delete</a>
        <?php include'delete_product_model.php'; ?>        
    <a href="#edit_product_model?id =<?php echo $id;?>" class="btn btn-success" data-target = "#edit_product_model<?php echo $id;?>"data-toggle="modal"><i class="icon-pencil icon-large"></i>&nbsp;Edit</a>
                <?php include'edit_product_model.php'; ?> 
                                            </td>
        </tr>
             <?php
         }
       
                ?>    
     
        
    </tbody>
  </table>
  </div> 
 
                               <div class="row">
                                   <div class="col-lg-12">
                                       <hr style="background-color:wheat;">
                                       </div>
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <center><p>Designed By Group 3 &nbsp;&nbsp;Fashion SL &copy; 2018</p></center>
                     
                </div>
                <div class="col-lg-3"></div>
            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
            
        
    </body>
</html>