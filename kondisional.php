<?php

$suhu = 40;

if ($suhu > 38){
    echo "Kamu tidak boleh masuk";
}elseif ($suhu == 38){
    echo "Kamu hati-hati";
}else{
    echo "Kamu boleh masuk";
}