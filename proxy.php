<?php
header('Content-Type:text/xml');
$code = $_GET["code"];
$response = http_get("https://catalog.western.edu/ribbit/?page=getcourse.rjs&code=".urlencode($code),array("timeout"=>10),$responseText);
print($responseText);
