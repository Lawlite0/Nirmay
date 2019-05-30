<?php
session_start();
//make connection

$conn = mysqli_connect('localhost','root','','userdata');

$sql = "SELECT * FROM users WHERE U_= 1;";
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
                        <div style="padding-top: 10%;position: relative;left: 6%;"><label>"Anybody can save lives"</label></div>
                        <!-- <p style="">"done something for someone who can never repay you!"</p> -->
                        <div class="vl"></div>
   <!-- #main LEFT DIV   --><div style="position: fixed;top:10%; left: 29%">
                                <input type="text" name="U_name" style="position: relative;height: 40px; font-size: 30px; color: black " readonly="" value="Kunal" >
                                    <br>
                            <input type="text" name="Designation" readonly style="left:0%;top: 2%;height: 40px; font-size: 20px; color: black;" value="student">
                            <br>
                            <br>
                            <div style="position: relative; left: 0%;top: 3%;">
                                <label>No of Donations: <input type="text" readonly name="D_no" value="<?php echo $data['DONATION_COUNT']?>"></label>
                        </div>
                        <br>
                        <div style="position: relative; top: 8%; left: 0%;">
                            <label style="position: relative; top: 8px; left: 0% ">About</label>
                        <hr style="size: 10px;width: 233%;">
                        </div>
                        <br>
                    <div style="position: relative; top: 10%; ">

                        <div style="position: relative; left:0%;top: 15%; ">
                        <label>User Name</label> 
                        <input type="text" name="U_id" Value="<?php echo $data['PROFESSION']?>" readonly style="left:87%; ">
                        </div>
                        <br>
                        <div style="position: relative; left: 0%;top: 15%;">
                        <label>Blood Group </label> 
                        <input type="text" name="b_group" value="<?php echo $data['PROFESSION']?>" readonly style="left:83.5%; ">
                        </div>
                        <br>
                         <div style="position: relative; left: 0%;top: 15%;">
                        <label>Name </label> 
                        <input type="text" name="name" value="<?php echo $data['PROFESSION']?>" readonly style="left:98%;">
                        </div>
                        <br>
                        <div style="position: relative; left: 0%;top: 15%;">
                        <label>Email </label> 
                        <input type="text" name="Email" value="<?php echo $data['PROFESSION']?>" readonly style=" left:98%;width: 250px;">
                        </div>
                        <br>
                        <div style="position: relative; left: 0%;top: 15%;">
                        <label>Phone </label> 
                        <input type="text" name="Phone_no" value="<?php echo $data['PROFESSION']?>" readonly style=" left:97%;">
                        </div>
                        <br>
                        <div style="position: relative; left: 0%;top: 15%;">
                        <label>Profession </label> 
                        <input type="text" name="Profession" value="<?php echo $data['PROFESSION']?>" readonly style=" left:89%;width: 180px;">
                        </div>
                    </div>   
                </div>
                </div>
            </form>
    </div>                    
</body>
</html>