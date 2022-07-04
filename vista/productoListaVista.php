<?php
/**
* Vista de la página de búsqueda
*
* Contiene la plantilla para presentar la página de búsqueda de recursos
*
* @package
* @author
* @version
* @date
*
**/
?>

<html>
<head>
	<title><?php echo $aplicacion; ?></title>
</head>
<body>
	<h1><?=$titulo?></h1>
	<table border="1" align="center">
		<tr>
			<th>Tipo de tamal</th>
			<th>Precio del tamal</th>
			<th>Cantidad disponible</th>
		</tr>

		<tr>
			<th>Tamal de mole</th>
			<td>&#36;20.00</td>
			<td>100</td>
		</tr>
		
		<tr>
			<th>Tamal de bola</th>
			<td>&#36;17.00</td>
			<td>100</td>
		</tr>
		
		<tr>
			<th>Tamal de elote</th>
			<td>&#36;10.00</td>
			<td>100</td>
		</tr>
		
		<tr>
			<th>Chalupita</th>
			<td>&#36;8.00</td>
			<td>100</td>
		</tr>
		
		<tr>
			<th>Tamal de rejas</th>
			<td>&#36;11.00</td>
			<td>100</td>
		</tr>
	</table>
</body>