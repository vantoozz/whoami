<?php declare(strict_types = 1);

echo json_encode([
    'post' => $_POST,
    'get' => $_GET,
    'headers' => getallheaders(),
    'remote_address' => $_SERVER['REMOTE_ADDR']??null,
]);