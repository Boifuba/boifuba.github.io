<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obter o comentário enviado pelo formulário
  $comentario = $_POST['message'];
  echo 'Comentário recebido: ' . $comentario;
  exit;
}
?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obter o comentário enviado pelo formulário
  $comentario = $_POST['message'];

  // Abrir o arquivo para escrita
  $arquivo = fopen('comentarios.txt', 'a');

  // Escrever o comentário no arquivo
  fwrite($arquivo, $comentario . PHP_EOL);

  // Fechar o arquivo
  fclose($arquivo);

  // Redirecionar de volta para a página atual
  header('Location: ' . $_SERVER['REQUEST_URI']);
  exit;
}
?>
