<?php

print "Arrays";

$meuarray = array(
    
    'valor1' => 1,
    'valor2' => 2,
    
);

print var_dump($meuarray);

$meuarray1 = array(1,2,3,4,5);

print var_dump($meuarray1);

print "$meuarray[valor1] meu valor";

print $meuarray1[0];

function getArray() {
    return $meuarray = array('eu', 'gosto', 'de', 'você');
}

print getArray()[0];

#$meuarray[valor1] = getArray()[3];

print '\n';

print var_dump($meuarray);

unset($meuarray1[0]);

print '\n';

print var_dump($meuarray1);

foreach ($meuarray1 as $i => $value){
    print $i;
}

$meuarray = array_values($meuarray);

print var_dump($meuarray);

$teste1 = array(1,2,3,4);

$teste2 = &$teste1;

$teste1[0]= 'olá';

print var_dump($teste1);

print '\n';

print var_dump($teste2);

?>