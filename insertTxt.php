<?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

    $open = fopen('eventsToAdd.txt','r');
 
	while (!feof($open)) 
	{
		$getTextLine = fgets($open);
		$explodeLine = explode(",", $getTextLine);
		
		list($eventName, $eventDate) = $explodeLine;

		$stmt = "INSERT INTO events (eventName,eventDate) 
                VALUES ( '$eventName', '$eventDate')";

		mysqli_query($conn, $stmt);
	}
	 
	fclose($open);

	echo "Finished!";


    $conn->close(); #La final închidem conexiunea.	
?>