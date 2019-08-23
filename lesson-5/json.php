<?php
header('Content-Type: application/json');

$data = [
    'v1' => 1,
    'v2' => 2,
    'v3' => 3,
    'v4' => 4,
];
echo json_encode($data);