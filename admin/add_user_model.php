<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade in modal-lg" style="display:none;">
    <div class="modal-dialog">
    <form method="post" action="">
      <!-- Modal content-->
      <div class="modal-content">
          <div class="modal-header">
                                          
                                            <div class="alert alert-info"><center><strong>Add More Users</strong>
                                        
            <button type="button" class="close disniss_model" data-dismiss="modal"  style="">&times;</button>
                                                </center>
              </div>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          
              <div class="row">
                  
            <div class="control-group">
    <label class="control-label" for="subcategory">First Name:</label>            
                                 <div class="controls user-add_css" >          
            <input type="text" name="firstname" class = "form-control" placeholder="******** first name ********" style="text-align:center;">
                </div>     
                                 </div>
                               
                                <div class="control-group">
        <label class="control-label" for="subcategory">Last Name:</label>
                                    <div class="controls user-add_css">
                                                        
<input type="text" class = "form-control"  name="lstname"  placeholder="******** last name ********" style="text-align:center;" >
                                    </div>
                                </div>
                               
                                <div class="control-group">
      <label class="control-label" for="subcategory">Gender:</label>                              
                                    <div class="controls user-add_css">
      <select type="text" name="gender" class = "form-control" placeholder="Category" style="text-align:center;" >
                                            <option>******* Select Gender *******</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                </div>
                  

                                <div class="control-group">
     <label class="control-label" for="email">Email:</label>                               
                                    <div class="controls user-add_css">
   <input type="text" name="email" class = "form-control" placeholder="******** email ********" style="text-align:center;">
                                    </div>
                                </div>

                                <div class="control-group">
            <label class="control-label" for="subcategory">Phone:</label>                                                     
                                    <div class="controls user-add_css">
    <input type="text" name="phone" placeholder="******** phone number ********"  class = "form-control" style="text-align:center;">
                                    </div>
                                </div>
                                   <div class="control-group">
            <label class="control-label" for="subcategory">Password:</label>                        
                                   <div class="controls user-add_css">
    <input type="password" name="pssw" placeholder="******** password ********"  class = "form-control" style="text-align:center;">
                                    </div>
                                </div>

                                
                                </div>
                           
          </form>
        </div>
        <div class="modal-footer">
            <button name = "save_user" class="btn " style="background-color:#303030; color:white"><i>Register</i></button>
            <button type="button" class="btn btn-danger disniss_model" data-dismiss="modal"><i>Close</i></button>
        </div>
      </div>
      </form>
    </div>
  </div>

<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").show(200);
    });
    $(".disniss_model").click(function(){
        $("#myModal").hide();
    });
    
});
</script>