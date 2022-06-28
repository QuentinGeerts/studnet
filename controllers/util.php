<?php

/*
    Create a GUID
*/

function createGUID()
{
    if (function_exists('com_create_guid')) return trim(com_create_guid(), '{}');

    mt_srand((float)microtime() * 10000);

    $set_charid = strtoupper(md5(uniqid(rand(), true)));
    $set_hyphen = chr(45);
    $set_uuid = chr(123)
        . substr($set_charid, 0, 8) . $set_hyphen
        . substr($set_charid, 8, 4) . $set_hyphen
        . substr($set_charid, 12, 4) . $set_hyphen
        . substr($set_charid, 16, 4) . $set_hyphen
        . substr($set_charid, 20, 12)
        . chr(125);
    return $set_uuid;
}