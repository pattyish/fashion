<?php
//head with link
include'public/includes/head_link.php';

//head with top and navbar

include'public/includes/head_nav.php';

//image slide part
//include'public/includes/image_slider.php';

//database connection
include'db_connection/db_connection.php';

?>
    <div class="clearfix"></div>
    
    <!-- swipper images-->
    <!-- end of swipper images-->
       
    
     <div class="container">
        <div class="row">
            
           
            <div class="col-lg-12">
           

             <hr style="background-color:wheat;">   
<a href="#"><h4>Women's fashion</h4></a>
                <hr style="background-color:wheat;">
        <div class="row">
        <!-----------------------------------> 
            <?php
            $c = 2;
            $qry_product_wm =  "SELECT * FROM products WHERE cat_id = '$c' order by product_price desc"; 
            $qry_product_wm_exc = mysqli_query($conn, $qry_product_wm) or die("error");
        while($pro_rows_wm = mysqli_fetch_assoc($qry_product_wm_exc))
        {      
            $id = $pro_rows_wm['prodid'];
            ?>
       <div class="col-lg-3 col-md-3 col-sm-4">
    <div class="product-thumb" style="padding:10px;">
        <div class="alert alert-success" style="background:#EEEEEE;"><div class="font1" style="padding-left:px;">
            <center> <h4><a href="#"><?php echo $pro_rows_wm['product_name']; ?></a></h4></center>
                                            
         </div></div>
                                        <hr>
      <div class="image"><a href="description_model.php?id=<?php echo $pro_rows_wm['prodid']; ?>"><img src="admin/<?php echo $pro_rows_wm['product_image']; ?>" alt=""  title="iPhone" class=" image img-responsive"  /></a></div>
      <div class="caption" style="padding-top:20px;">
        
       
                    <p  style="padding-left:20px; padding-top:10px;">
                                            <a> Price:&nbsp;<?php echo $pro_rows_wm['product_price']; ?>&nbsp;Rwf </a>
                                        </p>
                                     	<div style="padding-left:0px;">									
                                        <a href="#add"   data-toggle="modal" class="btn btn-success" style="width:100%;"><i class="icon-shopping-cart icon-large" ></i>&nbsp;Add to Cart</a>
										
                                            <span class="label label-important">Out of Stock</span></div>
    </div>
  </div>   
  </div>   
            <?php }?>
       <!-- product end--->     
        
        
    
        <!----------------------------------->    

     
        </div>                 
                </div>
            </div>
        </div>
  
    
    <!-- end of wemen's fashion--->  
    
    
    
   <?php
include'public/includes/footer.php';
?>