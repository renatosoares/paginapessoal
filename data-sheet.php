
<?php include 'header.php'; ?>

<div class="jumbotron">
  <div class="container">
    <div class="page-header">
      <h1>Example page header <small>Subtext for header</small></h1>
    </div>
  </div>
</div>

<main class="container">
  <article class="row">




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

<section class="col-sm-6 col-md-4">
  <div class="thumbnail">
    <a href='". $value ."'>".$arquivosNomes[$key]."</a>
    <a href="#" class="thumbnail">
      <i class="fa fa-folder-open fa-2x"> bladdjflkjsd</i>
    </a>
  </div>
</section>
</article>
</main>

<br>
<a href="index.php"><< Home</a>


<?php include 'footer.php'; ?>
