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

    // ETUDIANTS
    $(".baseMainContainer").on('click', '#myEtudiants', function() {
        $.ajax({
            url: "./core/etudiant/getEtudiants.php?g",
            method: "get"
        }).done(function (response) {
            $('.entitiesTables').html(
                response
            );
            $('#dataTable').DataTable();

        }).fail(function (jqXHR, textStatus) {
        });
    });

    // RECRUTEURS
    $(".baseMainContainer").on('click', '#myRecruteurs', function() {
        console.log("ouai");
        $.ajax({
            url: "./core/recruteur/getRecruteurs.php?g",
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