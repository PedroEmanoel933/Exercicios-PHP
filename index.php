<?php

//IRMÃO DO CONSOLE.LOG()
echo"<h1>Hello World!</h1>"; //É possível criar elementos 
echo "<hr>";

$nome = "Beatriz";
$idade = 18;
echo $nome . "<br>";

if($nome === 'Beatriz' and $idade === 18){
    echo $nome . " tem ". $idade . " anos, já pode ser presa mocreia :) <br>";
}

//FUNÇÃO
function saudacao( string $nome): string {
   return "Olá, " . $nome; 
}

echo saudacao($nome) . "<br>";

//Debugando variáveis
var_dump($nome, $idade);
?>