<?php

$email = $_POST['email'];
$password = $_POST['password'];
$response=[];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['valid'] = true;
}
else{$response['valid'] = false;}

if (strlen($password) >8 &&
    preg_match('/[A-Z]/', $password) &&
    preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password)
) {
    $response['valid'] = true;
}
    else{
        $response["valid"]=false;
    }

echo json_encode($response);
