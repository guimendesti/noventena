<?php

/**
 * GET (all allow send)
 */
$app->get('/clienteNoventena', function($request, $response, $args){

//    // cache 24 hours
//    $resWithExpires = $this->cache->withExpires($response, time() + 3600 * 24);
//    $newResponse = $resWithExpires->withHeader('Content-type', 'application/json')
//        ->withHeader('Access-Control-Allow-Origin', '*')
//        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
//        ->withHeader('Access-Control-Allow-Methods', 'GET');

    // log message
    $this->logger->info("lista clientes liberados para pesquisa ...");

    $data = Cliente::whereRaw('noventena < ? OR noventena IS NULL', [date('Y-m-d')])->get();

    $retorno = array(
        'success' => true,
        'numrows' => count($data),
        'list' => $data
    );

    return $this->response->withJson($retorno, 200);
});

/**
 * GET (check is allow 'noventena' from primary key)
 */
$app->get('/clienteNoventena/[{id}]', function($request, $response, $args){

//    // cache 24 hours
//    $resWithExpires = $this->cache->withExpires($response, time() + 3600 * 24);
//    $newResponse = $resWithExpires->withHeader('Content-type', 'application/json')
//        ->withHeader('Access-Control-Allow-Origin', '*')
//        ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
//        ->withHeader('Access-Control-Allow-Methods', 'GET');

    // log message
    $this->logger->info("checando se cliente liberado para pesquisa ...");

    $data = Cliente::whereRaw('idcliente = ? AND (noventena < ? OR noventena IS NULL)', [$args['id'], date('Y-m-d')])->get();

    $retorno = array(
        'success' => true,
        'allow' => (count($data)>0)
    );

    return $this->response->withJson($retorno, 200);
});


/**
 * GET (list all)
 */
$app->get('/cliente', function ($request, $response) {
    // log message
    $this->logger->info("listando ...");
    $data = Cliente::all();
    return $this->response->withJson($data, 200);
});

/**
 * GET (from primary key)
 */
$app->get('/cliente/[{id}]', function($request, $response, $args){
    // log message
    $this->logger->info("detalhes ...");
    $data = Cliente::find($args['id']);
    return $this->response->withJson($data, 200);
});
/**
 * POST (insert)
 */
$app->post('/cliente', function ($request, $response) {
    // log message
    $this->logger->info("cadastrando ...");
    $dados = $request->getParsedBody();
    $data = Cliente::create([
        'nome' => $dados['nome']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * PUT (update)
 */
$app->put('/cliente/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("atualizando ...");

    $dados = $request->getParsedBody();
    $data = Cliente::where('idcliente', $args['id'])->update([
        'nome' => $dados['nome']
    ]);
    return $this->response->withJson($data, 200);
});

/**
 * DELETE
 */
$app->delete('/cliente/[{id}]', function ($request, $response, $args) {
    // log message
    $this->logger->info("deletando ...");
    $data = Cliente::destroy($args['id']);
    return $this->response->withJson($data, 200);
});