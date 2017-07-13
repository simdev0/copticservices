<?php
 
 require "index.php";
 $event_date = $_POST["dateAsString"];
 
$begin = new DateTime( 'now' );
$end = strtotime ( '+30 day' , strtotime ('d/m/Y') ) ;
//$end = date ( 'd/m/Y' , $end);
//IF TAKES TOO LONG, UNCOMMENT THIS LINE AND REMOVE IF STATEMENT IN FOREACH
$interval = DateInterval::createFromDateString('1 day');
$period = new DatePeriod($begin, $interval, $end);
$count =0;
foreach ( $period as $dt ){
  if($count < 31){  
     $iterate_date = $dt->format( "d/m/Y" );
     $mysql_qry = "SELECT * FROM event WHERE eventDate = '$iterate_date'";
     $result = mysqli_query($conn, $mysql_qry);

     if(mysqli_num_rows($result) > 0){
         while ($row = $result->fetch_assoc()) {
               printf ("%s\n%s\n%s\n", $row["eventDate"], $row["eventName"], $row["eventDesc"]);
           }
     } 
     $count++;
  }else{
    break;
  }
}
 ?>