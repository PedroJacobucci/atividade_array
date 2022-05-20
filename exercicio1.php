<?php
    $sortear = rand(1,6);
    switch($sortear){
        case 1:
            echo "Você errou!";
            break;
        case 2:
            echo "pule 2 casas!";
            break;
        case 3:
            echo "Presente para Você! Avance 6 casas!";
            break;
        case 4;
            echo "Fique uma rodada sem jogar!";
            break;
        case 5;
            echo "Avance 4 casas!";
            break;
        default:
            echo "Você perder a vez!";
            break;
    }
?>