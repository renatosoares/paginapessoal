<?php
$path = ".";
$diretorio = dir($path);
//echo "Lista de Arquivos do diretório '<strong>". $path ."</strong>':<br />";
$contador = 0;

while($arquivo = $diretorio->read()){
$caminhosNomes[$contador] = substr($path.$arquivo, 1);
$arquivosNomes[$contador] = $arquivo;


  $contador++;
}
//print_r($arquivosNomes);
$diretorio->close();

foreach ($caminhosNomes as $key => $value) {
  if ($value != ".." && $value != "." && $value != "index.php") {
      echo "<a href='". $value ."'>".$arquivosNomes[$key]."</a><br />";
  } else {
    continue;
  }
}
?>
