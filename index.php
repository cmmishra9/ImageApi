<?php 

 header("Content-Type: application/json");

 $con = mysqli_connect("localhost", "root","", "testapi");
 if(!$con){
     die("Could not connect: ". mysqli_error($con));
 }

 $sql = "SELECT * FROM image_slider";
 $result = mysqli_query($con, $sql);
 
 $output =array();
 while($row = mysqli_fetch_assoc($result)){
     $output[] = $row;
 }
 
 print( json_encode( $output, JSON_PRETTY_PRINT ) );
 mysqli_close($con);

 ?>