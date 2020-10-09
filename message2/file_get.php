<?php

$lines = file(__DIR__ . '/notes');

foreach ($lines as $line) {
    echo "<p>$line</p>";
}

