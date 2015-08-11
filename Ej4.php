<?php

/**
*@autor Marco De La Cruz
*Descripcion:
*El producto mas grande divisible entre 3.
* usa el lenguaje te tu preferencia
*Escribe un programa que regrese el producto mayor de 2 números que sea divisible entre 3 de un
*arreglo de números positivos.
*Ejemplo de valores de entrada [6,8,8,7,2,5]
resultado = 48 
*Entra un archivo como entrada
*/


//Lee un archivo  en el cual hay un arreglo de entrero separados con comas 
//EJ 6,8,8,7,2,5,100,150,154
$max =0;
$max3 =0;
$FILE = "entrada";
$ArrayNumeros="";
if (($gestor = fopen($FILE, "r")) !== FALSE) {
    if (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
    	foreach ($datos as $key => $value) {
    		$ArrayNumeros .= "$value ";
    		if($max < $value)
    			$max= $value;
    		if ($max3 < $value && (($value%3) == 0) ) {
    			$max3=$value;
    		}
    	}
	}
	
	if($max3==0){
		echo "No hay  producto divisible entre 3";
	}
	else
	{
		echo "Arreglo de numeros es $ArrayNumeros </br> El producto mas grande divisible entre 3 es: ", $max3*$max  ;
	}
}
else
{
	echo "</br>El archivo $FILE no existe";
}

?>