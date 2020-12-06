<?php

require "./link.php";

class Produtos
{
    public $id;
    public $categorias;
    public $descricao;
    public $preco;
    public $preco_venda;
    public $imagem; 
    public $categoria;
    
    public static function getAll()
    {
        $connection = Connection::getDb();

        $stmt = $connection->query("SELECT id, descricao, preco, preco_venda, imagem, categoria FROM produtos JOIN categorias ON produtos.id_categorias = categorias.id_categorias");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }
        
   public static function Join()
   {
       $connection = Connection::getDb();

     $stmt = $connection->query("SELECT descricao, preco, preco_venda, imagem, categoria FROM produtos JOIN categorias ON produtos.id_categorias = categorias.id_categorias");
       return $stmt->fetchAll(PDO::FETCH_ASSOC);
       
   }
}   
