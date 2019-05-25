<?php

function betweenDays($start = null, $end = null) {

    // cek jika parameter kosong
    if($start == null || $end == null) {
        echo "Parameter null";
        exit();
    }

    // array kosong
    $array = array(); 

    // interval 1 hari
    $interval = new DateInterval('P1D'); 
  
    $realEnd = new DateTime($end); 
    $realEnd->add($interval); 
  
    $period = new DatePeriod(new DateTime($start), $interval, $realEnd); 
  
    // looping
    foreach($period as $date) {                  
        $array[] = $date->format('Y-m-d');  
    } 
  
    //return
    return $array; 
}

print_r(betweenDays('2019-01-01', '2019-01-10'));