<?php
namespace App;

use Slim\Views\PhpRenderer;

class appRoute
{
    /**
     * Stores an instance of the Slim application.
     * @var \Slim\App
     */
    private $app;

    public function __construct($settings)
    {
        $app = new \Slim\App($settings);

        $container = $app->getContainer();
        $container['renderer'] = new PhpRenderer("./templates");

        // Set up dependencies
        $dependencies = require __DIR__ . '/../src/dependencies.php';
        $dependencies($app);

        // Register middleware
        $middleware = require __DIR__ . '/../src/middleware.php';
        $middleware($app);


        // Register routes
        $routes = require __DIR__ . '/../src/routes.php';
        $routes($app);

        //
        // Database
        $container->get("db");

        // Models
        require_once __DIR__ . '/../models/cliente.php';
        require_once __DIR__ . '/../models/pesquisa.php';
        require_once __DIR__ . '/../models/envio.php';

        // Routes
        require_once __DIR__ . '/../routes/admin.php';
        require_once __DIR__ . '/../routes/api.php';

        $this->app = $app;

    }
    /**
     * Get an instance of the application.
     * @return \Slim\App
     */
    public function get()
    {
        return $this->app;
    }
}