<?php
include 'conn.php';

$cod = $_POST['cod'];
$nome = $_POST['nome'];
$dt_cad = $_POST['dt_cad'];
$valor = $_POST['valor'];

$sql = "INSERT Into PRODUTO(COD_PRODUTO,NOM_PRODUTO,DATA_CADASTRO,VALOR)
Values($cod,'$nome','$dt_cad',$valor)";

$result = $conn->query($sql);

header('Location: http://localhost/trabalho/index.php');