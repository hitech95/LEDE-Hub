$(document).ready(function () {
    //Slugify from input form to another
    $('.slugify').slugify('.slugify-src');

    //Add search to select
    $('.selectized').selectize({
        create: true,
        sortField: 'text'
    });

    tinymce.init({
        selector: '.tinymce-lite',
        menubar: false,
        plugins: [
            " autolink link image charmap preview fullscreen paste insertdatetime contextmenu wordcount"
        ],
        toolbar: [
            "undo redo | bold italic strikethrough | blockquote hr | fullscreen",
            "link unlink | charmap insertdatetime | preview"
        ],
        contextmenu: "link image inserttable | cell row column deletetable charmap"
    });

    tinymce.init({
        selector: '.tinymce',
        menubar: false,
        plugins: [
            "advlist autolink lists link image charmap preview anchor fullscreen",
            "insertdatetime media table paste contextmenu textcolor"
        ],
        toolbar: [
            "undo redo | bold italic strikethrough | alignleft aligncenter alignright | bullist numlist blockquote hr | fullscreen ",
            "styleselect forecolor | outdent indent | link unlink image media | anchor table charmap insertdatetime | preview"
        ],
        contextmenu: "link image inserttable | cell row column deletetable"
    });

    //Show a popup when a user want to delete a item
    $(".form-delete").submit(function (e) {
        e.preventDefault();
        var form = this;

        $('.modal-delete-dialog').modal({backdrop: 'static', keyboard: false})
            .one('click', '.btn-delete', function (e) {
                form.submit();
            });
    });
});