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
                $inicio = date("m-d-Y", strtotime("-7 days"));

                $fim = date("m-d-Y") ;

                $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $dados = json_decode(file_get_contents($url), true);

                $cotacao = $dados["value"][0]["cotacaoCompra"];

                $valorReal = $_POST["real"] ?? 0;
                $valorDolar = $valorReal/$cotacao;

                echo "<P>o valor atual da sua carteira: $valorReal</p>";

                echo "<p>convertido para dolar:". number_format($valorDolar,2,".", ",");

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