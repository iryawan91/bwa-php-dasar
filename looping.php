<?php
//Looping akan berjalan ketika kondisi true

$a=1;
$b=1;

while($a <= 15){
    echo 'Looping While saya bernilai : ' .$a. "</br>";
    $a++;
}

//do while akan berjalan dahulu  teerus dicek kondisi nya


do{
    echo 'Looping Do-While saya bernilai : ' .$b. "</br>";
    $b++;
}while($b <= 10);


//looping for

for ($i=1; $i<10; $i++){
    echo 'Looping For saya bernilai : ' .$i. "</br>";
}

//looping foreach untuk mengakses array

$buah=['Apel', 'Mangga', 'Jeruk'];

foreach ($buah as $value){
    echo $value . "</br>";
}


//mengakses no urut aray
foreach ($buah as $key => $value){
    echo $key . "</br>";
}