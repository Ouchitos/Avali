<?php
include 'conn.php';

$sql = "SELECT * From PRODUTO";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href='http://localhost/trabalho/cadastro.php'><button>Cadastrar Produto</button></a><br>
    <table border=2>
        <thead>
            <th>COD_PRODUTO</th>
            <th>NOM_PRODUTO</th>
            <th>DATA_CADASTRO</th>
            <th>VALOR</th>
        </thead>
        <?php while($dados = $result->fetch_assoc()) { 
            $id = $dados['COD_PRODUTO'];    
        ?>
        <tbody>
            <td><?php echo $dados['COD_PRODUTO']; ?></td>
            <td><?php echo $dados['NOM_PRODUTO']; ?></td>
            <td><?php echo $dados['DATA_CADASTRO']; ?></td>
            <td><?php echo $dados['VALOR']; ?></td>
        </tbody>
        <?php } ?>
    </table>   

</body>
</html>
