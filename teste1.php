<?php

//Manipulação de arquivos
/*
fopen()
fclose()
fwrite()
!feof()
fgets()
filesize
*/

$arquivo = 'arquivo.txt';
$conteudo = "Conteudo de teste \r\n";

$arquivoaberto = fopen($arquivo, 'a');
fwrite($arquivoaberto, $conteudo);
fclose($arquivoaberto);

?>
