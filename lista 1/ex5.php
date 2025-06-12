<?php
    $pontuacao = 100;
    $jogos = 0;
    $vitoria = 20;
    $derrota = 15;
    $status = true;
    $pontuacaofinal = 0;
    $qtd1 = 0;
    $qtd2 = 0;
    
    for($jogos = 1; $jogos<4; $jogos++){
        echo "Rodada ". $jogos. " = Derrota<br>";    
        $status = false;
        $qtd1++;
    } 
    for($jogos = 4; $jogos <11; $jogos++){
        echo "Rodada ". $jogos. " = Vitória<br>";
        $status = true;
        $qtd2++;
    }

    $pontuacaofinal = $pontuacao - ($derrota * $qtd1) + ($vitoria * $qtd2);

    echo 'Pontuação Final: '. $pontuacaofinal;
?>