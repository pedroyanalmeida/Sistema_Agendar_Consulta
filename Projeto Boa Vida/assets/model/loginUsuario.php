<?php
require "../controller/conect.php";
session_start();
$login = $_POST['email'];
$senha = $_POST['senha'];

if(empty($login) || empty($senha)) {
  header('location: ../index.php');
}else{
    $sql = "SELECT * FROM pacientes WHERE email = '$login' and senha = '$senha'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if(empty($_SESSION['paciente'])){
      if($login == $row['email'] && $senha == $row['senha']){
        $_SESSION['paciente'] = md5(sha1($senha));
        $_SESSION['id_paciente'] = $row['id_paciente'];
        header("location: ../view/usuarioLogado.php");
      } else {
        echo "Email ou senha incorretos";
      }
    }
}
  
?>