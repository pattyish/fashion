<div class="modal fade" id="edit_product_model<?php echo $id ;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
                                          
                                            <div class="alert alert-info"><center><strong>Edit Product</strong>
                                        
            <button type="button" class="close disniss_model" data-dismiss="modal"  style="">&times;</button>
                                                </center>
              </div>
        </div>
           <form method="post" action="" enctype="multipart/form-data">
        <div class="modal-body model_product" style="padding:40px 50px;">
         
              <div class="row">
                 
            <div class="control-group">
                                           <label class="control-label" for="inputEmail">Name:</label>
                                           <input type="text" name="edited_name" class = "form-control" value = "<?php echo $results1['product_name'];?>" placeholder="Name">
                                          
                                 </div>
                               
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Description:</label>
                                    <div class="controls">
                                        <input type="text" class = "form-control" value = "<?php echo $results1['product_description'];?>" name="edited_description"  placeholder="description" >
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Category:</label>
                                    <div class="controls">
                                        <select type="text"  name="edited_category" class = "form-control" placeholder="Category" >
                                            <option></option>
                                        <?php
                                        $query = "SELECT * FROM categories_table";
                                        $qry = mysqli_query($conn, $query);
                                        while($rows = mysqli_fetch_assoc($qry))
                                        {
                                        ?>
                                         <option value="<?php echo $rows['cat_id']; ?>"><?php echo $rows['category_name']; ?></option>        
                                        <?php
                                        }
                                        ?>
                                            </select>
                                    </div>
                                    
                                </div>
                  <div class="control-group">
                                    <label class="control-label" for="subcategory">Sub Category:</label>
                                    <div class="controls">
                                        <select type="text"   name="edited_sub_category" class = "form-control" placeholder="Category" >
                                            <option></option>
                                        <?php
                                        $qry1 = "SELECT * FROM subcategory";
                                        $subquery = mysqli_query($conn, $qry1);
                                        while($results = mysqli_fetch_array($subquery))   {
                                            ?>
                                            <option value="<?php echo $results['sub_catid']; ?>"><?php echo $results['sub_cat_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                            </select>
                                    </div>
                                    
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="origin">Origin:</label>
                                    <div class="controls">
                                        <input type="text"  name="edited_product_origin" class = "form-control" value = "<?php echo $results1['product_origin'];?>" placeholder="Origin">
                                    </div>
                                </div>
                  

                                <div class="control-group">
                                    <label class="control-label" for="price">Price:</label>
                                    <div class="controls">
                                        <input type="text"  value = "<?php echo $results1['product_price'];?>" name="edited_product_price"  class = "form-control" placeholder="Price" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Quantity:</label>
                                    <div class="controls">
                                        <input type="text" value = "<?php echo $results1['quantity'];?>" name="edited_quant" placeholder="Quantity"  class = "form-control" >
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label" for="input01">Image:</label>
                                    <div class="controls">
                                        <input type="file" name="image"> 	
                                    </div>
                                </div>
                                </div>
                               
          
        </div>
        <div class="modal-footer">
           <button name = "edit_product" class="btn "style="background-color:#303030; color:white">Update</button>
           <button type="button" class="btn btn-danger disniss_model" data-dismiss="modal">Close</button>
        </div>
               
           
               </form>
      </div>

      
    </div>
  </div>
