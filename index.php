<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>conversor de moedas</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <main>
    
    
        <h2>Conversor de Moedas</h2>
        <form action="conversao.php" method="get">
            <label for="din">Quantos R$ você tem na carteira?</label>
            <input type="number" name="din" id="din" step="0.01" > 
            <input type="submit" value="Converter">
        </form>
        <button onclick="javascript:history.go(-1)">Voltar</button>

  
        
    </main>
    
</body>
</html>
