<?php
namespace HoraDeMudar;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


require __DIR__.'/../vendor/autoload.php';
$request = Request::createFromGlobals();
$response = Response::create();


$conteudo = '<h2> Galão da Massa </h2>';
$response->setContent($conteudo);

$response->send();

?>	
