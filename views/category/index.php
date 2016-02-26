
<div class="container">
    <br/>
    <h2><span class="label label-success">Category Management</span></h2>
    <hr />
    <form method="post" action="<?php echo URL; ?>category/create">

        <div class="row">
            <div class="col-md-3 form-group">
                <label >Category name</label>
                <input class="form-control" type="text" name="catename"  >
            </div>

            <div class="col-md-3 form-group">
                <label >parent id</label>
                <select name="parent_id" class="form-control">
                    <option value="0" selected="0">
                        0
                    </option>
                    <?php

                    	foreach ($this->cateList as $cate) {
                    	    echo "<option value='" . $cate['categoryid'] . "'> " . $cate['categoryid'] . "</option>";
                    	}
                    ?>
                </select>
            </div>

            <div class="col-md-3 form-group">
                <label >Parent name</label>
                <select name="parent_name" class="form-control">
                    <option value="home" selected="home">
                        home
                    </option>
                    <?php

                    	foreach ($this->cateList as $cate) {
                    	    echo "<option value='" . $cate['catename'] . "'> " . $cate['catename'] . "</option>";
                    	}
                    ?>
                </select>
            </div>

            <div class="col-md-3 form-group">
                <label >language</label>
                <select name="parent_name" class="form-control">
                    <option value="home" selected="home">
                        home
                    </option>
                    <?php

                    	foreach ($this->cateList as $cate) {
                    	    echo "<option value='" . $cate['catename'] . "'> " . $cate['catename'] . "</option>";
                    	}
                    ?>
                </select>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <input type="submit" value="+Add" class="btn btn-primary btn-lg btn-block"/>
            </div>
        </div>
    </form>

    <table class="table table-hover">
    <th>#</th>
    <th>Catagory Name</th>
    <th>parent id</th>
    <th>parent name</th>
    <th>Language</th>
    <th colspan="2">Option</th>
    <?php
    	foreach ($this->categoryList as $key => $value) {
    	    echo '<tr>';
    	    echo '<td>' . $value['categoryid'] . '</td>';
    	    echo '<td>' . $value['catename'] . '</td>';
    	    echo '<td>' . $value['parent_id'] . '</td>';
    	    echo '<td>' . $value['parent_name'] . '</td>';
    	    echo '<td>' . $value['langtype'] . '</td>';
    	    echo '<td><a class="glyphicon glyphicon-pencil" href="' . URL . 'category/edit/' . $value['categoryid'] . '"></a></td>';
    	    echo '<td><a id="delete" class="glyphicon glyphicon-trash" href="' . URL . 'category/delete/' . $value['categoryid'] . '"></a></td>';
    	    echo '</tr>';
    	}
    ?>
    </table>
</div>

<script>
$(function() {

    $('#delete').click(function(e) {
        var c = confirm("Are you sure you want to delete?");
        if (c == false) return false;

    });

});
</script>