<?php

header('Content-Type: application/json');

$status = "OK";

$data = (object) [
    'date' => date("d/m/Y h:i:s"),
    'status' => $status
];

echo json_encode($data);

?>