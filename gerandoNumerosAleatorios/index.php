<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>random php</title>
</head>
<body>
    
    <section>
        <h1>gerando números aleatorios</h1>
        <p>gerando um número de 0 a 100</p>
        <?php 
            $min = 1;
            $max = 100;

            $numAleatorio = mt_rand($min, $max);

            echo "<p>número aleatorio gerado: <strong>$numAleatorio</strong></p>"
        ?>
        <button onclick="javascript:document.location.reload()">
            🔃gerar novo número
        </button>
    </section>
</body>
</html>