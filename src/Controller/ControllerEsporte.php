<?php
namespace HoraDeMudar\Controller;

 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\Routing\RequestContext;
 use HoraDeMudar\Modelos\ModeloProdutos;
 use Twig\Environment;
 
 class ControllerEsporte {
    
    private $response;
    private $contexto;
    private $twig;
    
    public function __construct(Response $response, RequestContext $contexto, Environment $twig) {
        $this->response = $response;
        $this->contexto = $contexto;
        $this->twig = $twig;
    }
    
    public function msgInicial($parametro){
      if (!is_numeric($parametro) && $parametro !=''){
          $parametro = 'nao localizado';
      }
      
      $modelos = new ModeloProdutos();
      $dados = $modelos->listarProdutos();
//criar um objeto do tipo entidade // buscar os dados no banco  de dado 
       return $this->response->setContent($this->twig->render('produtos.twig'));
    }
    
    
     public function listarProdutos(){
         $modelo = new ModeloProdutos();
         $dados = $modelo->listarProdutos();
         return $this->response->setContent($this->twig->render('produtos.twig', ['dados'=>$dados]));
         
         
     }
      
      
}

