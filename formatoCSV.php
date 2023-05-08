<?php

$arquivos1=file('novoTeste.txt');
$arquivos2=file('teste.txt');

$arquivocsv=fopen('TXTCSV.txt','a');

foreach ($arquivos1 as $novoarquivo1){

$linha = [trim($novoarquivo1),'sim'];


fputcsv($arquivocsv,$linha,';');
//fwrite($arquivocsv,implode(',',$linha));
}

foreach($arquivos2 as $novoarquivo2){

    $linha1 = [trim($novoarquivo2),'nao'];

    fwrite($arquivocsv,implode(',',$linha1));
}

//para ler um arquivo csv, porem  o arquivo precisa estar aberto para leitura;
//fgetcsv($arquivocsv,null,';');
fclose($arquivocsv);




//fputcsv envia um array para o arquivo , evitando usar o fwrite com implode,já que ele tem como parametros o  arquivo ,array e o separador;