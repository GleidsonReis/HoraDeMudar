<?php
namespace HoraDeMudar\Rotas;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$rotas = new RouteCollection();



$rotas->add('esporte', new Route('/esporte', array('_controller' => 'HoraDeMudar\Controller\ControllerEsporte',"method"=>'msgInicial')));
$rotas->add('esporte', new Route('/financas', array('_controller' => 'HoraDeMudar\Controller\ControllerFinancas',"method"=>'msgInicial')));
$rotas->add('esporte', new Route('/produtos', array('_controller' => 'HoraDeMudar\Controller\ControllerProdutos',"method"=>'msgInicial')));


return $rotas;

