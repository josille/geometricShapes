<?php

// spl_autoload_register includes all files inside class folder
spl_autoload_register(function ($className) {
    $file = __DIR__ . '/classes/' . $className . '.php';
    if (file_exists($file)) {
        include_once $file;
    }
});
