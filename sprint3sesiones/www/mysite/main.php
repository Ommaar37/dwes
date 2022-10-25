<?php 
	$db = mysqli_connect('localhost' , 'root' , '1234' , 'mysitedb') or die('Fail')
?>
	<head>
		<style>
			imgç
		</style>
	</head>
	<body>
		<h1>Conexión Establecida</h1>
		<?php
			//Lanazar un query.
			$query = 'SELECT * FROM tCanciones';

			$result = mysqli_query($db, $query) or die('Query Error');
			//Recorrer el resultado.
			while ($row = mysqli_fetch_array($result)){
			echo $row[0];
			echo '<br>';
			echo $row['1'];
			echo '<br>';
			echo '<img src="'.$row['2'];
			echo '">';
			echo '<br>';	
			echo $row['3'];
			echo '<br>';	
			echo $row['4'];
			echo '<br>';
			}
		?>
		<a href="/logout.php">Logout</a>
	</body>
</html>
