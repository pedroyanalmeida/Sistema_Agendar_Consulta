<?php
include("../controller/conect.php");

if(isset($_POST['Submit'])){
    $nome = $_POST['nome']; 
    $cpf = $_POST['cpf']; 
    $idade = $_POST['idade'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $data = $_POST['d'];  
    $estado = $_POST['estado']; 
    $cidade = $_POST['cidade']; 
    $cep = $_POST['cep']; 
    $rua = $_POST['rua']; 
    $sus = $_POST['sus']; 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
}
$sql1 = "SELECT * FROM pacientes WHERE email = '$email'";
$result = $conn->query($sql1);
echo mysqli_error($conn);
if($result->num_rows == 0) {
    $sql = "INSERT INTO pacientes VALUES (NULL,'$nome', '$cpf', '$idade', '$telefone', '$sexo', '$data', '$estado', '$cidade', '$cep', '$rua', '$sus', '$email', '$senha')";
    $salvar = $conn->query($sql);
    echo "Usuário cadastrado";
    echo "<button><a href=../index.php> Voltar<a/></button";
} else {
    echo "Erro";
    echo mysqli_error($conn);
}
?>