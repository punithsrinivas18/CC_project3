<?php

function get_price($name, $price)
{
        /* Database INFO */
	$servername = "wyvern.cs.newpaltz.edu";
	$username = "sp1";
	$password = "uq8jbg";
	$dbname = "sp1_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
       }

       $sql = "SELECT price FROM items WHERE product = '$name'";
       $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                      $p = $row["price"];
      }
    } else {
                     $p = null;
        }

    $conn->close();

if ($p == $price) 
  {
    return "true";
  }
else 
 {
  return "false";

 }
}

?>
