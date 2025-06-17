<?php
    $alunos = [
    "Helber" => [
        "nota" => 8,
    ],

    "Pedro Emanoel"=> [
        "nota"=> 10,
    ],

    "Manuelle"=> [
        "nota"=> 9,
    ]
];

$media = 0;

    foreach($alunos as $alunoNome => $alunoNota) {
        echo "Nome". $alunoNome ."<br>";
        echo "Nota: ". $alunoNota['nota'] ."<br>";

        $media += $alunoNota['nota'] / 3;
    }
 
    echo "Media da turma: ". number_format(num: $media, decimals: 2) .'<br>';
?>