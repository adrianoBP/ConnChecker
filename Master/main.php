<?php

$configFile = json_decode(file_get_contents("./config.json"), true);

$clientAddress = $configFile["Clients"][0];

$response = file_get_contents($clientAddress);

?>