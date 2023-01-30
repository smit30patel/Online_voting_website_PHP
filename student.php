<?php
require('connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<html><head>
<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head><body bgcolor="tan">

<center><b><font color = "brown" size="6">PHP Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
<h1> STUDENT HOME </h1>
<a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="changepass.php">Change Password</a> | <a href="logout.php">Logout</a>
</div>
<div id="container">
<p> Click a link above to do some stuff.</p>
<p> To Vote in Current Polls Please go to <u><a href="vote.php" style="color:red;" > Current Polls </a></u></p>
</div>
<div id="footer">
<div class="bottom_addr">&copy; 2022 Simple PHP Polling System. All Rights Reserved</div>
</div>
</div>
</body></html>