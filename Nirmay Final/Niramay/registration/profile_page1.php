<?php
session_start();
//make connection
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
 	session_destroy();
  	unset($_SESSION['username']);
 	header("location: login.php");
  }
$conn = mysqli_connect('localhost', 'root', '', 'registration');
$username1=$_SESSION['username']
$sql = "SELECT * FROM users WHERE U_NAME= username1";
$result = mysqli_query($conn,$sql);
// $resultCheck = mysqli_num_rows($result);
$data = mysqli_fetch_assoc($result);
// echo $data['bio']
?>
<html>
<head>
    <title>PROFILE</title>

<link rel="stylesheet" type="text/css" href="profile_css1.css"> 
</head>
<body style="overflow: hidden;">
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p style="position: relative; bottom: 140px; left: 650px">Welcome <strong><?php echo $_SESSION['username']; ?></strong> </p>
    	<p style="position: relative; bottom: 163px; left: 800px"> <a href="index.php?logout='1'" style="color: red;">(logout)</a> </p>
    <?php endif ?>
</div>
    <div  class="box">
            <form method="post">
                        <div class="profile-img">
                            <input type="image" name="image" src="p1.png" alt=""> 
                                <label class
                                ="change-photo" style="text-align: center; position: relative;" >
                                     <input type="file"/>
                                         Change Photo
                                </label>
                         </div>       
<!--
                         </div>
                            <label style="position: relative; left: 5.5%;top: 90px;">BIO</label>
-->
<!--
                        <div class="Bio">
                            <input type="text" style =" border-color: red; border-style: solid;" name="BIO" value="<?php echo $data['BIO']?>">
                            <textarea readonly style="position: relative; top: 30px; left: 1.8%; border: none;"><?php echo $data['BIO']?></textarea>
                        </div> 
-->
                        <!-- input type="image" name="image" src="medal.jpg" alt="" style="position: relative; height: 40%;width: 20%"> -->
                        <div style="top: 100px;position: relative;left: 5%;float: left;"><label>"Anybody can save lives"</label></div>
                        <!-- <p style="">"done something for someone who can never repay you!"</p> -->
                        <div class="vl"></div>
   <!-- #main LEFT DIV   --><div style="position: relative;padding-top:10%; left: 2%">
                                <input type="text" name="U_name" style="position: relative; left: 28%;top:-270px;  height: 40px; font-size: 30px; color: black " readonly="" value="<?php echo $data['U_NAME']?>" >

                            <input type="text" name="Designation" readonly style="left:-2.4%;top: -240px;height: 40px; font-size: 20px; color: black;" value="<?php echo $data['PROFESSION']?>">

                            <div style="position: relative; left: 28%;top: -220px;">
                                <label>No of Donations: <input type="text" readonly name="D_no" value="<?php echo $data['DONATION_COUNT']?>"></label>
                        </div>
                        <div style="position: relative; top: -210px; left: 11%;">
                            <label style="position: relative; top: 8px; left: 17.6% ">About</label>
                        <hr style="size: 10px;width: 700px;">
                        </div>
                    <div style="position: relative; ">

                        <div style="position: relative; left:28%;top: -200px; ">
                        <label>User Name</label> 
                        <input type="text" name="U_id" Value="<?php echo $data['U_NAME']?>" readonly style="left:278px; ">
                        </div>

                        <div style="position: relative; left: 28%;top: -180px;">
                        <label>Blood Group </label> 
                        <input type="text" name="b_group" value="<?php echo $data['BLOOD_GROUP']?>" readonly style="left:267px; ">
                        </div>

                         <div style="position: relative; left: 28%;top: -160px;">
                        <label>Name </label> 
                        <input type="text" name="name" value="<?php echo $data['U_NAME']?>" readonly style="left:313px;">
                        </div>

                        <div style="position: relative; left: 28%;top: -140px;">
                        <label>Email </label> 
                        <input type="text" name="Email" value="<?php echo $data['EMAIL']?>" readonly style=" left:313px;width: 250px;">
                        </div>
                        <div style="position: relative; left: 28%;top: -120px;">
                        <label>Phone </label> 
                        <input type="text" name="Phone_no" value="<?php echo $data['CONTACT_NO']?>" readonly style=" left:311px;">
                        </div>
                        <div style="position: relative; left: 28%;top: -100px;">
                        <label>Profession </label> 
                        <input type="text" name="Profession" value="<?php echo $data['PROFESSION']?>" readonly style=" left:283px;width: 180px;">
                        </div>
                    </div>   
                </div>
                </div>
            </form>
    </div>                    
</body>
</html>