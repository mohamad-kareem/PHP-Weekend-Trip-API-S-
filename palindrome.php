<?php
$string=$_GET["input"];
if($string==strrev($string)){
    $response=["is palindrome"]="it is palindrome";
}
else{
    $response=["is palindrome"]="it is not palindrome";
}
echo json_encode($response);


?>