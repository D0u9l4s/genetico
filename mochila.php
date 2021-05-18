<?php
//import class genetico
require_once 'genetico.php';
$C_Genetico = new Genetico;

//array dos itens mochila. trocar depois pela leitura do arquivo
$array_itens = array(
    array("peso"=> 1, "valor"=> 80),
    array("peso"=> 2, "valor"=> 20),
    array("peso"=> 3, "valor"=> 100),
    array("peso"=> 4, "valor"=> 60),
    array("peso"=> 4, "valor"=> 30)
);

//define peso maximo da mochila
$max_peso = 5;

//tamanho populacao
$populacao_size = 2;

//qtd de geracoes
$geracoes_size = 1;

//cria populacao
$populacao_creat = $C_Genetico->populacao($populacao_size, $array_itens);

?>