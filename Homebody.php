<?php
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
		header('Location: index.php');
		exit;
	}
  ?>



<h1>


<div class = "prettymugs">

<link rel="icon" href="whereintheworld.png" type = "image/gif">

  <img src="whereintheworld.png" style="width:600px;height:450px;">

</div>

<div class = "bodytext">
<br>Welcome!</br>
<br>
Thanks for being part of our adventure! We thought we would throw our hats to the wind and let the power of democracy decide where our traveling feet should go.</br>
<br>
Please feel free to learn more about us, look at the current destinations that can be voted for, add your own destionation that you would like to see us travel to, and of course, go on and VOTE!
<br>
When the countdown strikes 0, the destination with the most votes is where we will buy our next plane tickets to and pack our bags! </br>
<br>
Thanks for your help and wish us luck! </br>
</h1>
