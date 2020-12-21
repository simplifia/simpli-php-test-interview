<?php
// autoload controller and model files when we need to use them
spl_autoload_register(function ($class) {
    // check if we need a controller or a model
    if (preg_match('/Controller$/', $class)) {
        // delete 'Controller' of class name
        $controller = substr($class, 0, -10);

        if (file_exists('controllers/' . $controller . '.php')) {
            d('controller found');
        }
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
