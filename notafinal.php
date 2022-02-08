<?php
define("nota1", 15);
define("nota2", 20);
define("nota3", 25);
define("nota4", 30);
$n1=rand (1,5);
$n1o=($n1*nota1)/100;
$n2=rand(1, 5);
$n2o=($n2*nota2)/100;
$n3=rand(1, 5);
$n3o=($n3*nota3)/100;
$n4=rand(1, 5);
$n4o=($n4*nota4)/100;
$alumno="Andres";
$materia="ingles";
$notafinal=$n1o+$n2o+$n3o+$n4o;

echo ("las notas del alumno $alumno son $n1, $n2, $n3, $n4, por lo tanto en la materia $materia, tiene una nota final de $notafinal");