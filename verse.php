<?php
 
 require "index.php";
 $current_date = $_POST["dateAsString"];
 $mysql_qry = "SELECT * FROM verse WHERE currentDate = '$current_date'";
 $result = mysqli_query($conn, $mysql_qry);
 if(mysqli_num_rows($result) > 0){
	 /*echo "Verse Retrieved!!";*/
         while ($row = $result->fetch_assoc()) {
               printf ("%s", $row["verse"]);
           }
 }else{
	 echo "Verse not retrieved";
 }
 
 ?>