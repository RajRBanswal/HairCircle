<?php


session_start();


if(!isset($_SESSION['countdown'])){

    $_SESSION['countdown'] = 120;
    $_SESSION['time_started'] = time();
}

$now = time();

$timeSince = $now - $_SESSION['time_started'];

$remainingSeconds = abs($_SESSION['countdown'] - $timeSince);

//  

if($remainingSeconds < 1){

}