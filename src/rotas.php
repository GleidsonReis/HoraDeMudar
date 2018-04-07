<?php
namespace HoraDeMudar\Rotas;

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
$rotas = new RouteCollection();

$rotas->add('esporte', new Route('/esportes/{suffix}',
        array('_controller' => 'HoraDeMudar\Controller\ControllerEsporte',"method" => 'msgInicial', 'suffix' => '')));
/* $rotas->add('esporte', new Route('/financas', array('_controller' => 'PPI2\Controller\ControllerFinancas', "method"=>'msgInicialFinancas')));
  $rotas->add('esporte', new Route('/produtos', array('_controller' => 'PPI2\Controller\ControllerProduto', "method"=>'listar')));
 */
return $rotas;

