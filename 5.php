<?php

function ganti_huruf($string, $dari, $ke) {
    $arr_string = str_split($string,1);

    for ($i=0; $i < count($arr_string); $i++) { 
        if($arr_string[$i] == $dari) {
            $arr_string[$i] = $ke;
        }
    }

    return implode($arr_string);
}

echo ganti_huruf("arkademy", "a", "o");