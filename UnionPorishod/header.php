<?php
session_start();

?>
<link rel="stylesheet" href="css/style.css" />
<meta charset="utf-8">
<!-- <div class="image">
	<h1>3 No Borobil Union Porishod</h1>
	<img src="x.jpg" class="logimage">
</div> -->
<ul class="menu">
  <li><a class="active" href="index.php">Home</a></li>
  <?php if(isset($_SESSION["adminname"])){?>

 
  <li class="dropbtn"> Data Entry
  	<ul class="dropdown-content">
	  <li><a href="public.php">Public Table</a></li>
	  <li><a href="employee.php">Employee Table</a></li>
	  <li><a href="member.php">Member Table</a></li>
	  <li><a href="project.php">Projects</a></li>
    <li><a href="chairman.php">Chairman List</a></li>
  	</ul>

  </li>
  <li class="dropbtn">View Data
  	<ul class="dropdown-content">
	  <li><a href="viewpublic.php">Public Table</a></li>
	  <li><a href="viewemployee.php">Employee Table</a></li>
	  <li><a href="viewmember.php">Member Table</a></li>
	  <li><a href="viewproject.php">Projects</a></li>
    <li><a href="viewkabikha.php">Kabikha</a></li>
	  <li><a href="viewvgf.php">VGF</a></li>
	  <li><a href="viewadult.php">ADULT_ALLOWANCE</a></li>
  	</ul>



  </li>
    <li><a href="logout.php">Logout</a></li>

  <?php } ?>
  <?php if(!isset($_SESSION["adminname"])){?>
  	<li><a href="login.php">Admin</a></li>
  <?php } ?>

  <li><a href="Galary.html">Galary</a></li>
  <li><a href="result.php">Search</a></li>
  <li><a href="notice.html">Notice</a></li>
  <li><a href="showchairman.php">Respective Chairman List</a></li>
  <li><a href="cb.html">About</a></li>
</ul>


