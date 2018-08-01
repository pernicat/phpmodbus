<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Create Modbus object
$modbus = new Phpmodbus\ModbusMaster("192.192.15.51", "UDP");

try {
    // FC 3
    $recData = $modbus->readMultipleRegisters(0, 12288, 6);
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
print_r($recData); 
echo "</br>";
