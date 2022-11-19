<?php
// Executar linha 3 a 5
session_start();
$_SESSION['usuario'] = 'Andre';
$_SESSION['perfil'] = 'Adm';

// Comentar a linha 3 a 5, descomentar a linha  8 a 11, salvar arquivo e executar a linha  8 a 11
// session_start();
// echo 'Dados armazenados na sessão: <br/><br/>';
// echo 'Usuário: '.$_SESSION['usuario'].'<br/>';
// echo 'Perfil: '.$_SESSION['perfil'];
?>