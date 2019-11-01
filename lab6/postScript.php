<?php
    
// SET THESE
$username = "rollers";
$data = array(
    'title' => 'Test Post MOVIE',
    'description' => 'This is at test to see if the POST worked.',
    'release_year' => 2018,
    'rental_duration' => 1,
    'rental_rate' => 9.99,
    'length' => 20,
    'replacement_cost' => 99.99,
    'rating' => 'R'
);

$uri = "https://$username.mathcs.wilkes.edu/cs317/lab6.php/movies";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array('Content-Type: application/json')
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print_r(json_decode($response));

?>