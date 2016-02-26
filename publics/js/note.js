console.log("note.js loaded");

var filepath;

$(function() {

    $('#formUpload1').on('submit', (function(e) {
        e.preventDefault();
        console.log("formUpload1 submit");
        $.ajax({
            url: $(this).attr('action'),
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {

                if (data.errorMessage) {
                    alert(data.errorMessage);
                } else {
                    if (data.name) {
                        $("#imgPath").val(data.name);
                        var path = $("#basePath").val();
                        path += "publics/upload/";
                        var img = "<img src='" + path + data.name + "' class='showImage' >";
                        $("#divImageUploaded").html(img);
                    }

                }

            }
        });

    }));

    $(document).on('click', '.sub_menu', function() {
        var main = $(this).data('parent');
        var sub = $(this).data('child');
        window.location.href = "http://localhost/article/post/page/" + main + "/" + sub;
    });


    $('#btnCateSubmit').click(function() {
        var txt = $('select option:checked').text();
        $('input[name=parent_name]').val(txt);
        $(this).parents('form').submit();
    });

    // this function use for create note in create.php
    $(".langidChange" ).change(function() {
        var lang = $('.langidChange option:selected').val();

        $.get('http://localhost/article/note/get_cate_name/' + lang, function(data){
            console.log(data);
            var opt = '';
            $.each(data, function(i,e){
                opt += '<option value="' + e.value + '">' + e.name + '</option>';
            });
            $('#categoryid').html(opt);
        });
    });

    //this function use for edit note in edit.php
    $("#langidChange" ).change(function() {
        /*var lang = $('#langidChange option:selected').val();*/

        var lang = $('#langidChange option:selected').val();

        $.get('http://localhost/article/note/get_cate_name/' + lang, function(data){
            console.log(data);
            var opt = '';
            $.each(data, function(i,e){
                opt += '<option value="' + e.value + '">' + e.name + '</option>';
            });
            $('#categoryid').html(opt);
        });
    });


}); // End Document Ready

  
