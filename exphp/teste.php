<!DOCTYPEhtml >
< html  lang =" en " >

< cabeça >
  < meta  charset =" UTF-8 " >
  < meta  http-equiv = " Conteúdo compatível com X-UA " =" IE=edge " >
  < meta  name =" viewport " content =" largura=largura do dispositivo, escala inicial=1.0 " >
  < title > Documento </ title >
</ cabeça >

< corpo >
  < formulário >
    <?php
      for ( $ i = 1 ; $ i <= 10 ; $ i ++) {
    ?>
    Campo <?php  echo  $ i ; ? > <br />
    < input  type =" text " name =" numero <?php  echo  $ i ; ?> " /> < br />
    <?php 
      }
    ?>

    <br /> _
    < tipo de botão  =" enviar " > Vamos la! </ botão >
  </ formulário >

  <?php
    for ( $ i = 1 ; $ i <= 10 ; $ i ++) {
      $ numero = $ _GET [" numero " . $ i ];

      if ( $ numero < 0 ) {
        echo " Número ". $ numero . " negativo<br /> ";
      } senão {
        echo " Número ". $ numero . " positivo<br /> ";
      }
    }
  ?>
</ corpo >

</ html >