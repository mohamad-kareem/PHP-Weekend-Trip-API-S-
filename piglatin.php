<?php

if (isset($_POST["input"])) {
    $string = $_POST["input"];
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $consonants = '';
    $i = 0;
    while (!in_array($string[$i], $vowels) && $i < strlen($string)) {
        $consonants = $consonants . $string[$i];
        $i++;
    }
    $newStr = substr($string, $i) . $consonants . 'ay';
    echo json_encode(['piglatin' => $newStr]);
} else {
    echo json_encode(['error' => 'No input string specified']);
}

?>
