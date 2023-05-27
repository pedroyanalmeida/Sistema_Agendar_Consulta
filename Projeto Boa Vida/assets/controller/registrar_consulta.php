<?php
require "conect.php";

$paciente = $_GET['paciente'];
$consultorio = $_GET['consultorio'];
$profis = $_GET['profis'];
$data = $_GET['data'];
$horario = $_GET['horario'];

$sql = "INSERT INTO consultas(idPac, consultorio, idPro, dataC, horario) VALUES ('$paciente','$consultorio','$profis','$data','$horario')";

$conn->query($sql);
header('location: ../view/autenticado.php');
?>