
    <div class="container">

        <div class="page-header text-center">
           <h1>
                Note Management
           </h1>
        </div>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo URL; ?>note/insert" ><button type="button" class="btn btn-primary">+Add New</button></a>
            </div>
        </div>

        <br/>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <form action="" method="post" id="frmAjaxLang">
                        <select id="selLang" name="lang" class="form-control">
                        <option  selected disabled>All language</option>
​​​​​​​                                      <?php
                                      	$lang2 = isset($_REQUEST['lang']) ? $_REQUEST['lang'] : 'english';
                                      	echo "<option value='$lang2'>" . ucfirst($lang2) . "</option>";
                                      	foreach ($this->languageList as $lang) {
                                      	    if ($lang2 == $lang['langtype']) {
                                      	        continue;
                                      	    }
                                      	    echo "<option value='" . $lang['langtype'] . "'> " . $lang['langtype'] . "</option>";
                                      	}
                                      ?>
                        </select>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table id="tblNotes" class="table table-hover">
                    <thead>
                        <th>#</th>
                        <th>Note Title</th>
                        <th>date_added</th>
                        <th>username</th>
                        <th>categoryname</th>
                        <th>language</th>
                        <th>Action</th>
                    </thead>
                </table>
            </div>
        </div>

    </div>

    <script>
        var base_link = '<?php echo URL; ?>';

        $(function() {

            $('#delete').click(function(e) {
                var c = confirm("Are you sure you want to delete?");
                if (c == false) return false;
            });

            var buttons = '<a href="javascript:" class="btnModify" data-title="Modify"><span class="glyphicon glyphicon-pencil"></span></a> ';
            buttons += ' <a href="javascript:" class="btnDelete" data-title="Delete"><span class="glyphicon glyphicon-trash"></span></a>';



            table = $('#tblNotes').dataTable({
                ajax: {
                    url: base_link + 'note/json/' + $(this).val(),
                    dataSrc: '',
                }, columns: [
                    { data: 'noteid' },
                    { data: 'title' },
                    { data: 'date_added' },
                    { data: 'username' },
                    { data: 'catename' },
                    { data: 'langtype' },
                    { data: '', defaultContent: buttons }
                ],

                bDestroy: true
            });

            $('#selLang').change(function(){
                $('#frmAjaxLang').submit();
            });

            $('#frmAjaxLang').submit(function(e){
                e.preventDefault();

                table = $('#tblNotes').dataTable({
                    ajax: {
                        url: base_link + 'note/json/' + $(this).val(),
                        dataSrc: '',
                    }, columns: [
                        { data: 'noteid' },
                        { data: 'title' },
                        { data: 'date_added' },
                        { data: 'username' },
                        { data: 'catename' },
                        { data: 'langtype' },
                        { data: '', defaultContent: buttons }
                    ],
                    bDestroy: true
                });

            });

            $(document).on('click', '#tblNotes .btnModify', function(){
                var id = $(this).parents('tr').find('td').first().text();
                window.location.href = base_link + 'note/edit/' + id;
            });

            $(document).on('click', '#tblNotes .btnDelete', function(){
                var id = $(this).parents('tr').find('td').first().text();
                if (confirm('Do you really want to delete this?')) {
                    $.post(base_link + 'note/delete/' + id, function(result){
                    }, 'json');
                    window.location.href = base_link + 'note/';

                }
            });



        }); // end document ready

    </script>