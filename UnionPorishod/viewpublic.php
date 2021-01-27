<?php

require('header.php');
//session_start();
?>


<?php
	require('db.php');?>
<?php 
$sql = 'SELECT * FROM public';
         $result = mysqli_query($con, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["name"]. "<br>";
               echo "Birth ID: " . $row["birth_id"]. "<br>";
               echo "----------------------------------------<br>";
            }
         } else {
            echo "0 results";
         }
?>