<?php
require('header.php');
/*if(isset($_SESSION["adminname"])){
 header('Location:index.php');
	}*/
?>

<title>Login</title>
<link rel="stylesheet" href="css/style.css" />


<?php

	require('db.php');
	//session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['adminname'])){
		
		$adminname = stripslashes($_REQUEST['adminname']); // removes backslashes
		$adminname = mysqli_real_escape_string($con,$adminname); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		echo $adminname;
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `admin` WHERE adminname='$adminname' and password='$password'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
		echo $rows;
		var_dump($rows);
        if($rows==1){
			$_SESSION['adminname'] = $adminname;
			header("Location: /UnionPorishod/index.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Admin name or Password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>
<div class="form">
	<h1>Barabil Union Porishod</h1>

<h1>Admin</h1>
<form action="" method="post" name="login">
<input type="text" name="adminname" placeholder="Admin Name" required /><br>
<input type="password" name="password" placeholder="Password" required />
<p><input name="submit" type="submit" value="Login" /></p>
</form>

<br /><br />

</div>
<?php } ?>
<body style="background:url(b.jpg);">

</body>
</html>
