<?php
    // var_dump(); //to display variable data
	//create connection to your system or program database    
    $conn = new mysqli('localhost:3306', 'root', '','computer2') or die(mysqli_error());

    // die(var_dump("check!"));
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";

?>
