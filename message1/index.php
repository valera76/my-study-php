<?php

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    include __DIR__ . '/form.html';    
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include __DIR__ . '/action.php';
    include __DIR__ . '/form.html';
    exit;
}

