<?php

/**
*@autor Marco De La Cruz
*Descripcion:
*Encuentra el numero faltante
** usa el lenguaje te tu preferencia
*Escribe un programa que que encuentra el numero faltante en un arreglo de [1...n] de números positivos
*Ejemplo de valores de entrada [5,4,1,2]
resultado = 3
*para este problema se espera que el código tenga una complexidad de O(n).
*/


//Lee un archivo  en el cual hay un arreglo de entrero separados con comas 
//EJ 5,6,4,1,2,7,8,9,10,0

$FILE = "entrada2";
$siguiente=0;
$faltante=-1;
$exite =0;
$serie='';
if (($gestor = fopen($FILE, "r")) !== FALSE) {
    if (($datos = fgetcsv($gestor, 1000, ",")) !== FALSE) {
        rsort($datos);
        $numero = count($datos);
        for ($c=0; $c < $numero && $exite==0; $c++ ) {
            $serie .= " $datos[$c] "; 
            if (isset($datos{$c+1}))
            {
                if( $datos{$c} == ($datos{$c+1} +1) )
                {
                    $existe=0;
                }
                else
                {
                    $faltante=$datos{$c+1} +1;
                    $existe=1;
                }
            }
        }
    if($faltante!= -1)
    {

         echo "La serie de entrada es: $serie </br> Numero faltante en la serie es : $faltante";
    }
    else
        echo "No se encontro numero faltante";
    }
}
else
{
	echo "</br>El archivo $FILE no existe";
}

?>