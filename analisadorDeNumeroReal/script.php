<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        </p>
            <?php 
                $valor = $_POST["num"] ?? 0;
                
                echo "<P>valor: ". number_format($valor, 3, '.',',')."</p>";

                $parteInteira = (int) $valor;
                $parteFracionada = $valor - $parteInteira;
                
                echo "<ul><li>parte inteira:".number_format($parteInteira,0 , '.',',')."</li></ul>";
                echo "<ul><li>parte fracionada:".number_format($parteFracionada,3 , '.',',')."</li></ul>";
            ?>
        <p>
        <button onclick="javascript:history.go(-1)">
             ⬅️ voltar
        </button>

    </main>
</body>
</html>