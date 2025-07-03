<?php
    class Aluno{
        public $nome;
        public $idade;
        public $matricula;
        public $nota1;
        public $nota2;
        public $peso1;
        public $peso2;
        
        public function caclcularMedia($nota1, $peso1, $nota2, $peso2){
            $media = ($nota1 * $peso1 + $nota2 * $peso2) / ($peso1 + $peso2);
            echo"Média: ". $media;
            return $media;
        }

        public function verificarAprovacao($media){
            if($media >= 7){
                echo"Status: Aprovado";
            } else{
                echo "Status: Reprovado";
            }
        }

        public function exibirDados($nome, $idade, $matricula) {
            echo "Nome: ". $nome . "<br>". "Idade: ". $idade . "<br>". "Matrícula: ". $matricula;
        }
    }
?>