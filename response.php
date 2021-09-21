<?php

if (isset($_POST['country']) && isset($_POST['capital']) && isset($_POST['code']) && isset($_POST['continent']) && isset($_POST['population']) && isset($_POST['area']) && isset($_POST['currency']) && isset($_POST['language']) && isset($_POST['call']) && isset($_POST['symbol'])) {
    $country = $_POST['country'];
    $capital = $_POST['capital'];
    $code = $_POST['code'];
    $continent = $_POST['continent'];
    $population = $_POST['population'];
    $area = $_POST['area'];
    $currency = $_POST['currency'];
    $language = $_POST['language'];
    $call = $_POST['call'];
    $symbol = $_POST['symbol'];
}

?>

<html>
    <head>
        <meta charset="utf-8">
        <title>OpenCountries</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//cdn.datatables.net/1.11.2/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
        <style>
            body {
                background: url(https://coolbackgrounds.io/images/backgrounds/index/sea-edge-79ab30e2.png) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                border-top: 1px solid black;
                border-right: 1px solid black;
            }
            .grid > span {
                padding: 8px 4px;
                border-left: 1px solid black;
                border-bottom: 1px solid black;
                border-right: 1px solid black;
                border-top: 1px solid black;
                margin-left: 5px;
                margin-right: 5px;
                margin-top: 5px;
            }
            .descInfo {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
                <a class="navbar-brand" href="/">OpenCountries</a>
            </div>
        </nav>
        <div class="grid">
            <span>
                <strong>---</strong>
            </span>
            <span>
                <strong>---</strong>
            </span>
            <span class="descInfo">Continent</span>
            <span><?php echo $continent ?></span>
            <span class="descInfo">Country</span>
            <span><?php echo $country ?></span>
            <span class="descInfo">Capital</span>
            <span><?php echo $capital ?></span>
            <span class="descInfo">Code</span>
            <span><?php echo $code ?></span>
            <span class="descInfo">Language</span>
            <span><?php echo $language ?></span>
            <span class="descInfo">Population</span>
            <span><?php echo $population ?></span>
            <span class="descInfo">Area</span>
            <span><?php echo $area ?></span>
            <span class="descInfo">Currency</span>
            <span><?php echo $currency . " " . $symbol ?></span>
            <span class="descInfo">Call</span>
            <span><?php echo "+" . $call ?></span>
        </div>
    <body>
</html>