<?php

spl_autoload_register(function($classname) {
    $mappen = [
        __DIR__ . '/../models/',
        __DIR__ . '/../includes/',
    ];

    foreach ($mappen as $map) {
        $bestand = $map . $classname . '.php';
        if (file_exists($bestand)) {
            require_once $bestand;
            return;
        }
    }
});

