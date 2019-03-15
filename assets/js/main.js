$(function() {
    // Handler for .ready() called.
    console.log('page ready');

    // USERS
    $(".baseMainContainer").on('click', '#myUsers', function() {
        $.ajax({
            url: "./core/user/getUsers.php?g",
            method: "get"
        }).done(function (response) {
            $('.entitiesTables').html(
                response
            );
            $('#dataTable').DataTable();

        }).fail(function (jqXHR, textStatus) {
        });
    });
    $(".baseMainContainer").on('click', '.removeUser', function() {
       console.log($(this).data('id'));
    });






});