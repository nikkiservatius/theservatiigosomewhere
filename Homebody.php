<?php $thisPage = "Home"; ?>
<?php
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
		header('Location: Home.php');
		exit;
  }
  ?>

<div class = "bodytext">

This is a website where you can help us decide where we are going to travel next!

</div>
