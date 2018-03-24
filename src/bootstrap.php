<?php
namespace HoraDeMudar;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;

require __DIR__.'/../vendor/autoload.php';

// rota apropriada -> controlador que vai interceptar a requisição
include 'rotas.php';

$contexto = new RequestContext();
$contexto->fromRequest(Request::createFromGlobals());
$matcher = new UrlMatcher($rotas, $contexto);


//print_r($matcher->match($contexto->getPathInfo()));
print_r($matcher->match('/esporte'));
        












/*        
$response = Response::create();
$conteudo = '<h2> Galão da Massa </h2>';
$response->setContent($conteudo);

$response->send();*/
?>	
