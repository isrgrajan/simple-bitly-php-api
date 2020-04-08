<?php
include("./isrg-bitly/api.php");

$genericAccessToken="your-bitly-generic-AccessToken-"; // See: https://bitly.is/2UQ3XLo
$full_url="https://www.google.com"; 
$short_url=get_short_url($full_url, $genericAccessToken)

echo $short_url;
