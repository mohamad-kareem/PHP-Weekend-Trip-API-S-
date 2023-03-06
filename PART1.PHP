<?php

$email = $_POST['email'];
$password = $_POST['password'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $response['success'] = false;
    $response['message'] = "Invalid email format";
    echo json_encode($response);
    exit();
}
if (strlen($password) < 8 ||
    !preg_match('/[A-Z]/', $password) ||
    !preg_match('/[!@#$%^&*()\-_=+{};:,<.>]/', $password)
) {
    $response['success'] = false;
    $response['message'] = "Invalid password format";
    echo json_encode($response);
    exit();
}
$query = $mysqli->prepare('select id,email,password,first_name,last_name from users where email=?');
$query->bind_param('s', $email);
$query->execute();

$query->store_result();
$num_rows = $query->num_rows();
$query->bind_result($id, $email, $hashed_password, $first_name, $last_name);
$query->fetch();

if ($num_rows == 0) {
    $response['success'] = false;
    $response['message'] = "User not found";
} else {
    if (password_verify($password, $hashed_password)) {
        $response['success'] = true;
        $response['user_id'] = $id;
        $response['email'] = $email;
        $response['first_name'] = $first_name;
        $response['last_name'] = $last_name;
    } else {
        $response['success'] = false;
        $response['message'] = "Incorrect password";
    }
}
echo json_encode($response);
