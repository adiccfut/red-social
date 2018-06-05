<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="estilos.css">
<link rel="stylesheet" href="https://codyhouse.co/demo/stretchy-navigation/css/reset.css"> 
<link rel="stylesheet" href="https://codyhouse.co/demo/stretchy-navigation/css/style.css"> 
<script src="https://codyhouse.co/demo/stretchy-navigation/js/modernizr.js"></script> 
<script src="https://codyhouse.co/demo/stretchy-navigation/js/jquery-2.1.4.js"></script>
<script src="https://codyhouse.co/demo/stretchy-navigation/js/main.js"></script> 
</head>
<style type="text/css">

</style>
<nav class="cd-stretchy-nav">
<a class="cd-nav-trigger" href="#0">
<span aria-hidden="true"></span>
</a>
<ul>
<li><a href="#0" class="active"><span>Inicio</span></a></li>
<li><a href="formu.php"><span>Crear Tema</span></a></li>
<li><a href="#0"><span>Services</span></a></li>
<li><a href="#0"><span>Store</span></a></li>
<li><a href="#0"><span>Contact</span></a></li>
</ul>
<span aria-hidden="true" class="stretchy-nav-bg"></span>
</nav>
<div class="container">
  <div class="table-responsive"> 
<table class="table" width="620px">
	<tr>
		<td width="20px"></td>
		<td width="200px">Tittle</td>
		<td width="200px">Respuestas</td>
		<td width="200px">Categoria</td>
		
	</tr>
<?php 
	include("conexionBD.php");
	$query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY ID DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		echo "<tr>";
			echo "<td><a href='foro.php?id=$id'>ver</a></td>";
			echo "<td>$titulo</td>";
			echo "<td>$respuestas</td>";
		echo "</tr>";
	}
?>
</table>

