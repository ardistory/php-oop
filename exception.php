<?php

require_once 'data/LoginRequest.php';
require_once 'data/ValidationLoginRequest.php';
require_once 'data/ValidationException.php';

$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try {
    ValidationLoginRequest($loginRequest);
} catch (ValidationException | Exception $exception) {
    echo "Error : " . $exception->getMessage();
}
