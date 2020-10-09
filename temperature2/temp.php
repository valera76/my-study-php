<?php

$Fah = '';
$Cel = '';

if (isset($_POST['Fahrenheit'])) {
    $F = (int) $_POST['Fahrenheit'];
    $Cel = (($F - 32) / 1.8);
}
    echo $Cel;

if (isset($_POST['Celsius'])) {
    $C = (int) $_POST['Celsius'];
    $Fah = ($C * 1.8 + 32);
}
    echo $Fah;




   

