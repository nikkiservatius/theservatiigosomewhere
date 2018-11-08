<?php $thisPage = "Destinations";

$dao = new Dao();
$destinations = $dao->getDestination();

?>

<html>

<body>
  <table>

    <?php
      foreach ($destinaitons as $destination)
        {echo "<tr>
                  <td>
                      City: " . htmlentities($destination['city']) . "<br>
                      State: " . htmlentities($destination['state']) . "<br>
                      Country: " . htmlentities($destination['country']) . "<br>
          </td>
        </tr>";
        }

    ?>
  </table>
</body>

</html>
