<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
    
</body>
</html>

<?php
session_start();
require "../controller/conect.php";


$login = $_POST['user'];
$senha = $_POST['senha'];

if(empty($login) || empty($senha)) {
    header('location: ../index.php');
}else{
    $sql = "SELECT * FROM user WHERE user = '$login' and senha = '$senha'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        $user_auth = $row['user'];

        if($user_auth == 'atendente'){
            $_SESSION['token_atend'] = $user_auth;
            header('location: ../view/autenticado.php');
        }else{
            $_SESSION['token_auth'] = $user_auth;
            echo "<div>
            <p>Erro</p>
            <a href='../index.php'>Fazer login novamente</a>
        </div>";
        }  
    }else{

       echo "<div>
            <p>Profissional não existe</p>
            <a href='../index.php'>Fazer login novamente</a>
        </div>";
        ?>
<?php
    }
}
?>