<?php
date_default_timezone_set("America/Sao_Paulo");

$dbname = "manicure_appointments";

// Verifica se a requisição é do localhost ou de um site HTTPS
if ($_SERVER['HTTP_HOST'] == 'localhost') {
    // Configurações para localhost
    $host = "mysql"; // Altere se necessário
    $user = "root"; // Substitua pelo usuário local
    $pass = "root"; // Substitua pela senha local
} elseif (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    // Configurações para HTTPS
    $host = "127.0.0.1"; // Altere para o host usado em produção
    $user = "banco_remoto"; // Substitua pelo usuário de produção
    $pass = "senha_banco_remoto"; // Substitua pela senha de produção
}

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão estabelecida com êxito!";
} catch(PDOException $e) {
    // echo "Falha na conexão!";
    $error = $e->getMessage();
    echo "Erro: $error";
}








// < ?php
//   date_default_timezone_set("America/Sao_Paulo");

//   $host = "mysql";
//   $user = "root";
//   $pass = "root";
//   $dbname = "manicure_appointments";
//   $dsn = "mysql:host=$host;dbname=$dbname";

//   try {
//     $conn = new PDO($dsn, $user, $pass);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // echo "Conexão estabelecida com êxito!";
//   } catch(PDOException $e) {
//     // echo "Falha na conexão!";
//     $error = $e->getMessage();
//     echo "Erro: $error";
//   }