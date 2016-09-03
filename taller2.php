<?php
	//Taller 2
	//1.a.

	/*echo "Punto 1A: <br><br>";

	$numeros = 1;

	while($numeros <= 10) {
		echo "Numero: ".$numeros."<br>";
		$numeros++;
	}

	//1.b.

	echo "<br>Punto 1B: <br><br>";

	$num = 1;
	$cos = 1;
	$res;

	while ($num < 100) {
		$res = $num + $cos;
		echo $num." + ".$cos." = ".$res."<br>";
		$num++;
	}

	//1.c.

	echo "<br>Punto 1C: <br><br>";

	$numPar = 1;
	$cosPar = 2;
	$resPar;

	while($numPar < 50) {
		if($numPar % 2 == 0) {
			$resPar = $numPar + $cosPar;
			echo $numPar." + ".$cosPar." = ".$resPar."<br>";
			$numPar++;
		}else {
			echo "El numero ".$numPar." no es un numero par.<br>";
			$numPar++;
		}
	}

	//1.d.

	echo "<br>Punto 1D: <br><br>";

	$numImpar = 1;
	$cosImpar = 2;
	$resImpar;

	while($numImpar < 50) {
		if($numImpar % 2 == 0) {
			echo "El numero ".$numImpar." es un numero par.<br>";
			$numImpar++;
		}else {
			$resImpar = $numImpar + $cosImpar;
			echo $numImpar." + ".$cosImpar." = ".$resImpar."<br>";
			$numImpar++;
		}
	}

	//2.a.

	echo "<br>Punto 2A: <br><br>";

	$numA = 1;

	for($i = 0; $i < 100; $i++) {
		echo "Numero: ".$numA."<br>";
		$numA++;
	}

	//2.b.

	echo "<br>Punto 2B: <br><br>";

	$numB = 2;
	$multiplo = 1;
	$resMult;

	for($b = 0; $b < 20; $b++) {
		$resMult = $numB * $multiplo;
		echo $numB." x ".$multiplo." = ".$resMult."<br>";
		$multiplo++;
	}

	//2.c.

	echo "<br>Punto 2C: <br><br>";

	$numF = 3;
	$factorial = 1;

	echo $numF."!"." = ";

	for($c = 1; $c <= $numF; $c++){
		$factorial *= $c;
		echo $c;
		
		if($c == $numF) {
			echo " = ".$factorial;
		}else {
			echo " x ";
		}
	}

	//2.d.

	echo "<br>Punto 2D: <br><br>";

	$numD = 1;
	$numE = 0;
	$numeroF = 5;

	echo "Fibonacci de ".$numeroF.": <br><br>";
   
	for($d = 0; $d <= $numeroF; $d++) {
		echo $numE." + ".$numD." = ";

		$suma = $numD + $numE;
		$numD = $numE; 
		$numE = $suma;

		echo $suma." "."<br>";
	}

	//3.a.

	echo "<br>Punto 3A: <br><br>";

	$nombres = array("Alonso", "Pedro", "Victor", "Manuela");

	foreach ($nombres as $nombre) {
		echo $nombre."<br>";
	}

	//3.b.

	echo "<br>Punto 3B: <br><br>";

	echo "Por favor ingrese cinco numeros aleatorios: <br><br>";

	$numAleatorios = array();

	$numAleatorios[0] = 5;
	$numAleatorios[1] = 20;
	$numAleatorios[2] = 8;
	$numAleatorios[3] = 100;
	$numAleatorios[4] = 40;

	echo "Los numeros aleatorios ingresados fueron ordenados ascendentemente: <br><br>";

	sort($numAleatorios);//Ordena el array de menor a mayor
	
	foreach($numAleatorios as $numAleatorio) {
		echo "Numeros [".$numAleatorio."]"."<br>";
	}

	//3.c.

	echo "<br>Punto 3C: <br><br>";

	echo "Por favor ingrese cinco numeros aleatorios: <br><br>";

	$numAleatorios2 = array();

	$numAleatorios2[0] = 30;
	$numAleatorios2[1] = 650;
	$numAleatorios2[2] = 23;
	$numAleatorios2[3] = 97;
	$numAleatorios2[4] = 1;

	echo "Los numeros aleatorios ingresados fueron ordenados descendentemente: <br><br>";

	rsort($numAleatorios2);//Ordena el array de mayor a menor
	
	foreach($numAleatorios2 as $numAleatorio2) {
		echo "Numeros [".$numAleatorio2."]"."<br>";
	}

	//3.d.

	echo "<br>Punto 3D: <br><br>";

	echo "Por favor ingrese cinco nombres: <br><br>";

	$nombresD = array();

	$nombresD[0] = "Juan";
	$nombresD[1] = "Camila";
	$nombresD[2] = "Duvan";
	$nombresD[3] = "Carlos";
	$nombresD[4] = "Cristian";

	echo "Los nombres ingresados son: <br><br>";

	foreach ($nombresD as $nombreD) {
		echo $nombreD."<br>";
	}

	//4.a.

	echo "<br>Punto 4A: <br><br>";

	echo "Por favor ingrese un numero y la potencia que desea elevar: <br><br>";

	$num1 = 5;
	$pot = 2;

	function potencia($num1, $potencia) {
		$resultado = $num1 ** $potencia;
		return $resultado;
	}

	echo "El resultado de elevar ".$num1." a la ".$pot." es: ".potencia($num1, $pot);

	//4.b.

	echo "<br>Punto 4B: <br><br>";

	echo "Por favor ingrese un numero: <br><br>";

	$num2 = 10;

	function raizCuadrada($num2) {
		$resultado = sqrt($num2);
		return $resultado;
	}

	echo "La raiz cuadrada de ".$num2." es: ".raizCuadrada($num2);

	//4.c.

	echo "<br>Punto 4C: <br><br>";

	$numero1C = $_POST["numero1"];
	$num1C = (int)$numero1C;

	$numero2C = $_POST["numero2"];
	$num2C = (int)$numero2C;


	function calculadora($num1C, $num2C) {
		echo $num1C." + ".$num2C." = ".$totalSuma = $num1C + $num2C."<br>";
		echo $num1C." - ".$num2C." = ".$totalResta = $num1C - $num2C."<br>";
		echo $num1C." * ".$num2C." = ".$totalMulti = $num1C * $num2C."<br>";
		echo $num1C." / ".$num2C." = ".$totalDiv = $num1C / $num2C."<br>";
	}

	echo "Las operaciones son: <br><br>";
	echo calculadora($num1C, $num2C);

	//4.d.

	echo "<br>Punto 4D: <br><br>";

	$numero1D = $_POST["numero1"];
	$num1D = (int)$numero1D;

	$numero2D = $_POST["numero2"];
	$num2D = (int)$numero2D;

	$numero3D = $_POST["numero3"];
	$num3D = (int)$numero3D;

	$numero4D = $_POST["numero4"];
	$num4D = (int)$numero4D;

	$numerador1;
	$numerador2;
	$total;
	$denominador;

	function suma($num1, $num2, $num3, $num4) {
		if($num2 == $num4) {
			$numerador1 = $num1 + $num3;
			$denominador = $num2;

			$total = $numerador1." / ".$denominador;
		}else {
			$numerador1 = $num1 * $num4;
			$numerador2 = $num2 * $num3;
			$denominador = $num2 * $num4;

			$total = $numerador1 + $numerador2." / ".$denominador;
		}
		return $total;
	}

	echo "El resultado de la suma de fracciones es: ".suma($num1D, $num2D, $num3D, $num4D)."<br><br>";

	function resta($num1, $num2, $num3, $num4) {
		if($num2 == $num4) {
			$numerador1 = $num1 - $num3;
			$denominador = $num2;

			$total = $numerador1." / ".$denominador;
		}else {
			$numerador1 = $num1 * $num4;
			$numerador2 = $num2 * $num3;
			$denominador = $num2 * $num4;

			$total = $numerador1 - $numerador2." / ".$denominador;
		}
		return $total;
	}

	echo "El resultado de la resta de fracciones es: ".resta($num1D, $num2D, $num3D, $num4D)."<br><br>";

	function multiplicacion($num1, $num2, $num3, $num4) {
		$numerador1 = $num1 * $num3;
		$denominador = $num2 * $num4;

		$total = $numerador1." / ".$denominador;

		return $total;
	}

	echo "El resultado de la multiplicacion de fracciones es: ".multiplicacion($num1D, $num2D, $num3D, $num4D)."<br><br>";

	function division($num1, $num2, $num3, $num4) {
		$numerador1 = $num1 * $num4;
		$denominador = $num2 * $num3;

		$total = $numerador1." / ".$denominador;

		return $total;
	}

	echo "El resultado de la division de fracciones es: ".division($num1D, $num2D, $num3D, $num4D)."<br><br>";

	//5.a.

	echo "<br>Punto 5A: <br><br>";

	$importe = array(32.583, 11.239, 45.781, 22.237);

	foreach($importe as $numeros) {
		echo $numeros."<br>";
	}

	//5.b.

	echo "<br>Punto 5B: <br><br>";

	echo "Ingrese dos valores:<br><br>";

	$valor1 = 20;
	$valor2 = 155;

	$numerosArray = array($valor1, $valor2);

	$z = 0;

	echo "La conversion de los numeros ".$valor1." y ".$valor2." a codigo binario es: <br><br>";

	do{
		echo decbin($numerosArray[$z])."<br><br>";
		$z++;
	}while ($z <= 1);
	
	//5.c.

	echo "<br>Punto 5C: <br><br>";

	echo "Por favor ingrese cuatro numeros: <br><br>";

	$nume1 = 2;
	$nume2 = 5;
	$nume3 = 8;
	$nume4 = 10;

	$eleCuadrado1 = $nume1 ** 2;
	$eleCuadrado2 = $nume2 ** 2;
	$eleCuadrado3 = $nume3 ** 2;
	$eleCuadrado4 = $nume4 ** 2;

	$eleCubo1 = $nume1 ** 3;
	$eleCubo2 = $nume2 ** 3;
	$eleCubo3 = $nume3 ** 3;
	$eleCubo4 = $nume4 ** 3;

	$eleCuarta1 = $nume1 ** 4;
	$eleCuarta2 = $nume2 ** 4;
	$eleCuarta3 = $nume3 ** 4;
	$eleCuarta4 = $nume4 ** 4;

	$miArreglo[0][0] = $nume1;
	$miArreglo[0][1] = $nume2;
	$miArreglo[0][2] = $nume3;
	$miArreglo[0][3] = $nume4;

	$miArreglo[1][0] = $eleCuadrado1;
	$miArreglo[1][1] = $eleCuadrado2;
	$miArreglo[1][2] = $eleCuadrado3;
	$miArreglo[1][3] = $eleCuadrado4;

	$miArreglo[2][0] = $eleCubo1;
	$miArreglo[2][1] = $eleCubo2;
	$miArreglo[2][2] = $eleCubo3;
	$miArreglo[2][3] = $eleCubo4;

	$miArreglo[3][0] = $eleCuarta1;
	$miArreglo[3][1] = $eleCuarta2;
	$miArreglo[3][2] = $eleCuarta3;
	$miArreglo[3][3] = $eleCuarta4;	

	echo "El resultado es:<br><br>";

	foreach($miArreglo as $miArray) {
		foreach ($miArray as $misNumeros) {
				echo $misNumeros."<br>";
			
		}
	}
	
	//6.a.

	echo "<br>Punto 6A: <br><br>";

	$mes = date("m");

	echo "El mes actual es: ";
	
	switch ($mes) {
		case 1:
			echo "Enero";
			break;
		case 2:
			echo "Febrero";
			break;
		case 3:
			echo "Marzo";
			break;
		case 4:
			echo "Abril";
			break;
		case 5:
			echo "Mayo";
			break;
		case 6:
			echo "Junio";
			break;
		case 7:
			echo "Julio";
			break;
		case 8:
			echo "Agosto";
			break;
		case 9:
			echo "Septiembre";
			break;
		case 10:
			echo "Octubre";
			break;
		case 11:
			echo "Noviembre";
			break;
		case 12:
			echo "Diciembre";
			break;

		default:
			echo "Lo sentimos la fecha actual se encuentra con fallas"
			break;
	}
	
	//6.b.

	echo "<br>Punto 6B: <br><br>";
	
	$vocal = "i";

	switch ($vocal) {
		case "a":
			echo "El codigo ascii de la vocal ".$vocal." es ".ord($vocal);
			break;
		case "e":
			echo "El codigo ascii de la vocal ".$vocal." es ".ord($vocal);
			break;
		case "i":
			echo "El codigo ascii de la vocal ".$vocal." es ".ord($vocal);
			break;
		case "o":
			echo "El codigo ascii de la vocal ".$vocal." es ".ord($vocal);
			break;
		case "u":
			echo "El codigo ascii de la vocal ".$vocal." es ".ord($vocal);
			break;
		
		default:
			echo "Lo sentimos el caracter que ingreso no hace parte de las vocales.";
			break;
	}

	//6.c.

	echo "<br>Punto 6C: <br><br>";

	$numero = 0;

	$numL = (string)$numero;

	switch ($numL) {
		case "0":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "1":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "2":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "3":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "4":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "5":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "6":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "7":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "8":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		case "9":
			echo "El codigo ascii del numero ".$numero." es ".ord($numL);
			break;
		
		default:
			echo "Lo sentimos el numero ingresado no hace parte del rango de numeros requeridos.";
			break;
	}*/
?>