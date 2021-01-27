<?php

require('header.php');
//session_start();
?>


<?php
	require('db.php');?>
<?php 
$sql = 'SELECT * FROM employee,public WHERE ebirthid=birth_id';
         $result = mysqli_query($con, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["name"]. "<br>";
               echo "National ID: " . $row["nid"]. "<br>";
               echo "Birthday: ".$row["birthday"]."<br>";
               echo "Salary: " .$row["salary"]."<br>";
               echo "----------------------------------------<br>";
            }
         } else {
            echo "0 results";
         }
?>