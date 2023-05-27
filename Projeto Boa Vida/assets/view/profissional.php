<?php require "../controller/conect.php"; 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>
<nav>
<ul>
<li><a>Hospital Boa Vida</a></li>
<li><a href="../index.php">Home</a></li>
<li><a href="cadastro.php">Cadastra-se</a></li>
<li><a href="login.php">Login</a></li>
<li><a href="dados.php">Segurança de dados</a></li>
<li><a href="profissional.php">Área do profissional de saúde</a></li>
</ul>
</nav>
</nav>
<div class="container_form">
<h1>Área do profissional de saúde</h1>
<form class="form" action="../model/loginProfissional.php" method="post">
<br>
<div class="form_grupo">
<label for="user" class="form_label">Usuário: </label><input type="text" class="form_input" id="user" name="user" placeholder="Insira usuário" required> <br>
</div><br>
<div class="form_grupo">
<label for="senha" class="form_label">Senha: </label><input  type="password" class="form_input" id="senha" name="senha" placeholder="Insira sua senha" required minlength="8" maxlenght="16">
</div> <br>
<div class="submit">
<button type="submit" name="submit" class="submit_btn">Logar</button>
</form>
</div>
</body>
</html>