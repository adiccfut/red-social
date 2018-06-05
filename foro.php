<?php
	include("conexionBD.php");
	if(isset($_GET["id"]))
	$id = $_GET['id'];
	$query = "SELECT * FROM  foro WHERE ID = '$id' ORDER BY fecha DESC";
	$result = $mysqli->query($query);
	while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
	}

		?>
<!DOCTYPE html>
<html>
<head>
<title>Interior Register Form Responsive Widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Interior Register Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900" rel="stylesheet">
<link rel="stylesheet" href="https://codyhouse.co/demo/stretchy-navigation/css/reset.css"> 
<link rel="stylesheet" href="https://codyhouse.co/demo/stretchy-navigation/css/style.css"> 
<script src="https://codyhouse.co/demo/stretchy-navigation/js/modernizr.js"></script> 
<script src="https://codyhouse.co/demo/stretchy-navigation/js/jquery-2.1.4.js"></script>
<script src="https://codyhouse.co/demo/stretchy-navigation/js/main.js"></script> 
</head>
<body>

<nav class="cd-stretchy-nav">
<a class="cd-nav-trigger" href="#0">
<span aria-hidden="true"></span>
</a>
<ul>
<li><a href="index.php" ><span>Inicio</span></a></li>
<li><a href="formu.php"><span>Crear Tema</span></a></li>
<!-- <li><a href="#0"><span>Services</span></a></li> -->
<!-- <li><a href="#0"><span>Store</span></a></li> -->
<li><a href="#0"><span>Contact</span></a></li>
</ul>
<span aria-hidden="true" class="stretchy-nav-bg"></span>
</nav>
<div class="signupform">
<h1>Interior Register Form</h1>
	<div class="container">
		
		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
	<?php echo "<tr><td><h3>$titulo</h3></tr></td>";
		echo "<tr><td><p>$mensaje</p></td></tr>";	

	?>
				</div>
			</div>
			<div class="w3_info">
				<h2>Comentarios</h2>
				<p>Responde a este tema rapido y facil.</p>
				<?php
				echo "<br /><br /><a href='Responder.php?id&respuestas=$respuestas&identificador=$id'>Responder</a><br />";
				?>
				<div id="Layer1" style="width:400px; height:415px; overflow: scroll;">
					<body style="overflow-x:hidden"> 
						<form action="#" method="post">
<?php
		
	
	
	$query2 = "SELECT * FROM  foro WHERE identificador = '$id' ORDER BY ID DESC";
	$result2 = $mysqli->query($query2);
// 
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
// 
	echo "<br />respuestas:<br /><br />";
	while($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){
		$id = $row['ID'];
		$titulo = $row['titulo'];
		$autor = $row['autor'];
		$mensaje = $row['mensaje'];
		$fecha = $row['fecha'];
		$respuestas = $row['respuestas'];
		
		
		echo "<table>";
 		echo "<tr><td>"."<b>".'user-'.generateRandomString()."</b>".': '.$mensaje."</p></td></tr>"; 
		echo "<br>";
		echo "</table>";
		
	}

	?>            
					</form>

			</div>
			<div class="clear"></div>
			</div>
			
		</div>
		<div class="footer">

 <p>&copy; Interior Register form 2018. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="blank">W3layouts</a></p>
 </div>
	</div>
	</body>
</html>