<?php

require('header.php');
//session_start();
?>


<?php
	require('db.php');?>
<?php 
$sql = "SELECT * FROM public where annual_income<=20000 AND birthday<19701212 ";
         $result = mysqli_query($con, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "F_Name: " . $row["name"]. "<br>";
               echo "Village : " . $row["village"]. "<br>";
               echo "property_amount: ".$row["property_amount"]."<br>";
               echo "----------------------------------------<br>";
            }
         } else {
            echo "0 results";
         }
?>