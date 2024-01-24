<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Gerador de QR Code para WhatsApp</title>
</head>
<body>
    <div class="container">
        <h1>Gerador de QR Code para WhatsApp</h1>
        <form action="generate_qr.php" method="POST">
            <label for="numero">Número de Telefone (com DDI, sem o sinal de +):</label>
            <input type="text" id="numero" name="numero" required>
            <button type="submit">Gerar QR Code</button>
        </form>
        <div class="qr-code" id="qr-code"></div>
    </div>
</body>
</html>

