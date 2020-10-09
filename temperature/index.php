<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo render('', '');    
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include __DIR__ . '/temp.php';
    echo render($Cel, $Fah);
    exit;
}

function render($Cel, $Fah): string {
    $form = file_get_contents(__DIR__ . '/form.html');
    
    return strtr($form, ['AAA' => $Cel, 'ZZZ' => $Fah]);
}

