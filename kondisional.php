<?php
//Kondisional IfElse-----------
$suhu = 40;

if ($suhu > 38){
    echo "Kamu tidak boleh masuk";
}elseif ($suhu == 38){
    echo "Kamu hati-hati";
}else{
    echo "Kamu boleh masuk";
}

echo "  ";

//Kondisional Switch-----------
$warna='Merah';

switch ($warna){
    case 'Merah':
        echo 'Berhenti';
        break;
    case 'Kuning':
        echo 'Siap';
        break;
    case 'Hijau':
        echo 'Jalan';
        break;

    default:
        echo 'Lampu Rusak';
        break;
}
