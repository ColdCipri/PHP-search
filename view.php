<!DOCTYPE html>
<html>
	<head>

		<title>View</title>

	</head>

	<body>

		 <div>
	             
	            <button><a href="main.php">Inapoi</a></button>
	            <button><a href="search.php">Cauta un eveniment dupa data</a></button>

				<?php
					$conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

					$sql = "SELECT eventName, eventDate FROM `events`";

					$result = mysqli_query($conn, $sql);


					echo "<table border='1'>
							<tr>
								<th>
									Nume Eveniment
								</th>
								<th>
									Data eveniment
								</th>
							</tr>";

					while($row = mysqli_fetch_array($result)){
						echo "<tr>";
						echo "<td>" . $row['eventName'] . "</td>";
						echo "<td>" . $row['eventDate'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";

					mysqli_close($conn);
				?>

		</div>

	</body>
</html>