<?php
    
    $conn = mysqli_connect('localhost', 'root', '', 'events') or die("COULD NOT CONNECT");

    
    if (isset($_POST['eventName']) && isset($_POST['eventDate'])) {

                $val1 = $_POST['eventName'];
                $val2 = $_POST['eventDate'];
				
                $stmt = "INSERT INTO events(eventName,eventDate) 
                VALUES ( '$val1', '$val2')";
            
                if (mysqli_query($conn,$stmt)) {
                    echo "succes!";
                }
                else {
                    echo "error " . mysqli_error($conn);
                }
                 
          
            $conn->close();
    }
    ?>
<!DOCTYPE html>

<html>
    <head>

        <title>Insert</title>

    </head>

    <body>

        <div> 
            <button><a href="main.php">Inapoi</a></button>

            <form method="POST" action="insert.php">
                <p>Adauga un eveniment</p>

                <label>Numele evenimentului</label><br>
                <input type="text" name="eventName"><br><br>

                <label>Data evenimentului (in format AAAA-LL-ZZ)</label><br>
                <input type="text" name="eventDate"><br>
                
                <br><br><br>
                
                <input type="submit"><br><br>
                
            </form>
               
        </div>

    </body>
</html>