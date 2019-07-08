<?php

/**
 * Listar
 */
$app->get('/envios', function ($request, $response, array $args) {


    $url =  $_SERVER["HTTP_HOST"]."/api/envio";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $return = curl_exec($ch);
    curl_close($ch);

    $returnJson = json_decode($return);
    $args["lista"] = $returnJson;


    return $this->renderer->render($response, 'admin/envio/index.php', $args);
});