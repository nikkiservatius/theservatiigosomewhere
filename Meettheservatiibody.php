<?php $thisPage = "Meettheservatii";
session_start();
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
		header('Location: index.php');
		exit;
	}
  ?>

<h1>


<div class = "prettymugs">

<link rel="icon" href="prettymugs.jpg" type = "image/gif">

  <img src="prettymugs.jpg" style="width:600px;height:450px;">

</div>

<div class = "bodytext">
<br>Hello!</br>
<br>
Our names are Kyle and Nikki Servatius. We are in our late 20's and love to travel. Kyle is close to finishing a travel item on his bucketlist of traveling to every major continent by the time he is 30. He has traveled to many countries in Europe, Thailand, Cambodia, Peru, New Zealand, Mexico and many places domestically. Nikki has lived on both east and west coasts as well as in Tanzania for two and a half years as a Peace Corps Volunteer as an education extension officer. We spent our early years exploring and finally found each other in 2016.</br>
<br>
Kyle is a registered nurse and has his MBA, so he runs the family health clinic at Micron. Nikki is a high school mathematics and computer science teacher at Pathways in Education, an public charter school in Nampa.<br>
<br>
We have traveled to Puerto Rico, California, Mexico and to many National Parks together, but our traveling is far from over.</br>
<br>
We recently tied the knot (Summer 2018), but since Nikki is working on her Masters degree and an additional teaching endorsement, we have not had an opportunity to go on a honeymoon. That's where you come in.
</br>
</h1>
