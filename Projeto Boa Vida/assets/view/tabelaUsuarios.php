<?php
require "../controller/conect.php";
?>
<?php
	$res = "SELECT * FROM pacientes ORDER BY nome";

    $result = $conn->query($res);
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

    <main>
        <table>
            <tr>
                <th>ID_Paciente</th>
                <th>Nome</th>
                <th>CPF</th>
                <th>Idade</th>
                <th>Telefone</th>
                <th>Sexo</th>
                <th>Data_Nascimento</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>CEP</th>
                <th>Rua</th>
                <th>SUS</th>
                <th>E-mail</th>
            </tr>
    <?php
    
        if($result->num_rows == 0) {

            echo "Não há pacientes registrados";
            
        } else {

            while($row = $result->fetch_assoc()) {

    ?>
             <tr>
                <td><?=$row['nome']?></td>
                <td><?=$row['cpf']?></td>
                <td><?=$row['idade']?></td>
                <td><?=$row['telefone']?></td>
                <td><?=$row['sexo']?></td>
                <td><?=$row['data_nascimento']?></td>
                <td><?=$row['estado']?></td>
                <td><?=$row['cidade']?></td>
                <td><?=$row['cep']?></td>
                <td><?=$row['rua']?></td>
                <td><?=$row['sus']?></td>
                <td><?=$row['email']?></td>
                
            </tr>
    <?php
                
            }
            
        }
    ?>

    </table>
        
    </main>
</body>
<html>