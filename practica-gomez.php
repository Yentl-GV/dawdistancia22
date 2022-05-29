<?php
/**
 *Este documento está subido en el repositorio GitHub Yentl-GV/dawdistancia22. 
 *@author Yentl
 *@version 1.0
 *{@internal He creado una nueva función de resta "function resta" ahora tenemos dos funciones.}
*/

/**
 *Función suma de dos números
 *@param int $num1
 *@param int $num2
 *@return float
*/

function suma ($num1, $num2){
 $resultadosuma=$num1+$num2;
 return $resultadosuma;
}

$suma= suma(24,42);
echo $suma;

/**
 *Función resta de dos numeros
 *@param int $num3
 *@param int $num4
 *@return float
*/
function resta ($num3,$num4){
 $resultadoresta=$num3-$num4;
 return $resultadoresta;
}

$resta= resta(10,5);
echo $resta;
?>
