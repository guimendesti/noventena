<?php

/**
 * Listar com ação de deletar
 */
$app->get('/pesquisas', function ($request, $response, array $args) {

    $url =  $_SERVER["HTTP_HOST"]."/api/pesquisa";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    $returnJson = json_decode($return);
    $args["lista"] = $returnJson;

    return $this->renderer->render($response, 'admin/pesquisa/index.php', $args);
});


/**
 * Cadastar
 */
$app->get('/pesquisas/criar', function ($request, $response, array $args) use ($container) {


    return $this->renderer->render($response, 'admin/pesquisa/criar.php', $args);
});

$app->post('/pesquisas/criar', function ($request, $response) {

    $url = $_SERVER["HTTP_HOST"] . "/api/pesquisa";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParsedBody());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    if ($return != ""){
        return $response->withRedirect('/pesquisas');
    }

    return $response->withRedirect('/pesquisas/criar');
});


/**
 * Editar
 */
$app->get('/pesquisas/editar/[{id}]', function ($request, $response, array $args) use ($container) {

    $url = $_SERVER["HTTP_HOST"] . "/api/pesquisa/".$args['id'];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_PUT, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request->getParsedBody());
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    if ($return != ""){
        return $response->withRedirect('/categorias');
    }

    return $response->withRedirect('/categorias/criar');


    return $this->renderer->render($response, 'admin/pesquisa/editar.php', $args);
});