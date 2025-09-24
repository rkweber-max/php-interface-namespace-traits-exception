<?php

spl_autoload_register(function (string $class) {
    $caminho = str_replace('ScreenMatch', 'src', $class) . '.php';

    $caminho = str_replace('\\',  DIRECTORY_SEPARATOR, $caminho);

    $caminhoCompleto = __DIR__ . DIRECTORY_SEPARATOR .  $caminho;

    if (file_exists($caminhoCompleto)) {
        require_once $caminhoCompleto;
    }
});
