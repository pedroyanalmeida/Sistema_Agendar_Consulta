
<?php require_once "../controller/conect.php"; 
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
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
<div class="container_form">
<h1>Autenticação</h1>
<form class="form" action="../model/loginUsuario.php" method="post">
<br>
<div class="form_grupo">
<label for="email" class="form_label">E-mail: </label><input  type="text" class="form_input" id="email" name="email" placeholder="Insira seu e-mail" required> <br>
</div><br>
<div class="form_grupo">
<label for="senha" class="form_label">Senha: </label><input  type="password" class="form_input" id="senha" name="senha" placeholder="Insira sua senha" required minlength="8" maxlenght="16">
</div> <br>
<div class="submit">
<button type="submit" name="Submit" class="submit_btn">Logar</button>
</div>
<h4> Ainda não se cadastrou? <a href="cadastro.php">Cadastrar-se</a> </h4>
</form>
</div>
</body>
</html>