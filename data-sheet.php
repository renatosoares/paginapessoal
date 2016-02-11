
<?php include 'header.php'; ?>

<?php

$path = "portfolio/";
$diretorio = dir($path);
//echo "Lista de Arquivos do diretório '<strong>". $path ."</strong>':<br />";
$contador = 0;

while($arquivo = $diretorio->read()){
$caminhosNomes[$contador] = substr($path.$arquivo, 1);
$arquivosNomes[$contador] = $arquivo;

http://renatosoares.net.br/index.php
  $contador++;
}
//print_r($arquivosNomes);
$diretorio->close();

foreach ($caminhosNomes as $key => $value) {
  if ($value != ".." && $value != "." && $value != "index.php" && $value != "error_log") {
      echo "<a href='". $value ."'>".$arquivosNomes[$key]."</a><br />";
  } else {
    continue;
  }
}
?>
<br>
<a href="index.php"><< Home</a>
<?php include 'footer.php'; ?>
