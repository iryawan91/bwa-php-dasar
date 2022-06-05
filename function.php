<?php

function bilanghalo(){
    echo 'Halo'."</br>";
}

function inputnama($nama){
    echo 'Halo, '.$nama."!</br>";
}

function tambah($a,$b){
    $total = $a + $b;
    echo 'Total : ' .$total;
}

bilanghalo();
inputnama("Dede");
inputnama("Kote");
tambah(9,4);