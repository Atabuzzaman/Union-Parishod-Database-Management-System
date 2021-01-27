<?php

require('header.php');
//session_start();
?>


<?php
	require('db.php');?>
<?php 
$sql = 'SELECT * FROM chairman';
         $result = mysqli_query($con, $sql);
         echo " ID ----- Name ------------ Start Date ----- End Date";
         echo "<br><br>";

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo " " . $row["id"];
               echo "-- " . $row["name"];
               echo "---- " . $row["sd"];
               echo "----- " . $row["ed"]. "<br>";
               echo "<br>";
            }
         } else {
            echo "0 results";
         }
?>