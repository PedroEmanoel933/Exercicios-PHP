<?php
    require "Carros.php";
    require "Animais.php";

    //OBJETO (INSTÂNCIA DE UMA CLASSE)
    $carro = new Carro();
    $carro2 = new Carro();
    
    $gato = new Gato();
    echo emitirSom($gato);  

    // USO DA HERANÇA
    $carroEletrico = new CarroEletrico();

    $carroEletrico -> cor = "Branco";
    $carroEletrico -> marca = "BYD";
    $carroEletrico -> modelo = "SEAL";
    $carroEletrico -> autonomia = "372km";

    // ATRIBUTOS ESPECÍFICOS DE CADA OBJETO
    $carro -> cor ="Preto";
    $carro -> marca = "Fiat";
    $carro -> modelo = "Uno Velho";

    $carro2 -> cor = "Roxo";
    $carro2 -> marca = "BMW";
    $carro2 -> modelo = "320I 2.0 16V Turbo M Sport";

    echo "Cor: ". $carro->cor . "<br>" . "Marca: ". $carro-> marca. "<br>" . "Modelo: " . $carro->modelo;
    echo  "<hr>" . "Cor: " . $carro2->cor . "<br>" . "Marca: ". $carro2-> marca. "<br>". "Modelo: " . $carro2->modelo;
    echo "<hr>Cor: ". $carroEletrico->cor . "<br>Marca: ". $carroEletrico-> marca. "<br>Modelo: " . $carroEletrico->modelo . "<br>Autonomia: " . $carroEletrico -> autonomia;

?>