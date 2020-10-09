<?php

$Fah = '';
$Cel = '';

if (isset($_POST['Fahrenheit'])) {
    $Fah = (int) $_POST['Fahrenheit'];
    $Cel = (($Fah - 32) / 1.8);
}

if (isset($_POST['Celsius'])) {
    $Cel = (int) $_POST['Celsius'];
    $Fah = ($Cel * 1.8 + 32);
}
  




   

