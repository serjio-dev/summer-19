<?php
$file = 'file/users.csv';
$fileJson = 'file/users.json';

$resours = fopen($file, 'r');

$userData['users'] = [];
while (($data = fgetcsv($resours)) !== false ) {

    printf('Имя: %s %s, дата - %s<br>', $data[0], $data[1], $data[2]);
    $userData['users'][] = $data;
}

$json = json_encode($userData);
file_put_contents($fileJson, $json);