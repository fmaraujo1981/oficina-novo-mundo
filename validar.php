<?php
$telefone = preg_replace('/\D/', '', $_POST['telefone']);
if (strlen($telefone) >= 10) {
    $token = substr(md5($telefone . time()), 0, 6);
    $json = json_encode(['telefone' => $telefone, 'token' => $token, 'validado' => false]);
    if (!file_exists("validacoes")) mkdir("validacoes");
    file_put_contents("validacoes/$token.json", $json);
    echo "<h1 style='text-align:center'>Autentique com seu celular</h1>";
    echo "<p style='text-align:center'>Escaneie o código ou vá para:</p>";
    echo "<div style='text-align:center; margin-top: 20px'>";
    echo "<img src='https://api.qrserver.com/v1/create-qr-code/?data=http://localhost/validar_acesso.php?token=$token&size=200x200' alt='QR Code'>";
    echo "<p><strong>Token:</strong> $token</p>";
    echo "</div>";
} else {
    echo "<p>Telefone inválido.</p>";
}
?>