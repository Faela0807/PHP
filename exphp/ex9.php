<!DOCTYPEhtml >
< html  lang =" en " >

< cabeça >
  < meta  charset =" UTF-8 " >
  < meta  http-equiv = " Conteúdo compatível com X-UA " =" IE=edge " >
  < meta  name =" viewport " content =" largura=largura do dispositivo, escala inicial=1.0 " >
  < title > Documento </ title >
</ cabeça >

< corpo >
  < form  ação ="" método =" obter " >
    < p > Ler um valor inteiro (aceitar somente valores entre 1 e 10) e escrever a tabuada de 1 a 10 do valor lido. </ p >
    Digite o número: < input  type =" number " name =" tabuada " >
    < input  type =" submit " value =" Vamos lá! " >
  </ formulário >
  <?php
$ tabuada = $ _GET [" tabuada "];

$ i = 1 ;
if ( $ tabuada > 0 && $ tabuada <= 10 ) {
   while ( $ i <= 10 ) {
   $ calculo = $ tabuada * $ i ;
   echo " <br/> " . $ tabuada . " x ". $ eu . " = " . $ calculo ;
   $ i ++;
}
} senão {
  echo " <br/> Somente números menores que 10, tente novamente ! ";
}
  ?>
</ corpo >

</ html >