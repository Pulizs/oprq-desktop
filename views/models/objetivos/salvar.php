<?php

require_once "config.php";

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];

$sql = "insert into tb_objetivos (titulo, conteudo) values (:titulo, :conteudo)";

$stm = $pdo->prepare($sql);

$stm->execute(
    [':titulo' => $titulo, ':conteudo' => $conteudo]
);

// echo "objetivo cadastrado com sucesso!!<br/>";
// echo "<a href='./index.php'>Voltar</a>";

include '../../layout/aprove.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../layout/head.php'; ?>
</head>

<body>
    <div class="bg-light p-5 rounded">
        <div class="container">
            <center>
                <div class="card" style="width: 30%;">
                    <center>
                        <img src="../../../assets/img/verifi.gif" alt="" style="width: 40%;">
                    </center>
                    <div class="card-body">
                        <p class="card-text">Objetivo criado com Sucesso</p>
                        <a type="button" href="./index.php" class="btn btn-success">Feito!</a>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>