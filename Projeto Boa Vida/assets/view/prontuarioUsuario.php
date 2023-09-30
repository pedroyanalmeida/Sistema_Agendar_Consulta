<?php
require "../controller/conect.php";
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<a class="btn btn-danger"  href="autenticado.php" role="button">Voltar</a>
</body>
<html>
    <?php
 $sql2 = "SELECT * FROM prontuario INNER JOIN pacientes ON prontuario.id_paciente = pacientes.id_paciente";
 $result2 = $conn->query($sql2);
    ?>
    <?php
    if($result2->num_rows > 0) {
?>
        <table class="table table-striped table-bordered">
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