<?php

// SET THESE
$username = "rollers";
$actor_id = 30;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print_r(json_decode($response));
echo "\n";
print_r(json_decode($httpcode));
echo "\n";

?>

<?php

// SET THESE
$username = "rollers";
$actor_id = 30;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print_r(json_decode($response));
echo "\n";
print_r(json_decode($httpcode));
echo "\n";

?>


<?php

// SET THESE
$username = "rollers";
$actor_id = 100000;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print_r(json_decode($response));
echo "\n";
print_r(json_decode($httpcode));
echo "\n";

?>


<?php
    
// SET THESE
$username = "rollers";
$data = array(
    'first_name' => 'John',
    'last_name' => 'Smith'
);

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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

<?php
    
// SET THESE
$username = "rollers";
$data = array(
    'first_name' => 'John',
);

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_POSTFIELDS => http_build_query($data),
    CURLOPT_HTTPHEADER => array('Content-Type: application/json')
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcodee = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print_r(json_decode($response));
echo "\n";
print_r(json_decode($httpcodee));
echo "\n";

?>

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

<?php

// SET THESE
$username = "rollers";
$actor_id = 40;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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
$data['first_name'] = "Mike";

$data['last_name'] = "Johnson";


$uri2 = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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
echo "\n";
print_r(json_decode($httpcode2));
echo "\n";

?>

<?php

// SET THESE
$username = "rollers";
$actor_id = 41;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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
$data['first_name'] = "Mike";

$uri2 = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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
echo "\n";
print_r(json_decode($httpcode2));
echo "\n";

?>

<?php

// SET THESE
$username = "rollers";
$actor_id = 100000;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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
$data['first_name'] = "Mike";
$data['last_name'] = "Johsnon";

$uri2 = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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
echo "\n";
print_r(json_decode($httpcode2));
echo "\n";

?>

<?php
    
// SET THESE
$username = "rollers";
$actor_id = 50;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

echo $httpcode;
echo "\n";

?>

<?php
    
// SET THESE
$username = "rollers";
$actor_id = 100000;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

echo $httpcode;
echo "\n";

?>

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

<?php
    
// SET THESE
$username = "rollers";
$image_save_path = "photo_out.jpg";

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/50/photo?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

file_put_contents($image_save_path, $response);

echo $response;
echo "\n";
echo $httpcode;
echo "\n";

?>

<?php

// SET THESE
$username = "rollers";
$actor_id = 50;
$image_path = "/home/mathcs/users/fall17/rollers/webdocs/cs317/final/photo.jpg";

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/500/photo?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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

<?php
    
// SET THESE
$username = "rollers";
$image_save_path = "photo_out.jpg";

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/500/photo?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

file_put_contents($image_save_path, $response);

echo $response;
echo "\n";
echo $httpcode;
echo "\n";

?>

<?php
    
// SET THESE
$username = "rollers";
$staff_id = 1;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/50/photo?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

echo $response;
echo "\n";
echo $httpcode;
echo "\n";

?>

<?php
    
// SET THESE
$username = "rollers";
$staff_id = 1;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/500/photo?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

echo $response;
echo "\n";
echo $httpcode;
echo "\n";

?>

<?php

// SET THESE
$username = "rollers";
$actor_id = 130;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=Eequoo9IooHaigh9Eihec3&x_d=Aeg2chaeOhseep2vPeighoo2";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

print_r(json_decode($response));
echo "\n";
print_r(json_decode($httpcode));
echo "\n";

?>

<?php

// SET THESE
$username = "rollers";
$actor_id = 140;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=lohaeK8waog2Ku2zjooXee&x_d=Zairi7yechain5Jequa7Ai";

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
$data['first_name'] = "Mike";

$data['last_name'] = "Johnson";


$uri2 = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=Eequoo9IooHaigh9Eihec3&x_d=Aeg2chaeOhseep2vPeighoo2";

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
echo "\n";
print_r(json_decode($httpcode2));
echo "\n";

?>

<?php
    
// SET THESE
$username = "rollers";
$actor_id = 150;

$uri = "https://$username.mathcs.wilkes.edu/cs317/final/actors/{$actor_id}?x_a=Ay2leecaeek4ua7OoTh3ze&x_b=Bo2ahpofSie9rohbEiy1ae&x_c=Eequoo9IooHaigh9Eihec3&x_d=Aeg2chaeOhseep2vPeighoo2";

$ch = curl_init($uri);

$options = array(
    CURLOPT_CUSTOMREQUEST => "DELETE",
    CURLOPT_RETURNTRANSFER => 1,
);

curl_setopt_array($ch, $options);

$response = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

echo $httpcode;
echo "\n";

?>