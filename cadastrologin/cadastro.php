<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'usuarios';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// if($conexao->connect_errno){
//     echo "Eroo";
// }else{
//     echo "Conectado com sucesso";
// }

?>