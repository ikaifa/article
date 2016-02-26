
<!-- list users -->
<div class="container" style="padding-top: 50px;" id="UserList">

    <h2><span class="label label-success">User Management</span></h2>
        <br />
       <!--  <button type="button" class="btn btn-primary" id="btnAddNeew">+Add New </button> -->
        <table class="table table-hover">
            <th>#</th>
            <th>login</th>
            <th>username</th>
            <th>photo</th>
            <th>user type</th>
            <th colspan="2">Option</th>
    <?php
        foreach($this->userList as $key => $value) {
            echo '<tr>';
            echo '<td>' . $value['userid'] . '</td>';
            echo '<td>' . $value['login'] . '</td>';
            echo '<td>' . $value['username'] . '</td>';
            echo '<td><img src="'. URL.'publics/upload/' .$value['photo']. '" alt="test" 
                        style="width:50px; height:50px; border-radius:50%;"/></td>';
            echo '<td>' . $value['role'] . '</td>';
            echo '<td><a class="glyphicon glyphicon-pencil" href="'.URL.'user/edit/'.$value['userid'].'"></a></td>'; 
            echo '<td><a class="glyphicon glyphicon-trash" href="'.URL.'user/delete/'.$value['userid'].'"></a></td>';
            echo '</tr>';
        }
    ?>
    </table>
</div>

<script>
    $(function() {
        
        $('#btnAddNeew').click(function(e) {
            $('#UserList').hide();
            $('#UserAdd').show();
        });
        
    });
</script>

<!-- create user -->
<div class="container" >
        <div class="row">  
            <div class="col-md-6">  
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#createuser">
                  +Add New User
                </button>

                <!-- Modal -->
                <div class="modal fade" id="createuser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Create User</h4>
                            </div>
                        <div class="modal-body">

                            <form action="<?php echo URL;?>user/uploadImage" id="formUpload1" method="post" enctype="multipart/form-data">
                                Select image to upload:
                                    <input type="file" name="imageUpload1" id="fileUpload1" />
                                    <input type="submit" value="Upload" class="btn btn-primary active"> 
                            </form>

                            <div id="divImageUploaded">
        
                            </div>

                            <form method="post" action="<?php echo URL;?>user/create">
                                <input type="hidden" name="imgPath" id="imgPath">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1" >login</span>
                                    <input type="text" class="form-control" placeholder="login" aria-describedby="basic-addon1" name="login"/>
                                </div><br/>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1" >user name</span>
                                    <input type="text" class="form-control" placeholder="username" aria-describedby="basic-addon1" name="username"/>
                                </div><br/>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1" >password</span>
                                    <input type="password" class="form-control" placeholder="password" aria-describedby="basic-addon1" name="password"/>
                                </div><br/>
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon1" >Role</span>
                                    <select class="form-control" name="role">
                                        <option value="default">Default</option>
                                        <option value="admin">Admin</option>>
                                    </select>
                                </div><br/>
                                    
                                <input type="submit" class="btn btn-primary" value="insert"/>
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



