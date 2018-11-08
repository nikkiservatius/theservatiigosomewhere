<?php $thisPage = "Destinations";

require_once "Dao.php";
$dao = new Dao();
$destinations = $dao->getDestination();

?>

<html>

<body>
  <table>

    <?php
    <div class = "bodytext">
      foreach ($destinations as $destination)
        {
          echo "<tr>
                  <td>
                      City: " . htmlentities($destination['city']) . "<br>
                      State: " . htmlentities($destination['state']) . "<br>
                      Country: " . htmlentities($destination['country']) . "<br><br>
                      <hr>
          </td>
        </tr>";
        }

    ?>
  </table>
</body>

</html>
