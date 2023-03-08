<?php

$birthday=$_GET["input"];
$present=date("y");
$age=$present-$birthday;
if $age<=1{
    $response["prime"]="it not prime";
}
else{
    for ($i = 2; $i <= sqrt($age); $i++) {
    if ($age % $i == 0) {
        $response["prime"]="it not prime";
    }
}
$response["prime"]="age is prime";
}
echo json_encode($response);
?>