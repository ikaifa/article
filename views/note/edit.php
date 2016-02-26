<?php
	$image = "";
	if ($this->note['image']) {
	    $img = $this->note['image'];
	    $image = URL . "publics/upload/" . $img;
	}
?>

<div class="container">

    <div class="row col-md-12">
        <div class = "page-header text-center">
           <h1>
              Edit Note
           </h1>
        </div>
    </div>

    <hr/>
    <form action="<?php echo URL; ?>note/uploadImage" id="formUpload1" method="post" enctype="multipart/form-data">
        Select image:<input type="file" name="imageUpload1" id="fileUpload1" class="fileinput fileinput-new" data-provides="fileinput" />
        <input type="submit" value="Upload" class="btn btn-primary active">
    </form>

    <div id="divImageUploaded">
        <?php
        	echo $image ? "<img class='showImage' src='$image'>" : "No image or photo";
        ?>
    </div>

    <form method="post" action="<?php echo URL; ?>note/editSave/<?php echo $this->note['noteid']; ?>">
        <div class="row">
            <div class="col-md-12 from-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="<?php echo $this->note['title']; ?>" class="form-control" />
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 form-group">
                <label for="langidChange">Language Type</label>
                <select name="langid" class="form-control" id="langidChange">
                    <?php
                    	foreach ($this->languageList as $lang) {
                    	    if ($this->$lang['langid'] == $lang['langid']) {
                    	        echo "<option value='" . $lang['langid'] . "'> " . $lang['langtype'] . "</option>";
                    	        continue;
                    	    } else {
                    	        echo "<option value='" . $lang['langid'] . "'> " . $lang['langtype'] . "</option>";
                    	    }
                    	}
                    ?>
                </select>
            </div>

            <div class="col-md-3 form-group">
                <div id="categoryname_en" style="display:block;">
                    <label for="langidChange">Categoryname</label>
                    <select name="categoryid" class="form-control" id="categoryid">
                        <?php

                        	echo "<option value='" . $this->note['categoryid'] . "'> " . $this->note['catename'] . "</option>";
                        	foreach ($this->cateList as $cate) {
                        	    if ($this->note['categoryid'] == $cate['categoryid']) {
                        	        continue;
                        	    }
                        	    echo "<option value='" . $cate['categoryid'] . "'> " . $cate['catename'] . "</option>";
                        	}

                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <label for="content">Content</label>
                <textarea class="form-control ckeditor" name="content"><?php echo $this->note['content']; ?></textarea>
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-md-12">
                <label for="video">Video</label>
                <input type="text" name="video" class="form-control"  value="<?php echo $this->note['video']; ?>" />
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-md-offset-9 col-md-3 form-group">
                <input type="submit" value="Update" class="btn btn-primary form-control"/>
            </div>
        </div>

        <br/><br/>
    </form>
</div>

<script type="text/javascript">
    CKEDITOR.replace( 'content',
    {
        filebrowserBrowseUrl :'<?php echo URL . "publics/"; ?>ckeditor/filemanager/browser/default/browser.html?Connector=<?php echo URL . "publics/"; ?>ckeditor/filemanager/connectors/php/connector.php',
        filebrowserImageBrowseUrl : '<?php echo URL . "publics/"; ?>ckeditor/filemanager/browser/default/browser.html?Type=Image&amp;Connector=<?php echo URL . "publics/"; ?>ckeditor/filemanager/connectors/php/connector.php',
        filebrowserFlashBrowseUrl :'<?php echo URL . "publics/"; ?>ckeditor/filemanager/browser/default/browser.html?Type=Flash&amp;Connector=<?php echo URL . "publics/"; ?>ckeditor/filemanager/connectors/php/connector.php',
        filebrowserUploadUrl  :'<?php echo URL . "publics/"; ?>ckeditor/filemanager/connectors/php/upload.php?Type=File',
        filebrowserImageUploadUrl : '<?php echo URL . "publics/"; ?>ckeditor/filemanager/connectors/php/upload.php?Type=Image',
        filebrowserFlashUploadUrl : '<?php echo URL . "publics/"; ?>ckeditor/filemanager/connectors/php/upload.php?Type=Flash'
    });


</script>
