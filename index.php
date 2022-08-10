<?php 
$post = [
    'username' => 'test',
    'password' => 'passuser1',
    'gender'   => 1,
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost/zxtest/result.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));
$response = curl_exec($ch);
var_export($response);