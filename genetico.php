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
    public function media_fitness($qtdIndividuos, $qtdGenes, $destino)
    {
        for($x = 1;$x <= $qtdIndividuos; $x++){
            //$somatoria = array_reduce(Genetico::fitness($x, $qtdGenes, $destino));
        }
        //return $somatoria / (length($qtdIndividuos) * 1.0);
    }
}



$qtdGenes       = 1;
$qtdIndividuos  = 1;

$populacao = Genetico::populacao($qtdIndividuos, $qtdGenes);

var_dump($populacao);

//$f = Genetico::fitness($qtdIndividuos, $qtdGenes);

//print_r($f);
?>