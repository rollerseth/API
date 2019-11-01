<?php

// SET THESE
$username = "rollers";
$movie_id = 4;

$uri = "https://$username.mathcs.wilkes.edu/cs317/lab6.php/movies/$movie_id";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print_r(json_decode($response));

?>