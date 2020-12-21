<?php

class Controller
{
    public $data = [];


    /**
     * Add data to a view
     * @param array $args value to pass to the view
     */
    public function set(array $args): void
    {
        $this->data = array_merge($this->data, $args);
    }

    public function render(string $view): void
    {
        // get data we want to pass to a view
        extract($this->data);

        // get controller's name who call the method
        $controller = get_class($this);
        $controller = substr($controller, 0, -10);
        $controller = strtolower($controller);

        // try to get the view we want to display
        if (file_exists('views/' . $controller . '/' . $view . '.php')) {
            d('find view');
        }
    }
}
