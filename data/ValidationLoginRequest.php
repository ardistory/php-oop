<?php

function ValidationLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username is null");
    } elseif (!isset($request->password)) {
        throw new ValidationException("Password is null");
    } elseif (trim($request->username) == "") {
        throw new Exception("Username is empty");
    } elseif (trim($request->password) == "") {
        throw new Exception("Password is empty");
    }
}
