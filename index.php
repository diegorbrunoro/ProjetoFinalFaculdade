<?php
session_start();

define('ROOT_DIR', __DIR__);
define('APP_URL', 'http://projet-final-diego.test/');

#-> Loading dependencies
require __DIR__ . '/core/bootstrap.php';

#-> Simple routes
$request = $_SERVER['REQUEST_URI'];

try {
    switch ($request) {
        case "/":
            return route("GET", "LoginController", "index");
            break;
        case "/registrar":
            return route("POST", "LoginController", "login");
            break;
        case "/home":
            return route("GET", "HomeController", "index");
            break;
    }
} catch (Exception $e) {
    echo "<pre>";
    die(print_r($e));
}
