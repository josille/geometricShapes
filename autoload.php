<?php

// spl_autoload_register includes all files inside class folder
spl_autoload_register(function ($className) {
    $file = 'classes/' . $className . '.php';
    if (file_exists($file)) {
        include $file;
    }
});
