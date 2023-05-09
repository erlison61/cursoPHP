<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        </p>
            <?php 
                $valor = $_POST["num"] ?? 0;
                $antecessor = $valor - 1;
                $sucessor = $valor + 1;

                echo "valor digitado:<strong>$valor</strong>";
        
        
                echo "<p>o seu antecessor: <strong>$antecessor</strong></p>";
        
                echo "<p>o seu sucessor:<strong>$sucessor</strong> </p>";
            ?>
        <p>
        <button onclick="javascript:history.go(-1)">⬅️ voltar</button>

    </main>
</body>
</html>