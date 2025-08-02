<?php
$token = $_GET['token'] ?? '';
$arquivo = "validacoes/$token.json";
if (file_exists($arquivo)) {
  $dados = json_decode(file_get_contents($arquivo), true);
  $dados['validado'] = true;
  file_put_contents($arquivo, json_encode($dados));
  echo "<h1>Acesso Confirmado</h1><p>Você pode voltar ao portal e acessar seu diário de bordo.</p>";
} else {
  echo "<p>Token inválido ou expirado.</p>";
}
?>