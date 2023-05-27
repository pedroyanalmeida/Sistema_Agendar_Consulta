<?php
session_start();
require "../controller/conect.php";

if(empty($_SESSION['token_atend']) && empty($_SESSION['token_auth'])){
    header('location: ../index.php');
}else{
    if(isset($_SESSION['token_atend'])){

        $sql = "SELECT * FROM pacientes";
        $result = $conn->query($sql);

        $sql1 = "SELECT * FROM user";
        $result1 = $conn->query($sql1);
?>
<!DOCTYPE html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h1>Área do profissional</h1>
<nav>
    <ul>
<li><a href="tabelaUsuarios.php">Consultar tabela de pacientes</a></li>
<li><a href="prontuarioUsuario.php">Consultar o prontuário dos pacientes</a></li>
    <ul>
</nav>
<button><a href="../logout.php">Deslogar</a></button>


<?php if($_SESSION['token_atend'] == "atendente") { ?>
<div>
        <p class="re">REGISTRAR CONSULTA</p>
        <form class="registra" action="../controller/registrar_consulta.php" method="get">
            <label for="paciente">Paciente</label>
            <select  name="paciente" id="paciente">
<?php   
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()) {
?>
                <option value="<?=$row['id_paciente']?>"><?=$row['nome'];?></option>
<?php
            }
        }16
?>
            </select>

            <label for="consultorio">Consultório</label>
            <input type="text" name="consultorio" id="consultorio">

            <label for="profis">Profissional</label>
            <select name="profis" id="profis">
<?php   
        if($result1->num_rows > 0){
            while($row1 = $result1->fetch_assoc()) {
?>
                <option value="<?=$row1['id']?>"><?=$row1['user'];?></option>
<?php
            }
        }
?>
            </select>login.php
            

            <label for="data">Data</label>
            <input type="date" name="data" id="data">

            <label for="horario">Horario</label>
            <input type="time" name="horario" id="horario">
            login.php
<?php } ?>


        <hr>
<?php
    $sql3 = "SELECT * FROM consultas INNER JOIN pacientes ON consultas.idPac = pacientes.id_paciente  INNER JOIN user ON consultas.idPro = user.id";
    $result3 = $conn->query($sql3);
    $sql5 = "SELECT * FROM consultas";
    $result5 = $conn->query($sql5);
?>
<?php
    if($result3->num_rows > 0) {
?>
        <table class="tabela">
            <tr>
                <th>ID</th>
                <th>Paciente</th>
                <th>Consultório</th>
                <th>Profissional</th>
                <th>Data</th>
                <th>Horário</th>
            </tr>
<?php
    while(($row3 = $result3->fetch_assoc()) && ($row5 = $result5->fetch_assoc())){
?>
            <tr>
                <td class="col"><?=$row5['id_consulta']?></td>
                <td class="col"><?=$row3['nome']?></td>
                <td class="col"><?=$row3['consultorio']?></td>
                <td class="col"><?=$row3['user']?></td>
                <td class="col"><?=$row3['dataC']?></td>
                <td class="col"><?=$row3['horario']?></td>
            </tr>
<?php
    }
?>
        </table>
<?php
    }else{
        echo "NÃO HÁ CONSULTAS";
    }
    if(isset($_GET['excluir'])){
        $id_consulta = $_GET['id_consulta'];
        $sql4 = "DELETE FROM consultas WHERE id_consulta = '$id_consulta'";
        $conn->query($sql4);
        header("location: autenticado.php");
    }
?>
<hr>
    <form action="autenticado.php" method="get">
        <label  for="id_consulta">Digite o ID da consulta que deseja excluir</label>
        <input type="number" name="id_consulta" id="id_consulta">
        <input name="excluir" type="submit" value="excluir">
    </form>
        
    </main>

    <footer>

    </footer>
</body>
</html>

<?php
    }else{
        $user  = $_SESSION['token_auth'];
        $sql2 = "SELECT * FROM consultas INNER JOIN pacientes ON consultas.idPac = pacientes.id_paciente  INNER JOIN user ON consultas.idPro = user.id WHERE user = '$user'";
        $result2 = $conn->query($sql2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <header>

    </header>

    <main>
<?php
    if($result2->num_rows > 0) {
?>
        <table class="table-info">
            <tr>
                <th>Paciente</th>
                <th>Consultório</th>
                <th>Profissional</th>
                <th>Data</th>
                <th>Horário</th>
            </tr>
<?php
    while($row2 = $result2->fetch_assoc()){
?>
            <tr>
                <td><?=$row2['nome']?></td>
                <td><?=$row2['consultorio']?></td>
                <td><?=$row2['user']?></td>
                <td><?=$row2['dataC']?></td>
                <td><?=$row2['horario']?></td>
            </tr>
<?php
    }
?>
        </table>
<?php 
    }else{
        echo "NÂO EXISTE CONSULTA";
    }
?>
    </main>

</body>
</html>
<?php
    }
}
?>


