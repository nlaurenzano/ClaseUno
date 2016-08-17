<html>
<head>
	<title>Clase Uno</title>
</head>

<body>
	<h1>Clase Uno</h1>

	<?php
	//echo "Hola PHP";
	//echo "<h2>Otro hola PHP</h2>";

	$numero = 10;

//	echo "El número es " . $numero;		//Con "." se puede concatenar: El número es 10
//	echo "El número es $numero";		//Con comillas dobles se muestra el contenido de las variables: El número es 10
//	echo 'El número es $numero';		//Con comillas simples se muestra literalmente lo que se escribe: El número es $numero

	//echo "El cambio";

	$vueltas = 1000;
	$pares = 0;
	$impares = 0;

	$uno = 0;
	$dos = 0;
	$tres = 0;
	$cuatro = 0;
	$cinco = 0;
	$seis = 0;
	$siete = 0;
	$ocho = 0;
	$nueve = 0;
	$diez = 0;

	for ($i = 0; $i<$vueltas; $i++) {
		$nro = (rand(1,10));
		//echo "Nro. al azar: $nro<br>";

		if ($nro % 2 == 0) {
			$pares++;
		}
		else {
			$impares++;
		}

		switch ($nro) {
    		case 1: $uno++;
	        break;
	        case 2: $dos++;
	        break;
	        case 3: $tres++;
	        break;
	        case 4: $cuatro++;
	        break;
	        case 5: $cinco++;
	        break;
	        case 6: $seis++;
	        break;
	        case 7: 
	        	if ((($siete+1)*100/$vueltas) < 5) {
			        $siete++;
	        	} else {
	        		continue;
	        	}
	        break;
	        case 8: $ocho++;
	        break;
	        case 9: $nueve++;
	        break;
			case 10: $diez++;
	        break;
	       }
	}

	echo "<br><br>Nros. pares = $pares";
	echo "<br>Nros. impares = $impares";

	echo "<br><br>Cantidad de uno = " . $uno*100/$vueltas . " %";
	echo "<br>Cantidad de dos = " . $dos*100/$vueltas . " %";
	echo "<br>Cantidad de tres = " . $tres*100/$vueltas . " %";
	echo "<br>Cantidad de cuatro = " . $cuatro*100/$vueltas . " %";
	echo "<br>Cantidad de cinco = " . $cinco*100/$vueltas . " %";
	echo "<br>Cantidad de seis = " . $seis*100/$vueltas . " %";
	echo "<br>Cantidad de siete = " . $siete*100/$vueltas . " %";
	echo "<br>Cantidad de ocho = " . $ocho*100/$vueltas . " %";
	echo "<br>Cantidad de nueve = " . $nueve*100/$vueltas . " %";
	echo "<br>Cantidad de diez = " . $diez*100/$vueltas . " %";






	?>


</body>
</html>