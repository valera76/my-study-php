<?php

$name = $_POST['name'];
$note = $_POST['note'];

file_put_contents(__DIR__.'/notes', "$name\n$note\n", FILE_APPEND); 

echo file_get_contents(__DIR__.'/notes');







