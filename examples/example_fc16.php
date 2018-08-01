<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Create Modbus object
$modbus = new Phpmodbus\ModbusMaster("192.192.15.51", "UDP");

// Data to be writen
$data = array(10, -1000, 2000, 3.0);
$dataTypes = array("WORD", "INT", "DINT", "REAL");

try {
    // FC16
    $modbus->writeMultipleRegister(0, 12288, $data, $dataTypes);
}
catch (Exception $e) {
    // Print error information if any
    echo $modbus;
    echo $e;
    exit;
}

// Print status information
echo $modbus;
