<?php
define("IVA", 19);
$cproducto=15;
$valoruni=43000;
$valorsiniva=$cproducto*$valoruni;
$valoriva=(IVA*$valorsiniva)/100;
$totalconiva=$valorsiniva+$valoriva; 
echo("°Su valor sin iva es   ".$valorsiniva."<br>".("°El iva de su producto es  ").$valoriva."<br>".("°El total de su producto mas iva es   ").$totalconiva);