<?php
session_start();

// Bloqueia acesso direto
if (!isset($_SESSION['user'])) {
  header('Location: index.php');
  exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head
  <meta charset="UTF-8">
  <title>Painel - Website Done</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
  <h1>Painel do Usuário</h1>
</header>

<main>
  <p>Bem-vindo, <strong><?php echo htmlspecialchars($user); ?></strong> 👋</p>

  <p>Você está logado com sucesso no <b>Website Done</b>.</p>

  <ul>
    <li>✅ Sistema de login funcionando</li>
    <li>✅ Sessão PHP ativa</li>
    <li>✅ Estrutura organizada</li>
  </ul>

  <a href="logout.php">Sair</a>
</main>

<footer>
  <p>© 2025 Website Done • MIT License • Feito com IA</p>
</footer>

</body>
</html>
