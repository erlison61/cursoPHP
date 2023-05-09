<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saida PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <p>
        <?php 
            $n= $_GET["nome"] ?? 'senhor(a)' ;
            $s = $_GET["sobrenome"] ?? '';

            echo "muito prazer, $n $s";
        ?>
        <p>
            <a href="javascript:history.go(-1)">
                voltar ao formulario
            </a>
        </p>
        </p>
    </main>
</body>
</html>