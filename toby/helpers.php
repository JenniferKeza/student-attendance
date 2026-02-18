<?php

use JetBrains\PhpStorm\NoReturn;

if (!function_exists('dd')) {
    #[NoReturn]
    function dd($var): void
    {
        var_dump($var);
        die();
    }
}
if (!function_exists('env')) {
    function env(string $key): mixed
    {
        return $_ENV[$key];
    }
}
