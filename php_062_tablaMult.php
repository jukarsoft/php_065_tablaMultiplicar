<?php 
	//enviar contenido enviando el juego de caracteres UTF-8
	header('Content-Type: text/html; charset=UTF-8');
	$n1=null;
	$res=null;
	$tabla=null;
	$literal='';
	if (isset($_POST['enviar'])) {
		$n1=$_POST['num'];
		if ($n1>0 && $n1<=10) {
			for ($i=0;$i<=10;$i++) {
				$res=$n1*$i;
				$tabla=$tabla."<tr><td> $n1 X $i = $res</td></tr>";
			}
		} else {
			$literal="fuera de rango (entre 1 y 10)";
		}
		
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tabla de multiplicar</title>
	<style>
		table, tr, td {
			 border: 1px solid black;
		}
	</style>
</head>
<body>
	<form method='post' action="#">
		<label>tabla del: </label>
		<input type="number" name="num"  min="1" value="<?=$n1;?>">
		<input type="submit" name="enviar" value="Enviar Consulta">

	</form>
	<table>
		<?=$tabla;?>
	</table>
	<p><?=$literal;?></p>
</body>
</html>