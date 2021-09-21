<?php

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>OpenCountries</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            body {
                background: url(https://coolbackgrounds.io/images/backgrounds/index/sea-edge-79ab30e2.png) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="#">OpenCountries</a>
            </div>
        </nav>
        <div class="container">
            <form id="countryForm">
                <div class="row align-items-center justify-content-center" style="margin-top:250px;">
                    <div class="form-group col-12">
                        <label for="countryLabel"></label>
                        <input type="text" class="form-control" id="country" placeholder="Type here">
                    </div>
                </div>
                <div class="row col-12">
                    <button type="submit" id="submitForm" class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    <body>
</html>

<script>

$(document).ready(function () {
    $('#countryForm').on('submit', function(e) {
    e.preventDefault();
    var fd = new FormData();
    var country = $('#country').val();
        $.ajax({
            type: 'POST',
            url: "country.php",
            data: {'country': country},
            dataType: "json",
            success: function(response) {
                if (response['status'] === 404) {
                    alert("The country provided doesn't exists.");
                    return;
                }
                fd.append('country', response[0]['name']);
                fd.append('capital', response[0]['capital']);
                fd.append('code', response[0]['alpha2Code']);
                fd.append('continent', response[0]['region']);
                fd.append('population', response[0]['population']);
                fd.append('area', response[0]['area']);
                fd.append('currency', response[0]['currencies'][0]['name']);
                fd.append('symbol', response[0]['currencies'][0]['symbol']);
                fd.append('language', response[0]['languages'][0]['name']);
                fd.append('call', response[0]['callingCodes']);
                $.ajax({
                    type: 'POST',
                    url: "response.php",
                    data: fd,
                    processData: false,
                    contentType: false,
                    dataType: "html",
                    success: function(response) {
                        var resultPage = document.open('text/html', 'replace');
                        resultPage.write(response);
                        resultPage.close();
                    }
                });
            }
        });
    });
});

</script>