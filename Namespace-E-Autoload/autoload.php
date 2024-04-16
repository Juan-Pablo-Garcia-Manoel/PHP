<?php

spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', '/', $class) . '.php';

    if (file_exists("Info_Produto/{$classPath}") && file_exists("Cesta/{$classPath}") &&  file_exists("Produtos/{$classPath}")) {
        require_once "Info_Produto/{$classPath}";
        require_once "Cesta/{$classPath}";
        require_once "Produtos/{$classPath}";
        return true;
    }

    if (file_exists($classPath)) {
        require_once $classPath;
        return true;
    }

    return false;
});
