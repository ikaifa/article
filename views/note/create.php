<div <div class="container" style="padding-top: 50px;">

     <h2><span class="label label-success">Create Note </span></h2>
        <a class="btn btn-default" href="<?php echo URL . 'note/'; ?>">Go Back</a>
    <form action="<?php echo URL; ?>note/uploadImage" id="formUpload1" method="post" enctype="multipart/form-data">
        Select image to upload:
            <input type="file" name="imageUpload1" id="fileUpload1" />
            <input type="submit" value="Upload" class="btn btn-primary active">
    </form>

    <div id="divImageUploaded">

    </div>

    <form method="post" action="<?php echo URL; ?>note/create" id="frmCreateNote">
        <input type="hidden" name="imgPath" id="imgPath">
        <h2>
            <span class="label label-default">Title</span>
            <input type="text" name="title"  class="form-control" />
        </h2>
        <label>Language Type</label>
        <select name="langid" class="langidChange">
            <option  selected disabled>===Please choose language===</option>
            <?php

            	foreach ($this->languageList as $lang) {
            	    echo "<option value='" . $lang['langid'] . "'> " . $lang['langtype'] . "</option>";
            	}
            ?>
        </select><br />
        <div class="categoryname">
            <label>categoryname</label>
            <select name="categoryid" id="categoryid"></select>
        </div>

        <label>content</label> <textarea class="ckeditor" name="content"></textarea>
        <h2>
            <span class="label label-default">Video</span>
            <input type="text" name="video"  class="form-control" />
        </h2>
        <label>&nbsp;</label><input type="submit" class="btn btn-primary active"  value="Create" />
    </form>

    <hr />
</div>

<script>

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