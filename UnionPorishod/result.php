<?php

require('header.php');
//session_start();
?>


<!DOCTYPE html>
<html>
<div class="btn-search">
   <form role="search" method="post">
    <div class="search-control">
      <p>  </p>
        <input type="search" id="site-search" name="search"
               placeholder="Search by Birth ID">
        <button>Search</button>
    </div>
   </form>
</div>
</html>



<?php
   
	require('db.php');

   if(isset($_POST['search'])){
      $id=trim($_POST['search']);
   
      $sql = "SELECT * FROM public WHERE birth_id = $id";

         $result = mysqli_query($con, $sql);
         $rows = mysqli_num_rows($result);
         
         if (!($rows==0)) {
            while($row = mysqli_fetch_assoc($result)) {
               echo "Birth ID : " . $row["birth_id"]. "<br>";
               echo "Name: " . $row["name"]. "<br>";
               echo "Birthday: ".$row["birthday"]."<br>";
               echo "Fathers Name : " . $row["father_name"]. "<br>";
               echo "Mothers Name : " . $row["mother_name"]. "<br>";
               echo "Village : " . $row["village"]. "<br>";
               echo "National ID : " . $row["nid"]. "<br>";
               echo "Profession : " . $row["profession"]. "<br>";
               echo "Annual Income : " . $row["annual_income"]. "<br>";
               echo "Property Ammount : " . $row["property_amount"]. "<br>";
               
            }
         } else {
            echo "Your Data is not in this Database";
         }
   }
?>

