<?php

require('header.php');

?>


<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
    	$birth_id = stripslashes($_REQUEST['birth_id']);
		$birth_id = mysqli_real_escape_string($con,$birth_id);
		$birthday = stripslashes($_REQUEST['birthday']);
		$birthday = mysqli_real_escape_string($con,$birthday);
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$father_name = stripslashes($_REQUEST['father_name']); // removes backslashes
		$father_name = mysqli_real_escape_string($con,$father_name); //escapes special characters in a string
		$mother_name = stripslashes($_REQUEST['mother_name']); // removes backslashes
		$mother_name = mysqli_real_escape_string($con,$mother_name); //escapes special characters in a string
		$village = stripslashes($_REQUEST['village']);
		$village = mysqli_real_escape_string($con,$village);
		$nid = stripslashes($_REQUEST['nid']);
		$nid = mysqli_real_escape_string($con,$nid);
		$ward_no = stripslashes($_REQUEST['ward_no']);
		$ward_no = mysqli_real_escape_string($con,$ward_no);
		$profession = stripslashes($_REQUEST['profession']);
		$profession = mysqli_real_escape_string($con,$profession);
		$annual_income = stripslashes($_REQUEST['annual_income']); // removes backslashes
		$annual_income = mysqli_real_escape_string($con,$annual_income); //escapes special characters in a string
		$property_amount = stripslashes($_REQUEST['property_amount']); // removes backslashes
		$property_amount = mysqli_real_escape_string($con,$property_amount); //escapes special characters in a string
		

        $query = "INSERT into `public` (birth_id,birthday,name,father_name,mother_name,village, nid,ward_no,profession, annual_income,property_amount) VALUES ('$birth_id','$birthday','$name','$father_name','$mother_name','$village','$nid','$ward_no','$profession', '$annual_income', '$property_amount')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Data inserted successfully.</h3></div>";
        }
    }else{
?>
<div class="form">
<h1>Insert Public Information</h1>
<form name="registration" action="" method="post">
<input type="text" name="birth_id" placeholder="Birth ID" required />
<input type="text" name="birthday" placeholder="Birthday" required />
<input type="text" name="name" placeholder="Name" required />
<input type="text" name="father_name" placeholder="Father Name" required />
<input type="text" name="mother_name" placeholder="Mother Name" required />
<input type="text" name="village" placeholder="Village" required />
<input type="text" name="nid" placeholder="National ID" required />
<input type="text" name="ward_no" placeholder="Ward No" required />
<input type="text" name="profession" placeholder="Profession" required />
<input type="text" name="annual_income" placeholder="Annual Income" required />
<input type="text" name="property_amount" placeholder="Property Amount" required />
<input type="submit" name="submit" value="Register" />
</form>

</div>
<?php } ?>
<body style="background:url(b.jpg);">

</body>
</html>
