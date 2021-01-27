<?php

require('header.php');
?>


<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
    	
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$budget = stripslashes($_REQUEST['budget']);
		$budget = mysqli_real_escape_string($con,$budget);
		$start_date = stripslashes($_REQUEST['start_date']);
		$start_date = mysqli_real_escape_string($con,$start_date);
		$end_date = stripslashes($_REQUEST['end_date']); // removes backslashes
		$end_date = mysqli_real_escape_string($con,$end_date); //escapes special characters in a string
		

	
        $query = "INSERT into `project` (name, budget, start_date, end_date) VALUES ('$name','$budget','$start_date', '$end_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Data inserted successfully.</h3></div>";
        }
    }else{
?>
<div class="form">
<h1>Insert Projects Information</h1>
<form name="registration" action="" method="post" class="input-form">
<input type="text" name="name" placeholder="Project Name" required />
<input type="text" name="budget" placeholder="Budget" required />
<input type="text" name="start_date" placeholder="Start Date" required />
<input type="text" name="end_date" placeholder="End Date" required />
<input type="submit" name="submit" value="Register" />
</form>

</div>
<?php } ?>

