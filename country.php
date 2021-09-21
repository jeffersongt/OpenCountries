<?php

if (isset($_POST['country'])) {
    $country = $_POST['country'];
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://restcountries.eu/rest/v2/name/" . $country);
$result = curl_exec($ch);
curl_close($ch);

$ret = json_decode(json_encode($result));
return $ret;

?>