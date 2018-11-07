<?php $thisPage = "Destinations"; ?>

<div class = "bodytext">
A list of destinations will be here - this data is pulled from a table of user input.

<?php require_once "maketable.php";
    render_table("destination.txt");
      ?>

</div>
