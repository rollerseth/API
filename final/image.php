<?php

// SET THESE
$username = "rollers";
$actor_id = 50;
$image_path = "/home/mathcs/users/fall17/rollers/webdocs/cs317/final/photo.jpg";

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/50/photo?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$request = "--xxBOUNDARYxx\r\nContent-Disposition: form-data; name=\"picture\"; filename=\"photo_out.jpg\"\r\nContent-Type: text/plain\r\n\r\n".file_get_contents($image_path)."\r\n\r\n--xxBOUNDARYxx--";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_POSTFIELDS => $request,
    CURLOPT_HTTPHEADER => array('Content-Type: multipart/form-data; boundary=xxBOUNDARYxx', 'User-Agent: PHP/7.2', 'Host: rollers.mathcs.wilkes.edu', 'Accept: */*', 'Connection: keep-alive', 'Content-Length: ' . strlen($request)),
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

echo $response;
echo "\n";
echo $httpcode;
echo "\n";

?>