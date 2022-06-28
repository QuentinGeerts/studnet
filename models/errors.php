<?php

/*
    Register
*/

$error_register = [
    'duplicate_email' => ''
];



function alert(bool $success, string $message_alert): string
{
    return "<div class='alert alert-" . ($success ? 'success' : 'danger') . "'>$message_alert</div>";
}

function feedback(bool $success, string $message_feedback)
{
    return "<div class='" . (!$success ? 'in' : '') . "valid-feedback'>$message_feedback</div>";
}

function response(bool $success, string $code = null, string $message = null): array
{

    return ["success" => $success, "error" => [
        "code" => $code,
        "message" => $message
    ]];
}
