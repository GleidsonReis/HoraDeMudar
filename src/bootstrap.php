<?php
namespace HoraDeMudar;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


require __DIR__.'/../vendor/autoload.php';


// rota apropriada -> controlador que vai interceptar a requisição
include 'rotas.php';



        
        
        
$response = Response::create();
$conteudo = '<h2> Galão da Massa </h2>';
$response->setContent($conteudo);

$response->send();

?>	
