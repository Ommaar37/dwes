<?php
	$db = mysqli_connect('172.16.0.2', 'root','1234','mysitedb') or die('Fail'. mysqli_connect_error());
?>
<html>
	<head>
		<style>
			img{
				height: 200px;
				width: 200px;
				transition: height 0.8s linear 0.2s;
			}
			img:hover{
				height: 250px;
				width: 250px;
			}
			table, td, th{
				border-collapse: collapse;
			}
			th{
				color: gray;
				transition: color 1s linear 0.3s;
			}
			th:hover{
				color:red;
			}
			td:hover{
				background-color: black;
               			color: red;
			}
			td{
				transition: background-color 0.3s linear 0.5s;
			}
		</style>
	</head>
	<body>
		<h1 style="atext-align:centre">TABLAS DE CANCIONES.</h1>
		<table border="1">
			<tr>
				<th>ID</th>
				<th>Título</th>
				<th>Foto</th>
				<th>Autor</th>
				<th>Género</th>
			</tr>
			<?php 
				//Lanzar una query
				$query = 'SELECT * FROM tCanciones';
				
				$result = mysqli_query($db, $query) or die('Query error');
				//Recorrer el resultado
				while ($row = mysqli_fetch_array($result)){
					echo '<tr>';
					echo '<td>'.$row[0].'</td>';
					echo '<td>'.$row[1].'</td>';
					echo '<td><img src="'.$row[2];
					echo '"></td>';
					echo '<td>'.$row[3].'</td>';
					echo '<td>'.$row[4].'</td>';
					echo '</tr>';
				}
			?>
		</table>
	<a class="boton" href="/logout.php">Logout</a><br><br>
	<a class="boton" href="/pass.html">Cambio de contraseña</a>
	</body>
</html>
