<?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<body>
	<?php
		$cancion_id  = $_POST['cancion_id'];
		$comentario = $_POST['new_comment'];
		$fecha = date('Y-m-d');

		$query = "INSERT INTO tComentarios (comentarios, usuario_id, cancion_id, fecha) VALUES ('".$comentario."', NULL, ".$cancion_id.",'".$fecha."');";
echo $query;
	 	mysqli_query($db, $query) or die('Error');

		echo "<p> Nuevo comentario ";
		echo mysqli_insert_id($db);
		echo " añadido </p>";

		echo "<a href='/detail.php?cancion_id=".$cancion_id;
		echo "'>Volver</a>";
		mysqli_close($db);
	?>
	</body>
</html>
