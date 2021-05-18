<?php
Class Genetico{
    public $qtdGenes       = 1;
    public $qtdIndividuos  = 1;


    //INDIVIDUOS
    /** Descrever */
    function individuos($qtdGenes){
        $individuos = [];
        for($start = 1; $start <= $qtdGenes; $start++){
            $individuos[] = random_int(0, 1);
        }
        return $individuos;
    }

    //POPULACAO
    /** Descrever */
    function populacao($qtdIndividuos, $qtdGenes){
        $populacao = []; 
        for($start = 1; $start <= $qtdIndividuos; $start++){
            array_push($populacao, Genetico::individuos($qtdGenes));
        }
        return $populacao; 
    } 

    //FITNESS 
    /** Descrever */
    function fitness($qtdIndividuos, $qtdGenes, $destino){
        $peso   = 0;
        $valor  = 0;
        $indice = 0;

        for($item = 1; $item <= $qtdIndividuos; $item++){
            if ($item == 1){
                $peso = $peso   + $qtdGenes[$indice]["peso"];
                $peso = $valor  + $qtdGenes[$indice]["valor"];
                $indice++;
            }
        }
        if ($peso > $destino){
            $valor  = 0;
        }

        return abs($valor);
    }

    //MEDIA_FITNESS
    /** Descrever */


    //$populacao = populacao($qtdIndividuos, $qtdGenes);

    //var_dump($fi);

    //$f = fitness($qtdIndividuos, $qtdGenes);

    //print_r($f);

}
?>