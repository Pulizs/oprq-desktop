<!DOCTYPE html>
<html lang="en">

<head>
    <?php include '../../layout/head.php'; ?>
</head>

<body>

    <h2>Dados do Supermercado:</h2>
    <form action="/objetivos/salvar.php" method="post">
        <label id="nome" for="nome">Nome: </label>
        <input id="nome" type="text" name="nome" value="">
        <br /><br />
        <label id="cnpj" for="cnpj">CNPJ: </label>
        <input id="cnpj" type="text" name="cnpj" value="">
        <br /><br />
        <label id="pagamentos_aceitos" for="pagamentos_aceitos">Pagamentos: </label>
        <select name="pagamentos_aceitos" id="pagamentos_aceitos">
            <option value="cartao">Cartão</option>
            <option value="dinheiro">Dinheiro</option>
            <option value="pix">PIX</option>
        </select>
        <br /><br />
        <br /><br />
        <input type="submit" name="salvar" value="Enviar">
    </form>

</body>

</html>