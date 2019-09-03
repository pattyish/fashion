        <div class="container-fluid admin_nav">
            <div class="row">
                <div class="col-lg-12 admin_nav_headle">
                    <div class="col-lg-4">
                        <h1 style="font-family:pristina;"><strong>Fashion Solution</strong></h1>
                    </div>
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4 admin_nav_headrig ">
                        <h3 style="font-family:pristina;"> Welcome : <?php echo $_SESSION['lastname'];?>&nbsp;&nbsp;<?php echo $_SESSION['firstname']; ?></h3>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="container-fluid" style="background-color:#303030;">
            <div class="row">
                <div class="col-lg-2" style=" height:300px;">
                    <div class="left_side_menu">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="dashboard.php" ><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="product.php"><i class="fa fa-gear"></i> Products</a>
                    </li>
					<li>
                        <a href="customers.php"><i class="fa fa-users"></i> Customers</a>
                    </li>
					<li>
                        <a href="message.php"><i class="fa fa-envelope"></i> Messages</a>
                    </li>
                    <li>
                        <a href="orders.php"><i class="fa fa-truck"></i> Orders</a>
                    </li>
                    <li>
                        <a href="comfirm_orders.php"><i class="fa fa-truck"></i> Comfirmed Order</a>
                    </li>
					<li>
                        <a href="users.php"><i class="fa fa-user"></i> User </a>
                    </li>
                    <li>
                        <a href="#" class="accordion" style="background:#303030;"><i class="fa fa-user"></i> Setting </a>
                        <div class="panel" style="background:#303030; color:white; font-style:italic;">
                         <div class="nav" style="color:white;">
                             <a href="#" style="">Change Password</a>
                            </div>
                        </div>
                    </li>
					   <li>
                        <a href="logout.php"><i class="fa fa-user"></i> Log out </a>
                    </li>
                </ul>

                </div>
                </div>
                <script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        this.classList.toggle("active");
        this.nextElementSibling.classList.toggle("show");
  }
}
</script>