<?php
namespace HoraDeMudar;

require __DIR__.'/../vendor/autoload.php';


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;



// rota apropriada -> controlador que vai interceptar a requisição
include 'rotas.php';

$contexto = new RequestContext();
$contexto->fromRequest(Request::createFromGlobals());
$response = Response::create();
    
$matcher = new UrlMatcher($rotas, $contexto);
//print_r($contexto->getPathInfo());


$loader = new FilesystemLoader(__DIR__.'/View');
$environment = new Environment($loader);

try {
    $atributos = $matcher->match($contexto->getPathInfo());
    
    
    $controller = $atributos['_controller'];
    $method = $atributos['method'];
    $obj = new $controller($response, $contexto, $environment);
    $parametros = $atributos['suffix'];
/*    $parametros = '';
    if (isset($atributos['sufix']))
        
*/
    $obj->$method($parametros);
} catch (Exception $ex) {
    $response->setContent('Not found fde', Response::HTTP_NOT_FOUND);
}
$response->send();
?>