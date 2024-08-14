<?php

include "framework/framework.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header('location: /');
    exit();
}

try {
    $path = $API->getApiClass($APPLICATION->getEnv('MAIN_TEMPLATE'));
    $instance = new $path();

    echo json_encode($instance($API->action, $API->payload));
} catch (\Exception $e) {
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
}
