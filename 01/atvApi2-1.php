<?php

$json = file_get_contents('php://input');
$obj = json_decode($json);

if ($obj->action == 'saveDados') {
    echo 'gravando ' . $obj->nome, $obj->usuario;
}
