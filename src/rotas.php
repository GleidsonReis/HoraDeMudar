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
$rotas->add('produtos', new Route('/produtos',
        array('_controller' => 'HoraDeMudar\Controller\ControllerEsporte',"method" => 'listarProdutos')));

$rotas->add('cadastro', new Route('/cadastro',
        array('_controller' => 'HoraDeMudar\Controller\ControllerCadastro',"method" => 'show')));


$rotas->add('formCadastro', new Route('/formularioCadastro',
        array('_controller' => 'HoraDeMudar\Controller\ControllerCadastro',"method" => 'cadastro')));


return $rotas;

