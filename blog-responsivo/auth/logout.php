<?php
// Inicia a sessão se ela não estiver ativa
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Remove todas as variáveis da sessão
session_unset();

// Destroi a sessão
session_destroy();

// Redireciona para a página de login
header('Location: login.php');
exit;
?>
