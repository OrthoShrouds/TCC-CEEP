<?php
session_start();
include_once('conexao.php');

$pdo = conectar();

$sql = "SELECT * FROM tb_categorias";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Listagem de Categorias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.js"></script>
</head>

<body>
    <h2>
        Listagem de Categorias
    </h2>
    <table class="table table-striped table-bordered">
        <tr class="table-dark">
            <th>Cod</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($resultado as $r) { ?>
            <tr>
                <td><?php echo $r['codcategoria']; ?></td>
                <td><?php echo $r['descricaocat']; ?></td>
                <td><a href="alterarcategoria.php?cod=<?php echo $r['codcategoria'] ?>" class="btn btn-warning"> ALTERAÇÃO</a> 
                - <a href="excluircategoria.php?id=<?php echo $r['codcategoria'] ?>" class="btn btn-danger">EXCLUSÃO</a> </td>
            </tr>

        <?php } ?>
    </table>
</body>

</html>