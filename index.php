<?php
// include 'config.php';
class App
{
    protected $files = [
        '/config',
        '/core/base_controller',
        '/core/base_model',
        '/core/database'
    ];

    public function __construct()
    {
        foreach ($this->files as $file) {
            require_once __DIR__ . $file . '.php';
            // new $file();
        }
    }

    public function run()
    {
    }
}

$app = new App();
$app->run();
