<?php

header('Content-Type: application/json');

$status = "OK";

$data = (object) [
    'date' => gmdate("d/m/Y H:i:s"),
    'status' => $status
];

echo json_encode($data);

?>