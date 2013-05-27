<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lbrandin
 * Date: 5/23/13
 * Time: 12:43 PM
 * To change this template use File | Settings | File Templates.
 */

class Produto {
    private $nome_prod;
    private $preco_prod;
    private $qtde_estoque;

    function _construct($nome_prod, $preco_prod, $qtde_estoque){
        $this->nome_prod = $nome_prod;
        $this->preco_prod = $preco_prod;
        $this->qtde_estoque = $qtde_estoque;
    }
}