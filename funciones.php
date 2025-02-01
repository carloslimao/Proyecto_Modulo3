<?php

function dd($variable)
{
    return die(var_dump($variable));
}

function view($path, $parametros = [])
{
    extract($parametros);
    require "Views/{$path}.view.php";
}

function redirect($path)
{
    header("Location: {$path}");
}
