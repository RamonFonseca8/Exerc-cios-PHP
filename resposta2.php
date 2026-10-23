<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Formulário de Contato<h1>
    
    <form method="POST">
       
        <label>Nome: </label><br>
        <input type:"text" size="40" name="nome" required/><br>

        <label>Email: </label><br>
        <input type:"@" name="email" required/><br>

        <label>Telefone: </label><br>
        <input type:"number" min="0" max="999999999" name="tel" required/><br>
        
        <button type="submit">Enviar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];

        echo "<h1>Resultado</h1>";
        echo "Nome: $nome<br>Email: $email<br>Telefone: $tel";

    }
    ?>

</body>
</html>
