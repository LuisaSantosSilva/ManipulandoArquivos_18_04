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
$tamanhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'r');

while(!feof($arquivoAberto)):
    $linha = fgets ($arquivoAberto, $tamanhoArquivo);
    echo $linha . "<br>";
endwhile;

fclose($arquivoaberto);

?>