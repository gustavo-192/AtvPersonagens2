<!DOCTYPE html>
<html>
<head>
	<title>pag6</title>
	<meta charset="utf-8">
</head>
<body>

<form action="" method="POST">

<h1>Personagens fictícios</h1>
<label><b>Preencha as caixas de texto abaixo com nomes de personagens fictícios (filmes, animes, quadrinhos, etc).</b></label><br><br>

<table>
	
	<tr> 
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Alter Ego</th>
		<th>Poderes</th>
		
	</tr>
	<tr style="border-style: solid;"> 
		<td><input style="background-color: #FFDAB9" type="text" name="1nome"></td>
		<td><input style="background-color: #E0FFFF" type="text" name="1sobrenome"></td>
		<td><input style="background-color: #D8BFD8" type="text" name="1alterego"></td>
		<td><input style="background-color: #FFD700" type="text" name="1poder"></td>
	</tr>
	<tr style="border-style: solid;"> 
		<td><input style="background-color: #FFDAB9" type="text" name="2nome"></td>
		<td><input style="background-color: #E0FFFF" type="text" name="2sobrenome"></td>
		<td><input style="background-color: #D8BFD8" type="text" name="2alterego"></td>
		<td><input style="background-color: #FFD700" type="text" name="2poder"></td>
	</tr>
	<tr style="border-style: solid;"> 
		<td><input style="background-color: #FFDAB9" type="text" name="3nome"></td>
		<td><input style="background-color: #E0FFFF" type="text" name="3sobrenome"></td>
		<td><input style="background-color: #D8BFD8" type="text" name="3alterego"></td>
		<td><input style="background-color: #FFD700" type="text" name="3poder"></td>
	</tr>
	<tr style="border-style: solid;"> 
		<td><input style="background-color: #FFDAB9" type="text" name="4nome"></td>
		<td><input style="background-color: #E0FFFF" type="text" name="4sobrenome"></td>
		<td><input style="background-color: #D8BFD8" type="text" name="4alterego"></td>
		<td><input style="background-color: #FFD700" type="text" name="4poder"></td>
	</tr>
</table><br>

<input type="submit" value="Enviar" name="Enviar">
<hr>
<?php


if (isset($_POST["Enviar"]))

{
		
	#criando Matriz $Personagens e armazenando valores dos "Input"
	$Personagens = array(
		array($_POST['1nome'],$_POST['1sobrenome'],$_POST['1alterego'],$_POST['1poder']),
		array($_POST['2nome'],$_POST['2sobrenome'],$_POST['2alterego'],$_POST['2poder']),
		array($_POST['3nome'],$_POST['3sobrenome'],$_POST['3alterego'],$_POST['3poder']),
		array($_POST['4nome'],$_POST['4sobrenome'],$_POST['4alterego'],$_POST['4poder'])
	);

	#armazenando a quantidade de linhas da matriz
	$linhas = count($Personagens); 
	
	#calculando a quantidade de colunas da matriz
	$total = count($Personagens, COUNT_RECURSIVE);
	$colunas = ($total - $linhas) / $linhas; 


	#exibindo Valores da Matriz $Personagens

	echo "<table border='1'>";

	#comando de reetição para varrer as linhas
	for ($i=0; $i < $linhas ; $i++) 
	{ 
		echo "<tr>";
		#comando de repetição para varrer as colunas
		for ($j=0; $j < $colunas ; $j++) 
		{ 
			echo "<td style='padding:5px;'>";
			echo $Personagens [$i][$j];
			echo "</td>";
		}
		echo "</tr>";
	}
	echo"</table><br>";
}


?>

</form>

<label><b>Gustavo Trajano Costa TI-95</b></label>
</body>
</html>