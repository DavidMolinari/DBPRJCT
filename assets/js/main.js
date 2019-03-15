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

    // ANNONCES
    $(".baseMainContainer").on('click', '#myAnnonces', function() {
        $.ajax({
            url: "./core/annonce/getAnnonces.php?g",
            method: "get"
        }).done(function (response) {
            $('.entitiesTables').html(
                response
            );
            $('#dataTable').DataTable();

        }).fail(function (jqXHR, textStatus) {
        });
    });

    // COMPETENCES
    $(".baseMainContainer").on('click', '#myCompetences', function() {
        $.ajax({
            url: "./core/competence/getCompetences.php?g",
            method: "get"
        }).done(function (response) {
            $('.entitiesTables').html(
                response
            );
            $('#dataTable').DataTable();

        }).fail(function (jqXHR, textStatus) {
        });
    });

    // POSTE
    $(".baseMainContainer").on('click', '#myPostes', function() {
        $.ajax({
            url: "./core/poste/getPostes.php?g",
            method: "get"
        }).done(function (response) {
            $('.entitiesTables').html(
                response
            );
            $('#dataTable').DataTable();

        }).fail(function (jqXHR, textStatus) {
        });
    });


    // DIPLOME
    $(".baseMainContainer").on('click', '#myDiplomes', function() {
        $.ajax({
            url: "./core/diplome/getDiplomes.php?g",
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