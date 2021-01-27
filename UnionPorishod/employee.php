<?php

require('header.php');
?>


<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
    	$id = stripslashes($_REQUEST['id']);
		$id = mysqli_real_escape_string($con,$id);
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$ebirthid = stripslashes($_REQUEST['ebirthid']);
		$ebirthid = mysqli_real_escape_string($con,$ebirthid);
		$salary = stripslashes($_REQUEST['salary']); // removes backslashes
		$salary = mysqli_real_escape_string($con,$salary); //escapes special characters in a string
		$mobile = stripslashes($_REQUEST['mobile']); // removes backslashes
		$mobile = mysqli_real_escape_string($con,$mobile); //escapes special characters in a string
		

	
        $query = "INSERT into `employee` (id,name, ebirthid,salary, mobile) VALUES ('$id','$name','$ebirthid', '$salary',
         '$mobile')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Data inserted successfully.</h3></div>";
        }
    }else{
?>
<div class="form">
<h1>Insert Employees Information</h1>
<form name="registration" action="" method="post">
<input type="text" name="id" placeholder="Employee ID" required />
<input type="text" name="name" placeholder="Employee Name" required />
<input type="text" name="ebirthid" placeholder="Birth_ID" required />
<input type="text" name="salary" placeholder="Salary" required />
<input type="text" name="mobile" placeholder="Mobile" required />
<input type="submit" name="submit" value="Register" />
</form>

</div>
<?php } ?>
<body style="background:url(b.jpg);">

</body>
</html>
