<?php

$my_boolean = TRUE;

if ($my_boolean){
    echo "<h1> É verdadeiro </h1> \n";
    $my_boolean = (string) "Olá mundo!";
}

if(is_string($my_boolean)){
    print $my_boolean;
}

?>