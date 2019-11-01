<?php

// SET THESE
$username = "rollers";
$movie_id = 1;

$uri = "https://$username.mathcs.wilkes.edu/cs317/lab6.php/movies/$movie_id";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

$data = json_decode($response, 1);

// MAKE CHANGES TO $data ARRAY
$data['title'] = "yoooo";

$data['rating'] = "NC-17";


$uri2 = "https://$username.mathcs.wilkes.edu/cs317/lab6.php/movies/$movie_id";

$ch2 = curl_init($uri2);

$options2 = array(
    CURLOPT_CUSTOMREQUEST => "PUT",
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array('Content-Type: application/json')
);

curl_setopt_array($ch2, $options2);

$response2 = curl_exec($ch2);
$httpcode2 = curl_getinfo($ch2, CURLINFO_HTTP_CODE);

print_r(json_decode($response2));

?>