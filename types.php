<h1>Types</h1>

<h3>PHP primitive types are runtime defined</h3>

<?php

$boolean = TRUE; // um boleano

echo gettype($boolean);
print "\n";
print $boolean;
print "\n";
print "\n";

$integer = 1; // um inteiro

echo gettype($integer);
print "\n";
print $integer;
print "\n";
print "\n";

$string = "text"; // uma string

echo gettype($string);
print "\n";
print $string;
print "\n";
print "\n";

$double = 0.1; // um double
echo gettype($double);
print "\n";
print $double;
print "\n";
print "\n";

if(is_bool($boolean)){
    print "É boolean \n";
}

if(is_int($integer)){
    print "É inteiro \n";
}

if(is_string($string)){
    print "é inteiro \n";
}

if(is_double($double)){
    print "é double \n";
}

?>