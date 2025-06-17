<?php

// IMPORTAÇÃO DE ARQUIVOS
require 'helpers.php';

echo "<hr>";

echo validarEnderecoEmail('ana@example.com'); // VAI APARECER 1, SIGINIFICA QUE É VERDADEIRO
echo validarEnderecoEmail('https//google.com'); // N VAI APARECER NADA, SIGINIFICA QUE É FALSO

//IRMÃO DO CONSOLE.LOG()
echo"<h1>Hello World!</h1>"; //É possível criar elementos 
echo "<hr>";

$nome = "Beatriz";
$idade = 18;
echo $nome . "<br>";

if($nome === 'Beatriz' and $idade === 18){
    echo $nome . " tem ". $idade . " anos, já pode ser presa mocreia :) <br>";
}
/**
 * Função de saudação
 * @param string $nome Nome do usuário
 * @return string Mensagem de saudação com o nome do usário
 * @author Pedro Emanoel <pemaneoel@exemple.com>
 */

//FUNÇÃO
function saudacao( string $nome): string {
   return "Olá, " . $nome; 
}

echo saudacao($nome) . "<br>";

//Debugando variáveis
var_dump($nome, $idade);

//1° FORMA DE CRIAR ARRAY
$arr = array(1,2,3,4,5);

//2° FORMA DE CRIAR ARRAY
$arr2 = [1,2,3,4,5];

echo "<br>";

echo $arr[0] ." ". $arr2[1];

echo "<br>";

forEach($arr2 as $number){
    echo "Número: ". $number . "<br>";
}

// ARRAY ASSOCIATIVO
$usuario = [
    "nome" => "Ivy",
    "idade" => 17,
    "email" => "ivy@example.com"
];


$usuario2 = [
    "nome" => "Beatriz",
    "idade" => 18,
    "email" => "beatriz@example.com"
];

$alunos = [
    "classificacao" => "Os melhores <3 do SENAI",
    "observacao" => "Falantes"
];

//IMPRIMIR ARRAY ASSOCIATIVO
forEach($alunos as $key => $value){
    echo $key . ": " . $value . "<br>";   
}

//ARRAY ASSOCIATIVO MULTIDIMENSIONAL 
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
?>