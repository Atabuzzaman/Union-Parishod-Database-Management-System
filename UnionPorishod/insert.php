<?php

require('header.php');

?>


<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
    	$birthid = stripslashes($_REQUEST['birthid']);
		$birthid = mysqli_real_escape_string($con,$birthid);
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$father_name = stripslashes($_REQUEST['father_name']);
		$father_name = mysqli_real_escape_string($con,$father_name);
		$mothers_name = stripslashes($_REQUEST['mother_name']);
		$mothers_name = mysqli_real_escape_string($con,$mother_name);
		$village = stripslashes($_REQUEST['village']); // removes backslashes
		$village = mysqli_real_escape_string($con,$village); //escapes special characters in a string
		$nid = stripslashes($_REQUEST['nid']);
		$nid = mysqli_real_escape_string($con,$nid);
		$profession = stripslashes($_REQUEST['profession']);
		$profession = mysqli_real_escape_string($con,$profession);
		$annual_income = stripslashes($_REQUEST['annual_income']); // removes backslashes
		$annual_income = mysqli_real_escape_string($con,$annual_income); //escapes special characters in a string
		$property_amount = stripslashes($_REQUEST['property_amount']);
		$property_amount = mysqli_real_escape_string($con,$property_amount);
		
        //echo $birthid;
        $query = "INSERT into `public` (birth_id,name, father_name, mother_name, village, nid, profession, annual_income, property_amount) VALUES (''$birthid',$name', '$father_name', '$mother_name', '$village', '$nid', '$profession', '$annual_income','$property_amount')";
        //var_dump($query);
        $result = mysqli_query($con,$query);
        var_dump($result);
        if($result){
            echo "<div class='form'><h3>Data inserted successfully.</h3></div>";
        }
    }else{
?>
<div class="form">
<h1>Insert Public Information</h1>
<form name="registration" action="insert.php" method="post" class="input-form">
<input type="text" name="birthid" placeholder="Birth ID" required />
<input type="text" name="name" placeholder="Name" required />
<input type="text" name="father_name" placeholder="Father Name" required />
<input type="text" name="mother_name" placeholder="Mother Name" required />
<input type="text" name="village" placeholder="Village" required />
<input type="text" name="nid" placeholder="National ID"  />
<input type="text" name="profession" placeholder="Profession" required />
<input type="text" name="annual_income" placeholder="Annul Income" required />
<input type="text" name="property_amount" placeholder="Property Income" required />
<input type="submit" name="submit" value="Register" />
</form>

</div>
<?php } ?>

