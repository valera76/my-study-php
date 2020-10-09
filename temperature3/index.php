<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include __DIR__ . '/form.php';
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include __DIR__ . '/temp.php';
    include __DIR__ . '/form.php';    
    exit;
}


