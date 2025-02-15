<?php

require_once "config.php";

$user = $_POST['user'];
$senha = $_POST['senha'];

$sql = "select * from tb_adm";

$statement = $pdo->query($sql);

$adms = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($adms as $adm) {
    if ($adm['user'] == $user && $adm['senha'] == $senha) {
        echo "Deu certo!!";
        // header('Location: ../index.php');
    } else {
        echo "<script>alert('Usuário ou senha incorretos')</script>";
        echo "<a href='login.php'>Voltar</a>";
    }
}
