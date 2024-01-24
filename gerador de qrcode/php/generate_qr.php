<?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        $whatsappURL = "https://wa.me/$numero";
        $qrCode = 'https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=' . urlencode($whatsappURL);
        
        echo '<img src="' . $qrCode . '" alt="QR Code para WhatsApp">';
    } else {
        echo 'Número de telefone não fornecido.';
    }
?>
