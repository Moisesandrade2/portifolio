<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario-de-contato';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

/*if($conexao->conect_errno){
    echo "erro";
}
else {
    echo "Conexão efetuada com sucesso"
}*/


?>