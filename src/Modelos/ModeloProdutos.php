<?php
namespace HoraDeMudar\Modelos;

use HoraDeMudar\Util\Conexao;
use PDO;

class ModeloProdutos {
    
    function __construct() {
        
    }

    function listarProdutos(){
        try{
            $sql ='SELECT * FROM produtos';
            $p_sql = Conexao::getInstancia()->prepare($sql);
            $p_sql->execute();
            //return "Estou aquissss";
            return $p_sql->fetchAll(PDO::FETCH_OBJ);
            
        } catch (Exception $ex) {
                echo 'Deu erro na Conexão: '.$ex;
        }
     }
}
