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
    $ultimo_dia_mes = date("t");
    $dia_semana = date("w", mktime(0,0,0, $mes, 1, $ano));
    $dias = array(1=>"Lunae", "Martis", "Mercurii", "Iovis", "Verneris", "Saturni", "Dominica");
    $meses=array(1=>"Ianuarius", "Februarius", "Martius", "Aprilis", "Maius", "Iunius", "Iulius", "Augustus", "September", "Octuber", "November", "December");

    echo "<caption>";
    echo $meses[$mes]." ".$año;
    echo "</caption>";
    echo "<tr>";

    foreach($dias as $dia){
      echo "<th>" .$dia."</th>";
    }
    for($f = 0;$f < 5; $f++){
      echo "<tr>";
      if($f == $dia_semana){
        $primer_dia = 1;
      }

      for($c = 1; $c < 8; $c++){
        echo "<td>".$c."</td>";
      }
      echo"</tr>";
    }
    echo "</tr>";
		?>


</table>
</body>
</html>
