

<div class="container" style="padding-top: 50px;">
  <div class="row">
    <div class="col-md-6">
        <div id="myModal" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Edit Category</h4>
                  </div>
                  <div class="modal-body">
                      <form method="post" action="<?php echo URL;?>category/editSave/<?php echo $this->category[0]['categoryid']; ?>">
                        <div class="input-group">
                          <span class="input-group-addon" id="basic-addon1" >Category Name</span>
                          <input type="text" class="form-control" placeholder="categoryname" aria-describedby="basic-addon1" name="categoryname" value="<?php echo $this->category[0]['categoryname']; ?>" />
                        </div>

                        <span class="input-group-addon" id="basic-addon1" >parent id</span>
                        <select name="parent_id" class="form-control">
                          <!-- <option value="0">
                              0
                          </option> -->
                          
                            
                          
                          <?php 
                              if($this->cateList != null){
                                  echo "<option value='{$this->category[0]['parent_id']}'>{$this->category[0]['parent_name']}</option>";
                                  foreach ($this->cateList as $cate) {
                                    if($this->category[0]['parent_id'] == $cate['parent_id']){
                                      continue;
                                    }
                                    echo "<option value='{$cate['categoryid']}'>{$cate['categoryname']}</option>";                                      
                                  }
                              }

                              
                          ?>
                        </select>
                        <input type="hidden" name="parent_name">

          

                        <div class="row">
                            <div class="col-md-4">
                              <input id="btnCateSubmit" type="button"  class="btn btn-primary btn-lg btn-block" value="Save change" />
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

