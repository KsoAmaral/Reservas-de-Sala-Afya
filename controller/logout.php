<?php
session_start();
session_unset(); // Limpa todas as variáveis de sessão
session_destroy(); // Destroi a sessão ativa
header("Location: ../view/login.php"); // Redireciona diretamente para a página de login
exit();
?>
