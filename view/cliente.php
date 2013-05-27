<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lbrandin
 * Date: 5/23/13
 * Time: 12:45 PM
 * To change this template use File | Settings | File Templates.
 */

class cliente {
    private $nome;

    function _construct($nome){
        $this->nome = $nome;
    }

$query = "INSERT INTO `compra`.`cliente` (`nome`) VALUES ('Fulano')";


}