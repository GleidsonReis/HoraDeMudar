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
$response = Response::create();



$matcher = new UrlMatcher($rotas, $contexto);// verifico se tem uma rota compativel com oque veio da URL


//print_r($matcher->match($contexto->getPathInfo()));
//print_r($matcher->match('/esporte'));
        
try {
    $atributos = $matcher->match($contexto->getPathInfo());// Aqui pego a Informação que o cara Digitou
    $controller = $atributos['_controller'];
    $method = $atributos['method'];
    $parametros ='';
    $obj = new $controller($response, $contexto);
    $obj->$method();
    
    
} catch (Exception $ex) {
    $response->setContent('Deu erro em algo acima', Response::HTTP_NOT_FOUND);
  
    
}



$response->send();







/*        

$conteudo = '<h2> Galão da Massa </h2>';
$response->setContent($conteudo);

$response->send();*/
?>	
