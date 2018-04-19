<?php

require_once('function/serial_proses.php');

//defining arduino port
$port = "/dev/ttyACM1";
$port = (string)$port;

//get data from ajax call
$act = $_POST['act'];
$command = $_POST['command'];

if($act=='write'){
    serial_write($command, $port);
    echo "Perintah :". $command;
}else if($act=='read'){
    $result = serial_read($command, $port);
    echo $result;
}