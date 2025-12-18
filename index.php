<?php
session_start();

// Idiomas disponíveis
$languages = [
  'pt' => 'Português',
  'en' => 'English',
  'es' => 'Español'
];

// Idioma atual
if (isset($_GET['lang']) && isset($languages[$_GET['lang']])) {
  $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'] ?? 'pt';

// Textos
$text = [
  'pt' => [
    'title' => 'Website Done',
    'subtitle' => 'Projeto educacional feito com IA',
    'login' => 'Entrar',
    'user' => 'Usuário',
    'pass' => 'Senha',
    'captcha' => 'Não sou um robô',
    'welcome' => 'Bem-vindo ao Website Done'
  ],
  'en' => [
    'title' => 'Website Done',
    'subtitle' => 'Educational project made with AI',
    'login' => 'Login',
    'user' => 'Username',
    'pass' => 'Password',
    'captcha' => "I'm not a robot",
    'welcome' => 'Welcome to Website Done'
  ],
  'es' => [
    'title' => 'Website Done',
    'subtitle' => 'Proyecto educativo hecho con IA',
    'login' => 'Entrar',
    'user' => 'Usuario',
    'pass' => 'Contraseña',
    'captcha' => 'No soy un robot',
    'welcome' => 'Bienvenido a Website Done'
  ]
];

// Login simples (educacional)
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!isset($_POST['captcha'])) {
    $error = 'Confirme o captcha';
  } elseif ($_POST['user'] === 'admin' && $_POST['pass'] === '1234') {
    $_SESSION['user'] = 'admin';
    header('Location: painel.php');
    exit;
  } else {
    $error = 'Login inválido';
  }
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8">
  <title><?php echo $text[$lang]['title']; ?></title>
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js" defer></script>
</head>
<body>

<header>
  <h1><?php echo $text[$lang]['title']; ?></h1>
  <p><?php echo $text[$lang]['subtitle']; ?></p>

  <nav>
    <?php foreach ($languages as $code => $name): ?>
      <a href="?lang=<?php echo $code; ?>"><?php echo $name; ?></a>
    <?php endforeach; ?>
  </nav>
</header>

<main>
  <h2><?php echo $text[$lang]['welcome']; ?></h2>

  <?php if ($error): ?>
    <p style="color:red;"><?php echo $error; ?></p>
  <?php endif; ?>

  <form method="POST">
    <label>
      <?php echo $text[$lang]['user']; ?>
      <input type="text" name="user" required>
    </label><br><br>

    <label>
      <?php echo $text[$lang]['pass']; ?>
      <input type="password" name="pass" required>
    </label><br><br>

    <label>
      <input type="checkbox" name="captcha" required>
      <?php echo $text[$lang]['captcha']; ?>
    </label><br><br>

    <button type="submit"><?php echo $text[$lang]['login']; ?></button>
  </form>
</main>

<footer>
  <p>© 2025 Website Done • MIT License • Feito com IA</p>
</footer>

</body>
</html>