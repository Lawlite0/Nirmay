<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "data";
	$tableName = "user_db";
	$names = array();
	$bloodgroup = array();
	$connect = mysqli_connect($server, $user, $pass,$dbname);
	if(!$connect){

		die("connecttion failed".mysqli_connect_error());

	}

	$query = "SELECT * FROM $tableName WHERE bloodgrp = 'A-'";
	$executeQuery = mysqli_query($connect,$query);

	if(mysqli_num_rows($executeQuery) > 0){

		while($row = mysqli_fetch_assoc($executeQuery)){

		array_push($names , $row['name']);
		array_push($bloodgroup , $row['bloodgrp']);


	}}
	else{

		die("error hai");

	}


	
	mysqli_close($connect);

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="stylee.css">
</head>
<body>
  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<h2>Animated Sidenav Example</h2>
<p>Click on the element below to open the side navigation menu.</p>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<div class="main">

<h1><img class="image" src="NIRMAY_logo1.png"></h1>
<hr>

<h2>DONOR'S</h2>

<div>
  <button class="btn active" onclick="window.location.href='show_all.php'"> Show all</button>
  <button class="btn" onclick="window.location.href='bloodgroup_O_plus.php'"> O+</button>
  <button class="btn" onclick="window.location.href='bloodgroup_O_minus.php'">O-</button>
  <button class="btn" onclick="window.location.href='bloodgroup_A_plus.php'"> A+</button>
  <button class="btn" onclick="window.location.href='bloodgroup_A_minus.php'"> A-</button>
  <button class="btn" onclick="window.location.href='bloodgroup_B_plus.php'"> B+</button>
  <button class="btn" onclick="window.location.href='bloodgroup_B_minus.php'"> B-</button>
  <button class="btn" onclick="window.location.href='bloodgroup_AB_plus.php'"> AB+</button>
  <button class="btn" onclick="window.location.href='bloodgroup_AB_minus.php'"> AB-</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
 
    <?php

    	for($i = 0 ; $i < sizeof($names) ; $i++){

    ?>
		<div class="column nature">
		<div class="content">
		<img src="passport.jpg" width="120" height="140">
		<h4><?php echo($names[$i])?></h4>
		<p><?php echo($bloodgroup[$i])?></p>
		</div>
		</div>
  <?php
}
  ?>
 
 
  
 <!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}



</script>


</body>
</html>
