<div class = "navbar">
  <ul>
    <li <?php if ($thisPage == "Home") echo  " id=\"currentpage\""; ?>>
      <a href="Home.php">Home</a></li>
    <li <?php if ($thisPage == "Meettheservatii") echo " id=\"currentpage\""; ?>>
      <a href="Meettheservatii.php">Meet The Servatii</a></li>
    <li <?php if ($thisPage == "Destinations") echo " id=\"currentpage\""; ?>>
      <a href="Destinations.php">Destinations</a></li>
    <li <?php if ($thisPage == "Adddestinations") echo " id=\"currentpage\""; ?>>
      <a href="Adddestinations.php">Add Destination</a></li>
    <li <?php if ($thisPage == "Vote") echo " id=\"currentpage\""; ?>>
      <a href="Vote.php">VOTE</a></li>
    <li <?php if ($thisPage == "Logout") echo " id=\"currentpage\""; ?>>
        <a href="Logout.php">Logout</a></li>
  </ul>
</div>
