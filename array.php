<?php

//array

    //indexed array => key menggunakan angka
    $a = ["BMW","Tesla","Honda"];
    // var_dump($a);
    echo $a[1] ."</br>";

    //assosiatif array
    $b =[
        "indonesia" => "Bandrek",
        "malaysia" => "Teh Tarik",
        "usa" => "Cola",
        "jepang" => "Sake"
    ];
    // var_dump($b);
    echo $b['usa'] ."</br>";


    //multidimensional array =>array di dalam array
    $c =[
        'a'=>$a,
        'b'=>$b
    ];

    $d =[
        'c'=>$c,
        'lainnya'=>[1,2,5,6,8]
    ];

    //var_dump($c);
    //var_dump($d);
    echo $c['a'][2] ."</br>";
    echo $d['c']['b']['jepang'] ."</br>";