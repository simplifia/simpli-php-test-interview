<?php
// autoload controller and model files when we need to use them
spl_autoload_register(function ($class) {
    // check if we need a controller or a model
    if (preg_match('/Controller$/', $class)) {
        // delete 'Controller' of class name
        $controller = substr($class, 0, -10);

        if (file_exists('controllers/' . $controller . '.php')) {
            require 'controllers/' . $controller . '.php';
        } else {
            echo 'Error 404 - Controller not found';
        }
    } elseif (preg_match('/Model$/', $class)) {
        // delete 'Model' of class name
        $model = substr($class, 0, -5);
        // if model file exist require else error
        if (file_exists('models/' . $model . '.php')) {
            require 'models/' . $model . '.php';
        } else {
            echo 'Error 404 - Model not found';
        }
    }
});
