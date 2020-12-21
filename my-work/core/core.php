<?php
// autoload controller and model files when we need to use them
spl_autoload_register(function ($class) {
    // check if we need a controller or a model
    if (preg_match('/Controller$/', $class)) {
        d($class);
    } elseif (preg_match('/Model$/', $class)) {
        d($class);
    }
});

// FUNCTION FOR DEBUG
function p($data = null)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function d($data = null)
{
    p($data);
    die;
}
