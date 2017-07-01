<?php declare(strict_types = 1);

if (!function_exists('getallheaders')) {
    function getallheaders()
    {
        $headers = [];
        foreach ($_SERVER as $name => $value) {
            if (0 === strpos($name, 'HTTP_')) {
                $headers[str_replace(' ', '-', ucwords(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
            }
        }
        return $headers;
    }
}

echo json_encode([
    'post' => $_POST,
    'get' => $_GET,
    'headers' => getallheaders(),
    'remote_address' => $_SERVER['REMOTE_ADDR']??null,
]);