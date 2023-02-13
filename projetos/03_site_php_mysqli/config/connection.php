<?php

// Credenciais do banco de dados
$host = DBHOST;
$user = DBUSER;
$password = DBPASS;
$dbname = DBNAME;
$port = DBPORT;

// Conexao com o banco de dados usando a porta
//$conn = mysqli_connect($host . ":" . $port, $user, $password, $dbname);

// Conexao com o banco de dados sem a porta
$conn = mysqli_connect($host, $user, $password, $dbname);

if($conn){
    //echo "Conexão realizada com sucesso!<br>";
}else{
    die("Erro - 002: Por favor tente novamente. Caso o problema persista, entre em contato o administrador " . EMAIL);
}