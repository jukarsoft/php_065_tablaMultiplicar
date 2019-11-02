<?php 
	//enviar contenido enviando el juego de caracteres UTF-8
	header('Content-Type: text/html; charset=UTF-8');
	$res=null;
	$tabla=null;
	$literal='---------------';
		for ($t=1;$t<=10;$t++) {
			for ($i=0;$i<=10;$i++) {
				$res=$t*$i;
				$tabla=$tabla."<tr><td> $t X $i = $res</td></tr>";
			}
			$tabla=$tabla."<tr><td>-----------------</td></tr>";
		}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla de multiplicar</title>
	<style>
		table, tr, td {border: 1px solid black;}
		
	</style>
</head>
<body>
	<table>
		<?=$tabla;?>
	</table>
</body>
</html>