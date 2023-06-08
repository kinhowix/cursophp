<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Conversor de Moedas</h1>
        <?php 
   //cotação vinda do banco central<?php 
    $inicio = date("m-d-Y" , strtotime("-7 days"));

    $fim =date("m-d-Y");

    $url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

    $dados=json_decode(file_get_contents($url), true);

       $cotacao =$dados["value"][0]["cotacaoCompra"];
      

        $real = $_REQUEST["din"] ?? 0;
        $dolar = $real / $cotacao;
               
    
       // $padrao = numfmt_create("pt-BR", NumberFormatter::CURRENCY);

        echo  "<p>Seus R$".number_format($real ,2). " equivalem
        a <strong> $".number_format($dolar ,2). " </strong></p>";

        echo "<p> Cotação atualizada 1 dolar custa  : <strong>R$".number_format($cotacao ,3). "</strong></p></br>";     
        
        
        
        ?>
             <p>Confira abaixo as informações no site do Banco Central</p>
             <a href="https://www.bcb.gov.br">https://www.bcb.gov.br</a>
        <button onclick="javascript:history.go(-1)">Voltar</button>

            </main>
            
    
</body>
</html>