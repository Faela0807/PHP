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
    < p > 5.Modifique o exercício anterior para aceitar somente valores maiores que .
      Caso o valor informado (para N) não seja maior que 0, deve ser lido um novo valor para N. </ p >
    < tipo de entrada  =" número " nome =" num " >
    < input  type =" submit " value =" Vamos lá! " >
  </ formulário >

  <?php

$ num = $ _GET [" num "];

if ( $ num > 0 ){
  for ( $ i = 0 ; $ i <= $ num ; $ i ++) {
    eco  $ i . " , ";
}
} senão {
  echo " <br/> Coloque um novo valor : ";
}
?>

</ corpo >

</ html >