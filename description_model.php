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
  
<div class="container" style="height:350px;">
    
<?php
    $get_pro_id = $_GET['id'];
    $query_dispaly = mysqli_query($conn, "SELECT * FROM products WHERE prodid = '$get_pro_id'") or die("error");
    if(mysqli_num_rows($query_dispaly) > 0)
    {
        $result_pro = mysqli_fetch_assoc($query_dispaly);
     ?>  
    <form method="post" action="">
    <div class="row">
        
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-6 ">
    <img src="admin/<?php echo $result_pro['product_image']; ?>" alt=""  title="iPhone" class=" image img-responsive img-rounded descreption_image"  />
        </div>
                <div class="col-md-3">
                    <p><?php echo $result_pro['product_name']; ?></p>
                    <p><?php echo $result_pro['product_origin']; ?></p>
                    <p><?php echo $result_pro['product_description']; ?></p>
                </div>
                <div class="col-md-3"></div>
        </div>
        </div>
        
    
    </div>
    </form>
    <?php
    }
    ?>
</div>

  <?php
include'public/includes/footer.php';
?>