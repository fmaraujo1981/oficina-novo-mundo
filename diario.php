<?php
$token = $_GET['token'] ?? '';
$arquivo_usuario = "validacoes/$token.json";
if (!file_exists($arquivo_usuario)) {
  echo "<p>Acesso inválido. Token não reconhecido.</p>";
  exit;
}
$usuario = json_decode(file_get_contents($arquivo_usuario), true);
if (!$usuario['validado']) {
  echo "<p>Usuário ainda não validado. Escaneie o QR Code.</p>";
  exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $texto = $_POST['texto'] ?? '';
  if (!empty($texto)) {
    $usuario['diario'][] = [
      'data' => date('Y-m-d H:i'),
      'texto' => $texto,
      'publico' => isset($_POST['publico'])
    ];
    file_put_contents($arquivo_usuario, json_encode($usuario, JSON_PRETTY_PRINT));
  }
}
?>
<!DOCTYPE html>
<html lang='pt-br'>
<head>
  <meta charset='UTF-8'>
  <title>Diário de Bordo</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet'>
</head>
<body class='bg-light text-dark'>
  <div class='container py-5'>
    <h1 class='mb-4'>Olá, Explorador <?php echo htmlspecialchars($usuario['telefone']); ?>!</h1>
    <form method='POST' class='mb-4'>
      <textarea name='texto' class='form-control mb-2' rows='4' placeholder='Escreva aqui sua descoberta...'></textarea>
      <div class='form-check'>
        <input class='form-check-input' type='checkbox' name='publico' id='publico'>
        <label class='form-check-label' for='publico'>Tornar esta entrada pública</label>
      </div>
      <button type='submit' class='btn btn-primary mt-2'>Salvar Anotação</button>
    </form>
    <h3>Suas Anotações</h3>
    <ul class='list-group'>
      <?php if (!empty($usuario['diario'])): ?>
        <?php foreach (array_reverse($usuario['diario']) as $entrada): ?>
          <li class='list-group-item'>
            <small class='text-muted'><?php echo $entrada['data']; ?></small><br>
            <?php echo nl2br(htmlspecialchars($entrada['texto'])); ?>
            <?php if (!empty($entrada['publico'])): ?>
              <span class='badge bg-success ms-2'>Pública</span>
            <?php endif; ?>
          </li>
        <?php endforeach; ?>
      <?php else: ?>
        <li class='list-group-item'>Nenhuma anotação ainda.</li>
      <?php endif; ?>
    </ul>
  </div>
</body>
</html>
