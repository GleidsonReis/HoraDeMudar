<?php
namespace HoraDeMudar\Controller;

 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\RequestContext;
 use HoraDeMudar\Modelos\ModeloProdutos;

 
 class ControllerEsporte {
    
    private $response;
    private $contexto;
    
    public function __construct(Response $response, RequestContext $contexto) {
        $this->response = $response;
        $this->contexto = $contexto;
    }
    
    public function msgInicial($parametro){
      if (!is_numeric($parametro) && $parametro !=''){
          $parametro = 'nao localizado';
      }
      
      
      
//criar um objeto do tipo entidade // buscar os dados no banco  de dado 
       return $this->response->setContent('categoria: '.$parametro);
    }
    
    
     public function listarProdutos(){
         $modelo = new ModeloProdutos();
         $dados = $modelo->listarProdutos();
         return $this->response->setContent(print_r($dados));
         
         
     }
      
      
}

