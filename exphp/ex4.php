<!DOCTYPEhtml >
< html  lang =" en " >
< cabeça >
    < meta  charset =" UTF-8 " >
    < meta  http-equiv = " Conteúdo compatível com X-UA " =" IE=edge " >
    < meta  name =" viewport " content =" largura=largura do dispositivo, escala inicial=1.0 " >
    < title > Documento </ title >
</ cabeça >
< corpo >
    < form  action =" ex4.php " method =" get " >
        < p > 4.Ler um valor N e imprimir todos os valores inteiros entre 1 (inclusive) e N (inclusive). Considere que o N será sempre maior que ZERO. </ p >
        Digite um valor: < input  type =" number " name =" num " >
        < input  type =" submit " value =" Vamos lá! " >
    </ formulário >
    <?php
    if (isset( $ _GET [ 'num' ])) {
   $ num = $ _GET [" num "];

for ( $ i = 1 ; $ i <= $ num ; $ i ++) {
    eco  $ i . " , ";
}
    }
    ?>
</ corpo >
</ html >