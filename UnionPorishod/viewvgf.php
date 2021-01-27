<?php

require('header.php');
?>


<?php
	require('db.php');?>
<?php 
$sql = 'SELECT * FROM public where annual_income<10000 and property_amount<50000';
         $result = mysqli_query($con, $sql);

         if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Name: " . $row["name"]. "<br>";
               echo "Ward_No.: " . $row["ward_no"]. "<br>";
               echo "----------------------------------------<br>";
            }
         } else {
            echo "0 results";
         }
?>