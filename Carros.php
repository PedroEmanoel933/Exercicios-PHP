<?php

//CLASSE
class Carro {

    //ATRIBUTOS
    public $cor;
    public $modelo;
    public $marca;

    public function acelerar(){
        echo "Velozes e Furiosos ☂";
    }
    public function frear(){
        echo "🚓🚓🚓🚨🚨🚨 PARE O CARRO!!!⭐⭐⭐⭐⭐";
    }
}

// HERANÇA
class CarroEletrico extends Carro {
    //POLIMOFORMISMO
    public $autonomia;

    public function recarregar(){
        echo "Recarregando... 🔋🔋🔋";
    }
}

?>