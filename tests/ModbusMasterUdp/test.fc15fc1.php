<?php
require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/../config.php';

// Create Modbus object
$modbus = new Phpmodbus\ModbusMasterUdp($test_host_ip);



// Data to be writen - BOOL array
$data = array(1, 0, TRUE, TRUE, 0, 1, TRUE, TRUE, 
              1, 1, TRUE, TRUE, 0, 0, FALSE, FALSE,
              0, 0, FALSE, FALSE, 1, 1, TRUE, TRUE,
              1, 1, TRUE, TRUE, 1, 1, TRUE, TRUE);
// Write data - FC 15
$modbus->writeMultipleCoils(0, 12288, $data);
echo $modbus->status;
$modbus->status = "";
echo "\n\n";
// Read data - FC 1
$recData = $modbus->readCoils(0, 12288, 32);
echo $modbus->status;
echo "\n\n";
var_dump($recData);