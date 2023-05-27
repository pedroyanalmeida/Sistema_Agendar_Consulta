<?php
require "../controller/conect.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
    <nav>
    <ul>
    <il><button><a href="autenticado.php">Voltar</a></button></il>
    </ul>
    </nav>
</body>
<html>
    <?php
 $sql2 = "SELECT * FROM prontuario INNER JOIN pacientes ON prontuario.id_paciente = pacientes.id_paciente";
 $result2 = $conn->query($sql2);
    ?>
    <?php
    if($result2->num_rows > 0) {
?>
        <table class="table-info">
            <tr>
                <th>ID_Prontuario</th>
                <th>ID_Paciente</th>
                <th>Doença Diagnosticado</th>
                <th>Descrição</th>
                <th>Etnia</th>
                <th>Tipo_Sanguíneo</th>
            </tr>
<?php
    while($row2 = $result2->fetch_assoc()){
?>
            <tr>
                <td><?=$row2['id_prontuario']?></td>
                <td><?=$row2['id_paciente']?></td>
                <td><?=$row2['doenca_diagnosticado']?></td>
                <td><?=$row2['descricao']?></td>
                <td><?=$row2['etnia']?></td>
                <td><?=$row2['tipo_sanguineo']?></td>
            </tr>
<?php
    }
}
?>