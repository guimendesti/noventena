<?php

/**
 * GET (list all)
 */
$app->get('/envio', function ($request, $response) {
    // log message
    $this->logger->info("listando ...");
    $data = Envio::all();
    return $this->response->withJson($data, 200);
});