<!DOCTYPE html>
<html lang="es">
<head>
	<title>Intento de Calendario</title
	<meta charset="utf-8">
	<style>
		body{
			background: url('Wllp_mag.jpg');
		}
		h1{
			text-align: center;
			-webkit-text-stroke: 1px black;
			color:pink;
		}
		#calendario{
			font-family:Times;
			font-size:20px;
		}
		#calendario caption{
			background-color: black;
			padding: 5px 10px;
			color:magenta;
			font-weight: bold;
		}
		#calendario th{
			text-align: center;
			background-color: magenta;
			color: black;
			width: 50px;
			border: 2px solid black;
		}
		#calendario td{
			text-align: center;
			background-color: pink;
			border: 1px solid black;
		}
		#calendario .hoy{
			background-color: black;
			color:magenta;
			font-weight: bold;
			border: 5px solid magenta;
			-webkit-text-stroke: 1px pink;
			animation-name: parpadeo;
			animation-duration: 1s;
			animation-iteration-count: infinite;
		}
		@keyframes parpadeo{
			0% {opacity: 1.0;}
			50% {opacity: 0.0;}
			100% {opacity: 1.0;}
		}
		table{
			margin: 0 auto;
			width: 75%;
		}
	</style>
</head>
<body>
<h1> . : Calendario : . </h1>
<table id="calendario">

  <?php
    $mes = date("n");
    $ano = date("Y");
		$dia_actual = date("j");
    $ultimo_dia_mes = date("t");
    $dia_semana = date("w", mktime(0,0,0, $mes, 0, $ano));
    $dias = array(1=>"Lunae", "Martis", "Mercurii", "Iovis", "Verneris", "Saturni", "Dominica");
    $meses=array(1=>"Ianuarius", "Februarius", "Martius", "Aprilis", "Maius", "Iunius", "Iulius", "Augustus", "September", "Octuber", "November", "December");

    echo "<caption>";
    echo $meses[$mes]." ".$año;
    echo "</caption>";
		$day = 1;
		$count = 0;

		$ultima_celda = $dia_semana + $ultimo_dia_mes;
    foreach($dias as $dia){
      echo "<th>" .$dia."</th>";
    }
    for($f = 1;$f <= 6; $f++){
			echo "<tr>";
      for($c = 1; $c <=7; $c++){
				if ($count < $dia_semana){
					echo "<td>&nbsp;</td>";
				}else{
					if($day <= $ultimo_dia_mes){
						echo "<td>".$day."</td>";
						$day++;
					}else{
						echo "<td>&nbsp;</td>";
					}
				}
				$count++;
      }
			echo "</tr>";
    }
		?>

</table>
</body>
</html>
