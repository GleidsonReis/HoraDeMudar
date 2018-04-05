<?php
namespace HoraDeMudar\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RequestContext;
/*
 * 
 * 
 */
class ControllerEsporte {
    
    private $response;
    private $contexto;
    
    public function __construct(Response $response, RequestContext $contexto) {
        $this->response = $response;
        $this->contexto = $contexto;
    }
    
    public function msgInicial($parametro= ''){

//criar um onjeto do tipo entidade // buscar no banco de dados
      return $this->response->setContent('Categoria: '.$parametro);
        
    }
}
