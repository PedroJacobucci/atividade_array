<?php
// Estudando Arrays
    //Função impressão array multidimensional
    $a = array(
        "cliente 1" =>
        array("endereço" => "Rua x, n° 10", "bairro" => "Vila Maria", "cidade" => "São Paulo"),
        "cliente 2" =>
        array("endereço" => "Rua y, n° 101", "bairro" => "Vila Andrade", "cidade" => "Vila Velha"),
        "cliente 3" =>
        array("endereço" => "Rua z, n° 2", "bairro" => "Vila Matilde", "cidade" => "Curitiba")
    );
    echo "<pre>";
    print_r($a);
    echo "</pre>";
?>