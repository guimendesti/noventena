<?php

$app->group('/api', function () use ($app){

    require_once __DIR__ . '/../routes/api/cliente.php';
    require_once __DIR__ . '/../routes/api/pesquisa.php';
    require_once __DIR__ . '/../routes/api/envio.php';

});