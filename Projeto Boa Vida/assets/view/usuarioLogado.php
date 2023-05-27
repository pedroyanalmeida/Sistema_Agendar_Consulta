<?php
session_start();
if(empty($_SESSION['paciente'])){
    header("location: ../index.php");
} else {
?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
</head>
<body>

<h1>Área do usuário</h1>
<p>Seja bem vindo(a)</p>

<nav>
    <ul>
    
<li><a href="prontuario.php">Consultar prontuário</a></li>
    <ul>
</nav>
<button><a href="../logout.php">Deslogar</a></button>
</body>
</html>

<?php
}
?>