<?php

//operator aritmatika
//+ , - , * , /

$a = 10;
$b = 15;

$total = $a / $b;
echo 'Total Aritmatika : ', $total;

//operator assigmnet;
$c = 10;
$d = 15;

$total2 = 10;
$total2 = $total2 + $c;
//$total2 *= $d;

echo ' | Total Assigment : ', $total2;

//operator pembanding
$x = 6;
$y = 9;

$komparansi = ($x <= $y);
echo ' | Hasil Komparansi : ', var_dump($komparansi);

//operator increment / decremenat;

$o = 5;
$p = 8;
$o++;
$p--;

echo ' | Hasil Increment : ', $o;
echo ' | Hasil Decrement : ', $p;


//operator string
$f ='Hallo';
$g = ' World';

echo ' | Gabungan String : ', $f . $g;