<?php
$db = mysqli_connect('localhost', 'root', '1234', 'tCanciones') or die('Fail');
?>
<html>
<body>
<?php
if (!isset($_GET['cancion_id'])) {
die('No se ha especificado una canción');
}
$cancion_id = $_GET['cancion_id'];
$query = 'SELECT * FROM tCanciones WHERE id='.$cancion_id;
$result = mysqli_query($db, $query) or die('Query error');
$only_row = mysqli_fetch_array($result);
echo '<h1>'.$only_row['titulo'].'</h1>';
echo '<h2>'.$only_row['año'].'</h2>';
?>
<h3>Comentarios:</h3>
<ul>
<?php
$query = 'SELECT * FROM tCanciones WHERE id=$cancion_id';
			
			$result = mysqli_query($db, $query) or die('Query error');
			//Recorrer el resultado
			while ($row = mysqli_fetch_array($result)){
			echo $row[0];
			echo '<br>';
			echo  $row['1'];
			echo '<br>';
			echo '<img src="'.$row['2'];
			echo '">';
			echo '<br>';
			echo $row['3'];
			echo '<br>';
			echo $row['4'];
			echo '<br>';
			}
$query2 = 'SELECT * FROM tComentarios WHERE cancion_id='.$cancion_id;
$result2 = mysqli_query($db, $query2) or die('Query error');
while ($row = mysqli_fetch_array($result2)) {
echo '<li>'.$row['comentario'].'</li>';
}
mysqli_close($db);
?>
</ul>
</body>
</html>
