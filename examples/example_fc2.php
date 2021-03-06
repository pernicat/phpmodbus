<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Create Modbus object
$modbus = new Phpmodbus\ModbusMaster("192.192.15.51", "UDP");

try {
    // FC 2
    $recData = $modbus->readInputDiscretes(0, 12288, 12);
}
catch (Exception $e) {
    // Print error information if any
    echo $modbus;
    echo $e;
    exit;
}

// Print status information
echo "</br>Status:</br>" . $modbus;

// Print read data
echo "</br>Data:</br>";
var_dump($recData); 
echo "</br>";