<?php

$characters = "abcdefghijklmnopqrstuvwxyz!@#$%^&*-.ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
$password = ' ';

$length = "{query}";

for ($i = 0; $i < $length; $i++) {
    $randomNumber = rand(0, strlen($characters));
    $currentCharacter = $characters[$randomNumber - 1];
    $password .= $currentCharacter;
}

echo $password;
