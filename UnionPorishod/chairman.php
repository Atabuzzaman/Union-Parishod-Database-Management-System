<?php

require('header.php');
?>


<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
    	$id = stripslashes($_REQUEST['id']); // removes backslashes
		$id = mysqli_real_escape_string($con,$id); 
		$cbirthid = stripslashes($_REQUEST['cbirthid']); // removes backslashes
		$cbirthid = mysqli_real_escape_string($con,$cbirthid); 
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$sd = stripslashes($_REQUEST['sd']);
		$sd = mysqli_real_escape_string($con,$sd);
		$ed = stripslashes($_REQUEST['ed']);
		$ed = mysqli_real_escape_string($con,$ed);
		$mobile = stripslashes($_REQUEST['mobile']); // removes backslashes
		$mobile = mysqli_real_escape_string($con,$mobile); //escapes special characters in a string
		

	
        $query = "INSERT into `chairman` (id,cbirthid,name, sd, ed, mobile) VALUES ('$id','$cbirthid','$name','$sd','$ed', '$mobile')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3></div>";
        }
    }else{
?>
<div class="form">
<h1>Insert Chairman Information</h1>
<form name="registration" action="" method="post">
<input type="text" name="id" placeholder="ID" required />
<input type="text" name="cbirthid" placeholder="Birth_ID" required />
<input type="text" name="name" placeholder="Name" required />
<input type="text" name="sd" placeholder="Start Date" required />
<input type="text" name="ed" placeholder="End Date" required />
<input type="text" name="mobile" placeholder="Mobile" required />
<input type="submit" name="submit" value="Register" />
</form>

</div>
<?php } ?>
<body style="background:url(b.jpg);">

</body>
</html>
