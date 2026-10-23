<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastro do Aluno<h1>
    
    <form method="POST">
       
        <label>Digite seu nome: </label><br>
        <input type:"text" size="40" name="nome" required></input><br>

        <label>Qual o pedido? </label><br>
        <input type:"text" size="40" name="pedido" required></input><br>

        <label>Qual a quantidade? </label><br>
        <input type:"number" name="quant" required></input><br>
        
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $pedido = $_POST["pedido"];
        $quant = $_POST["quant"];

        echo "<h1>Resultado</h1>";
        echo "Nome do cliente: $nome<br>Pedido do Cliente: $pedido<br>Quantidade do pedido: $quant";

    }
    ?>

</body>
</html>
