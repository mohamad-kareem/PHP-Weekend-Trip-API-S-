<?php
$string=$_GET["input"];
if($string==strrev($string)){
    $response=["is palindrome"];
}
else{
    $response=["it's not palindrome"];
}
echo json_encode($response);


?>