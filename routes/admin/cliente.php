<?php

/**
 * Listar com ação de deletar
 */
$app->get('/clientes', function ($request, $response, array $args) {

    $url =  $_SERVER["HTTP_HOST"]."/api/cliente";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    $returnJson = json_decode($return);
    $args["lista"] = $returnJson;

    return $this->renderer->render($response, 'admin/cliente/index.php', $args);
});


/**
 * Cadastar
 */
$app->get('/clientes/criar', function ($request, $response, array $args) {

    return $this->renderer->render($response, 'admin/cliente/criar.php', $args);
});

$app->post('/clientes/criar', function ($request, $response) {

    $url = $_SERVER["HTTP_HOST"] . "/api/cliente";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParsedBody());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    if ($return != ""){
        return $response->withRedirect('/clientes');
    }

    return $response->withRedirect('/clientes/criar');
});


/**
 * Editar
 */
$app->get('/clientes/editar/[{id}]', function ($request, $response, array $args) {

    $url =  $_SERVER["HTTP_HOST"]."/api/cliente/".$args['id'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    $returnJson = json_decode($return);
    $args["dados"] = $returnJson;

    return $this->renderer->render($response, 'admin/cliente/editar.php', $args);
});

$app->post('/clientes/editar/[{id}]', function ($request, $response, array $args) {

    $url = $_SERVER["HTTP_HOST"] . "/api/cliente/".$args['id'];

    print_r($request->getParsedBody());

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_PUT, 1);
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("cache-control: no-cache", "content-type: application/x-www-form-urlencoded"));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParsedBody());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);


    if ($return != ""){
        return $response->withRedirect('/clientes');
    }

    return $response->withRedirect('/clientes/editar');

});