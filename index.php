<?php

function vd($arr){
    echo '<pre>';
    var_dump($arr);
}

$lista = array('1','2','3','4','5');
$lista[] = 6;
$lista['vilao'] = 'coringa';
$lista[] = 7;
vd($lista);

$curso['InfoNet'] = array('DES', 'OSA', 'CEI', 'RC' , 'BD');
$curso['Medio'] = array('matematica', 'arte' ,'fisica' , 'quimica', 'portugues' , 'educacao fisica' , 'sociologia', 'filosofia');
$curso['Logistica'] = array('contabilidade', 'matematica');
$curso['administracao'] = array('matematica financeira');
vd($curso);

foreach($curso['Medio'] as $valor){
    echo $valor. '<br>';
}

for($i=0;$i<2;$i++);
    $curso['Medio'][$i].'<br>'
?>