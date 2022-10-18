<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<body>
	<?php
		$pelicula_id  = $_POST['pelicula_id'];
		$comentario = $_POST['new_comment'];
		$fecha = date('Y-m-d');

		$query = "INSERT INTO tComentarios (comentarios, usuario_id, pelicula_id, fecha) VALUES ('".$comentario."', NULL, ".$pelicula_id.",'".$fecha."');";
echo $query;
	 	mysqli_query($db, $query) or die('Error');

		echo "<p> Nuevo comentario ";
		echo mysqli_insert_id($db);
		echo " añadido </p>";

		echo "<a href='/detail.php?pelicula_id=".$pelicula_id;
		echo "'>Volver</a>";
		mysqli_close($db);
	?>
	</body>
</html>
