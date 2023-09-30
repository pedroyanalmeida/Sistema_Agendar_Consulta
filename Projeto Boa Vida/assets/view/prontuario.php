<?php
require "../controller/conect.php";
session_start();
if(empty($_SESSION['paciente'])){
    header("location: ../index.php");
} else {
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<a class="btn btn-danger"  href="usuarioLogado.php" role="button">Voltar</a>

    <?php
        $sql = "SELECT * FROM prontuario WHERE id_prontuario = '$_SESSION[id_paciente]' ";
        $result = $conn->query($sql);
    ?>
     <main>
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID_Prontuário</th>
                <th>ID_Paciente</th>
                <th>Doença_Diagnosticado</th>
                <th>Descrição</th>
                <th>Etnia</th>
                <th>Tipo_Sanguíneo</th>
            </tr>

            <?php
                if($result->num_rows == 0){
                    echo "Não existe nenhum prontuário";
                } else {
            ?>
                    <?php while($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td><?=$row['id_prontuario']?></td>
                            <td><?=$row['id_paciente']?></td>
                            <td><?=$row['doenca_diagnosticado']?></td>
                            <td><?=$row['descricao']?></td>
                            <td><?=$row['etnia']?></td>
                            <td><?=$row['tipo_sanguineo']?></td>
                        </tr>
                    <?php endwhile ?>
            <?php
                }
            ?>
        </table>
        
    </main>
</body>
</html>
<?php
}
?>
