<?php
include "conexao.php";

$produto = $_POST['produto'];
$comprador = $_POST['comprador'];


$estoque = "SELECT `estoque` FROM `produto` WHERE `nome` = '$produto'";

if($estoque > 0){
    $novo_estoque = $estoque - 1;

    $query = "UPDATE `produto` SET `estoque`= '$noco_estoque' WHERE `nome` = '$produto'";

}
?>