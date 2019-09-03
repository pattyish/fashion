<body>
<nav id="top" class=" " >
  <div class="container">
    <div id="top-links" class="nav pull-right">
      <ul class="list-inline">
          <li><a href="#" title="Contact Us"><i class="fa fa-phone hidden-xs hidden-sm  allfafa"></i> <span class="hidden-xs hidden-sm">&nbsp;+250 788 307 084</span></a></li>
          <li><a href="login_cust.php" title="Login"><i class="fa fa-user allfafa"></i> <span class="">&nbsp;My Account</span></a></li>
        <li><a href="register.php" title="Register"><i class="fa fa-user shopping_fafa "></i> <span class="">&nbsp;Register</span></a></li>
          <li class="hidden-lg hidden-md"><a href="shopping_cart_page.php" title="Cart"><i class="fa fa-shopping-cart allfafa"></i> <span class="">&nbsp;<font size="3" class="hidden-xs">Shopping List &nbsp;</font><sup><font style="italic" color="#2e6da4" size="2">(10)</font></sup></span></a></li>
      </ul>
    </div>
  </div>
</nav>
    <div class="clearfix"> </div>
    <div class="container">
        <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4 logo_space" >
					<h1><a href="index.html"><img src="images/fslogo.png" height="70" alt="Logo" class="logo"></a></h1>	
				</div>
             <div class="col-lg-6 col-md-5 col-sm-5 search_div">
					<div id="search" class="input-group">
  <input type="text" name="search" value="" placeholder="---------- Search ----------" class="form-control input-lg search_box" />
  <span class="input-group-btn">
    <button type="button" class="btn btn-default btn-lg search_button"><i class="fa fa-search"></i></button>
  </span>
</div>	
				</div>
             <div class="col-lg-3 col-md-3 col-sm-3 shopping_div">
                 <div class="list_shop hidden-xs hidden-sm" style="padding-top:15px; padding-left:30px;" id="shopping_link">
                     <a href="shopping_cart_page.php" title="Cart" id="shopping_link" style="font-family:pristina;"><img src="images/cart1.png" width="40" height="40">&nbsp;&nbsp;<font size="4"><span class="hidden-md">Shoppin Cart</span></font> &nbsp;<sup><font style="italic" color="#2e6da4" size="4">(10)</font></sup></a>
                 </div>  
        </div>
    </div>
    </div>
        <div class="clearfix"> </div>
     <div class="container">
      <nav class="navbar navbar-inverse" style="background-color:#303030;">
  <div class="container-fluid">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>    
      <a class="navbar-brand" href="#" style="font-size:27px;font-family:pristina; font-style:italic; font-weight:bold;">Fashion <span>Solution</span></a>
    </div>
      <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Women's fashion<span class="caret"></span></a>
        <ul class="dropdown-menu">
           
            <?php
            include'db_connection/db_connection.php';
            $query = "SELECT * FROM subcategory";
            $qry = mysqli_query($conn, $query);
            while($rows = mysqli_fetch_assoc($qry))
            {
                $id = $rows['sub_catid'];
            ?>
           <li><a href="all_womens_fashion.php?womensfashion=<?php echo $id; ?>"><?php echo $rows['sub_cat_name']; ?></a></li>
            <?php
            }
            ?>
          
           
        </ul>
        
        </li>
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Men's fashion<span class="caret"></span></a>
        <ul class="dropdown-menu">
           
            <?php
            include'db_connection/db_connection.php';
            $query = "SELECT * FROM subcategory";
            $qry = mysqli_query($conn, $query);
            while($rows = mysqli_fetch_assoc($qry))
            {
                $id = $rows['sub_catid'];
                if($id != 4)
                {
            ?>
           <li><a href="all_mens_fashion.php?mensfashion=<?php echo $rows['sub_catid']; ?>"><?php echo $rows['sub_cat_name']; ?></a></li>
            <?php
                }
            }
            ?>
          
           
        </ul>
        
        </li>
       <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Categories
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="womens.php">Women's Fashion</a></li>
          <li><a href="mens.php">Men's Fashion</a></li>
 
        </ul>
      </li>
      <li><a href="about_us.php">About Us</a></li>
      <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
      
      <ul class="nav navbar-nav navbar-right">
      <li>
          <a href="login_cust.php" class="btn"><span class="glyphicon glyphicon-shopping-cart"></span> Buy Now&nbsp;</a>
          </li>
    </ul>
      </div>
      <div class="container">
          <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
      </div>
  </div>
</nav>
    </div>