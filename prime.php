<?php

$birthday = $_GET["input"];
$present = date("y");
$age = $present - $birthday;

if ($age <= 1) {
    $response["prime"] = "it not prime";
} 
else {
    if ($age % 2 == 0) {
        $response["even"] = "age is even";
    } else {
        $response["even"] = "age is odd";
    }
    $is_prime = true;
    for ($i = 2; $i <= sqrt($age); $i++) {
        if ($age % $i == 0) {
            $is_prime = false;
            break;  }
    }
    if ($is_prime) {
        $response["prime"] = "age is prime";
    } else {
        $response["prime"] = "it not prime"; }
}
echo json_encode($response);
?>