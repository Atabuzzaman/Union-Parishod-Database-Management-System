<?php

require('header.php');
?>


<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['submit'])){
    	$id = stripslashes($_REQUEST['id']);
		$id = mysqli_real_escape_string($con,$id);
		$mbirthid = stripslashes($_REQUEST['mbirthid']);
		$mbirthid = mysqli_real_escape_string($con,$mbirthid);
		$name = stripslashes($_REQUEST['name']); // removes backslashes
		$name = mysqli_real_escape_string($con,$name); //escapes special characters in a string
		$ward_no = stripslashes($_REQUEST['ward_no']);
		$ward_no = mysqli_real_escape_string($con,$ward_no);
		$mobile = stripslashes($_REQUEST['mobile']); // removes backslashes
		$mobile = mysqli_real_escape_string($con,$mobile); //escapes special characters in a string
		

	
        $query = "INSERT into `member` (id,mbirthid, name, ward_no, mobile) VALUES ('$id','$mbirthid','$name','$ward_no', '$mobile')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3></div>";
        }
    }else{
?>
<div class="form">
<h1>Insert Members Information</h1>
<form name="registration" action="" method="post">
<input type="text" name="id" placeholder="ID" required /> 
<input type="text" name="mbirthid" placeholder="Birth ID" required />
<input type="text" name="name" placeholder="Name" required />
<input type="text" name="ward_no" placeholder="Ward No" required />
<input type="text" name="mobile" placeholder="Mobile" required />
<input type="submit" name="submit" value="Register" />
</form>

</div>
<?php } ?>
<body style="background:url(b.jpg);">

</body>
</html>
