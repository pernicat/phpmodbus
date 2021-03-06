<?php

require_once __DIR__ . '/../vendor/autoload.php';

// Create Modbus object
$modbus = new Phpmodbus\ModbusMaster("192.192.15.51", "UDP");

// Data to be writen
$data = array(TRUE, FALSE, TRUE, TRUE, FALSE, TRUE, TRUE, TRUE, 
              TRUE, TRUE, TRUE, TRUE, FALSE, FALSE, FALSE, FALSE,
              FALSE, FALSE, FALSE, FALSE, TRUE, TRUE, TRUE, TRUE,
              TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE, TRUE);

try {
    // FC15
    $modbus->writeMultipleCoils(0, 12288, $data);
}
catch (Exception $e) {
    // Print error information if any
    echo $modbus;
    echo $e;
    exit;
}

// Print status information
echo $modbus;
