<?php
 
 require "index.php";
 $event_date = $_POST["dateAsString"];
 $mysql_qry = "SELECT * FROM event WHERE eventDate = '$event_date'";
 $result = mysqli_query($conn, $mysql_qry);
 if(mysqli_num_rows($result) > 0){
	 /*echo "Event Retrieved!!";*/
         while ($row = $result->fetch_assoc()) {
               printf ("%s\n%s", $row["eventName"], $row["eventDesc"]);
           }
 }else{
	 echo "Event not retrieved";
 }
 
 ?>