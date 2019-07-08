<?php
use App\appRoute;
use Slim\Http\Environment;
use Slim\Http\Request;
use PHPUnit\Framework\TestCase;

class ListaClienteNoventenaTest extends TestCase
{
    protected $app;


    public function setUp(): void
    {
        $settings = require __DIR__ . '/../src/settings.php';
        $this->app = (new appRoute($settings))->get();
    }

    public function testListaClientesGet() {
        $env = Environment::mock([
            'REQUEST_METHOD' => 'GET',
            'REQUEST_URI'    => '/api/clienteNoventena',
        ]);
        $req = Request::createFromEnvironment($env);
        $this->app->getContainer()['request'] = $req;
        $response = $this->app->run(true);

        $responseBody = json_decode($response->getBody(), true);

        $this->assertSame($response->getStatusCode(), 200);
        $this->assertSame($responseBody['success'], true);
    }
}