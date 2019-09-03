<?php
//session
include'db_connection/session.php';
//head with link
include'public/includes/head_link.php';

//head with top and navbar

include'public/includes/head_nav.php';



//database connection
include'db_connection/db_connection.php';

?>
    <div class="clearfix"></div>

<?php
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["shopping_cart"])) {
	foreach($_SESSION["shopping_cart"] as $key => $value) {
		if($_POST["code"] == $key){
		unset($_SESSION["shopping_cart"][$key]);
		$status = "<div class='box' style='color:red;'>
		Product is removed from your cart!</div>";
		}
		if(empty($_SESSION["shopping_cart"]))
		unset($_SESSION["shopping_cart"]);
			}		
		}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["shopping_cart"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
    }
}
  	
}
?>
<div class="container">
<div class="row">
    <div class="col-lg-12">
    <div class="alert alert-danger" style="font-family:pristina; font-size:20px;"><center>
        in order to buy any this you must have an account &nbsp; <a href="login_cust.php">Sign in please</a>
                </center></div>
    <div class="table-responsive">
        <?php
if(isset($_SESSION["shopping_cart"])){
    $total_price = 0;
?>	
  <table class="table table-hover table-striped table-bordered">
      
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Origin</th>           
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Total Price</th>
        <th>Action</th>
      </tr>
    </thead>
      <?php		
foreach ($_SESSION["shopping_cart"] as $product){
?>
      <tbody>
      <tr>
<td><img src='<?php echo $product["image"]; ?>' width="50" height="40" /></td>
<td><?php echo $product["name"]; ?></td>
<td><?php echo $product["origin"]; ?></td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onchange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?> value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?> value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?> value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?> value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?> value="5">5</option>
</select>
</form>
</td>
<td><?php echo "rwf".$product["price"]; ?></td>
<td><?php echo "rwf".$product["price"]*$product["quantity"]; ?></td>
<td><form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
          </tr>
          <?php
$total_price += ($product["price"]*$product["quantity"]);
}
?>
          <tr>
<td colspan="7" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>
      </tbody>
        </table>
    <?php

}
        else{
	echo "<h3>Your cart is empty!</h3>";
	}  
        ?>
        </div>

    </div>
    </div>



</div>
    
    
   <?php
include'public/includes/footer.php';
?>