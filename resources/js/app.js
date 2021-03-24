require('./bootstrap');

$(document).ready(function () {
    $(".btn_delete_post").on("click", function () {
        var post_id = $(this).data('id');
        var cur_language = $(this).data('lang');
        var msg_delete;
        //Check curent language
        if (cur_language == 'vi') {
            msg_delete= 'Bạn có muốn xóa không ?';
        }
        else {
            msg_delete= 'Do you want to delete ?';
        }
        //Confirm delete action
        if (confirm(msg_delete)) {
            document.getElementById('form_delete_' + post_id).submit();
        }
    });
    //Reload function
    $(".btn_reload").on("click", function () {
        window.location.reload();
    });
    //Go back previous page
    $(".btn_go_back").on("click", function () {
        window.history.back();
    });
});
