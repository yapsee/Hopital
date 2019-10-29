<?php

function create_id(string $id = '')
{
    $rand = bin2hex(random_bytes(6));
    return strtoupper($id).'-'.str_shuffle($rand);
}

function create_passwd():string
{
    $rand = bin2hex(random_bytes(3));
    return str_shuffle($rand);
}


