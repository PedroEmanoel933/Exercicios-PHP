<?php
    $valorProduto = 89.90;
    $desconto = $valorProduto * 0.15;
    $valorFinal = $valorProduto - $desconto;

    echo "Preço do produto: R$ ". $valorProduto ."<br>Desconto: 15% <br> Valor final: R$ ". $valorFinal; 
?>