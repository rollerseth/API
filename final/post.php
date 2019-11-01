<?php
    
// SET THESE
$username = "rollers";
$data = array(
);

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/1000?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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
echo "\n";
print_r(json_decode($httpcode));
echo "\n";

?>