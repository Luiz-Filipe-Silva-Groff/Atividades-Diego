<?php

$json = file_get_contents('php://input');
$obj = json_decode($json);

if ($obj->action == 'saveDados') {
    $handle = fopen('cadastro.txt', 'a'); 
    fwrite($handle, $obj->nome);
    fwrite($handle, $obj->usuario);
    fclose($handle);

    // header('Content-Type: text/plain; charset=utf-8', true, 202);
    // echo 'e-mail ' . $obj->email . ' gravado com sucesso';

    header('Content-Type: application/json; charset=utf-8', true, 202);
    echo json_encode(
        ['status' => 'ok', 'message' => 'nome ' . $obj->nome . '. usuário:' . $obj->usuario . ' gravado com sucesso'],
       
    );
}
