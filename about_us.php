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
        <li><a href="#">About Us</a></li>
      </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 about_us">
                <div class=""><div style="padding-bottom:5px;">
                <center><h3 style="font-size:40px; font-family:pristina;"> About us</h3></center>
                    </div>
            </div>
                <div>
               <a href="#" class="accordion" style="font-family:pristina; font-size:25px;"><i class=""></i> Our Company </a>
                        <div class="panel" style=" font-style:italic;">
                         <div class="nav" style="color:black;">
                             <p> our fashion solution is stared in 2000 with different type of clothes style. fashoin solution has store in kigali nyarugenge.</p>
                            </div>
                        </div> 
            </div>
                <div>
               <a href="#" class="accordion" style="font-family:pristina; font-size:25px;"><i class=""></i> Mission </a>
                        <div class="panel" style=" font-style:italic;">
                         <div class="nav" style="color:black;">
                             <p>our misson is to give our customers very good quality of products</p>
                            </div>
                        </div> 
            </div>
                <div>
               <a href="#" class="accordion" style="font-family:pristina; font-size:25px;"><i class=""></i>Vision </a>
                        <div class="panel" style=" font-style:italic;">
                         <div class="nav" style="color:black;">
                             <p>our vision is to serves all people around the world in 2020</p>
                            </div>
                        </div> 
            </div>
                <div>
               <a href="#" class="accordion" style="font-family:pristina; font-size:25px;"><i class=""></i> Our Developers </a>
                        <div class="panel" style=" font-style:italic;">
                         <div class="nav" style="color:black;">
                             <p> we have skilled developer in help ou our customers</p>
                            </div>
                        </div> 
            </div>
            </div>
           
        </div>
    </div> 
    
    <!-- footer start-->
   <?php
include'public/includes/footer.php';
?>

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