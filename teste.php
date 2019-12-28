<?php
$host = 'localhost';
$user = 'root';
$pass = '132465';
$bd   = 'bd_teste';
$conexao = new mysqli($host, $user, $pass, $bd);

// verifica se houve erro na conexão
if(!$conexao){
    echo "ERROR: " . $conexao->error;
}
