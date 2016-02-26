<?php
    if($this->user['photo']){
        $img = $this->user['photo'];
        $image = URL . "publics/upload/" . $img;
    }
?>

<div class="container" style="padding-top: 50px;" id="edituser" >
    <div class="row">
      <div class="col-md-6">
          <!-- Modal -->
          <div class="modal fade" id="myModal" tabindex="1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="myModalLabel">Edit user</h4>
                </div>
                <div class="modal-body">
                    <h2>
                        <span class="label label-success">Update User</span>
                      </h2>
                      <br/>

                      <form action="<?php echo URL;?>note/uploadImage" id="formUpload1" method="post" enctype="multipart/form-data">
                        Select image:<input type="file" name="imageUpload1" id="fileUpload1" class="fileinput fileinput-new" data-provides="fileinput" />
                        <input type="submit" value="Upload" class="btn btn-primary active">     
                    </form>

                    <div id="divImageUploaded">
                        <?php 
                            echo $image ? "<img class='showImage' src='$image'>" : "";
                        ?>
                    </div>

                      <form  method="post" action="<?php echo URL;?>user/editSave/<?php echo $this->user['userid']; ?>">
                          
                          <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1" >login</span>
                            <input type="text" class="form-control" placeholder="login" aria-describedby="basic-addon1" name="login" value="<?php echo $this->user['login']; ?>" />
                          </div><br/>
                          <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1" >User Name</span>
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1" name="username" value="<?php echo $this->user['username']; ?>" />
                          </div><br/>
                          <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1" >Password</span>
                            <input type="password" class="form-control" placeholder="Password" aria-describedby="basic-addon1" name="password" />
                          </div><br/>
                          <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1" >Role</span>
                              <select class="form-control" name="role">
                                  <option value="default" <?php if($this->user['role'] == 'default') echo 'selected'; ?>>Default</option>
                                  <option value="admin" <?php if($this->user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                                  <option value="owner" <?php if($this->user['role'] == 'owner') echo 'selected'; ?>>Owner</option>
                              </select>
                          </div>
                          <div class="row">
                            <div class="col-md-4">
                              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Save change" />
                            </div>
                          </div>  
                      </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $("#myModal").modal('show');
  });
</script>



