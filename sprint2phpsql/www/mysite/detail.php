<?php
	$db = mysqli_connect('localhost','root','1234','mysitedb')or die('Fail');
?>
<html>
	<body>
		<?php
			if (!isset($_GET['cancion_id'])){
				die('No se ha especificado una pelicula');
			}
			$cancion_id = $_GET['cancion_id'];
			$query = 'SELECT * FROM tCanciones WHERE id='.$cancion_id;
			$result = mysqli_query($db, $query) or die ('Query error');
			$only_row = mysqli_fetch_array($result);
			echo '<h1>'.$only_row['1'].'</h1>';
			echo '<img src="'.$only_row['2'];
			echo '">';
			echo '<h2>'.$only_row['3'].'</h2>';
			echo '<h2>'.$only_row['4'].'</h2>';
		?>
		<h3>Comentarios</h3>
		<ul>
			<?php
				$query2 = 'SELECT * FROM tComentarios WHERE pelicula_id='.$pelicula_id;
				$result2 = mysqli_query($db, $query2) or die('Query error2');
				while ($row = mysqli_fetch_array($result2)){
					$fecha = $row['fecha'];
					if (is_null($fecha)) {
						echo '<li>'.$row['1'].' (Sin fecha registrada)</li>';
					}else {
						echo '<li>'.$row['1'].' ('.$row['fecha'].')</li>';
					}
				}
				mysqli_close($db);
			?>
		</ul>
	</body>
</html>
