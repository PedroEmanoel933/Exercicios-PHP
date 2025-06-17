<?php

/**
 * @param string $email Endereço de e-mail a ser validado
 * @return bool resultado booleano da validação
 */

function validarEnderecoEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

$diadaSemana = 1;
switch ($diadaSemana) {
    case 1:
        echo "Domingo";
        break;
    case 2:
        echo "Segunda-Feira";
        break;
    case 3:
        echo "Terça-Feira";
        break;
    case 4:
        echo "Quarta-Feira";
        break;
    case 5:
        echo "Quinta-Feira";
        break;
    case 6:
        echo "Sexta-Feira";
        break;
    case 7:
        echo "Sábado";
        break;
    default:
        echo "O número informado não equivale a um dia de semana válido";
}

$resultado = match ($diadaSemana) {
    1 => "Domingo",
    2 => "Segunda-Feira",
    3 => "Terça-Feira",
    4 => "Quarta-Feira",
    5 => "Quinta-Feira",
    6 => "Sexta-Feira",
    7 => "Sábado",
    default => "O número informado não equivale a um dia de semana válido"
};

echo "<br>";
echo $resultado;
?>