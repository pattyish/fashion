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
                <div class="col-lg-10" style="background:white; height:556px; ">
                    <div class="row">
                        <div class="col-lg-12" style="height:100px;">
                            <div style="margin-left:23px; padding-top:25px;">
                                <div class="col-md-12">
                    
                            <div class="alert alert-info">
                                    <strong><i class="icon-user icon-large"></i>&nbsp;Ordered Products</strong>
                                </div>
                                    <ul class="breadcrumb">
                                     
										<li>Orders<span class="divider">/</span></li>				
										<li class="active">Pending Orders<span class="divider">/</span></li>
										<li><a href="#">Delivered</a> <span class="divider">/</span></li>
									
									</ul>
                            </div>
                        </div>
                       <div class="col-lg-12">
                           <div style="margin-left:23px;">
                               <div class="row">
                                   <div class="col-md-6">
                                   <div class="dataTables_length" id="dataTables-example_length"><label><select name="dataTables-example_length" aria-controls="dataTables-example" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label>&nbsp;records per page</div>
                                   </div>
                                   <div class="col-md-6 search_box_admin">
                                       <form>
                                           <input type="text" name="search" placeholder="********* search **********" id="search_box_admin"><button type="submit" name="submit_search" id="search_button"><i class="fa fa-search"></i></button>
                                       </form>
                                   </div>
                               </div>
                                       <div class="table-responsive">
  <table class="table table-hover table-striped table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Cust Names</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>unit Price</th>
        <th>Total price</th>
        <th>Status</th>
        <th>Payment Mode</th> 
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
     <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        
      </tr>
        <tr>
        <td>2</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tbody>
  </table>
  </div> 
 <div class="row">
     <div class="col-md-6">
     <div class="dataTables_info" id="dataTables-example_info" role="alert" aria-live="polite" aria-relevant="all">Showing 1 to 4 of 4 entries</div>
     </div>
     <div class="col-md-6"></div>                           
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