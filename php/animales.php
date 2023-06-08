<?php
$animales = [
    "1.png", "2.png", "3.png", "4.png", "5.png",
    "6.png"
];

$nombres = [
    "Vaca", "Gato", "Perro", "Cerpiente", "Zorro",
    "Pajaro"
];

$ani = rand(1, count($animales) - 1);

print "  <h2>$nombres[$ani]</h2>\n";
print "\n";
print "  <p><img src=\"../img/$animales[$ani]\" alt=\"$nombres[$ani]\" height=\"250\"></p>\n";


?>